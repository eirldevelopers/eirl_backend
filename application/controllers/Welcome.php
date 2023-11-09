<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends Public_Controller
{
	public function __construct()
	{
		parent::__construct();
		/* Load Langauge */
		// $this->lang->load('admin/categories');
		/* Load Model */
		$this->load->model('welcome_model');
		// $this->load->model('user/cart_model');
		// $this->load->model('ion_auth_model');
	}

	public function index()
	{
		$this->data['css'] = ['style.css'];
		$this->template->public_render('web/index', $this->data);
	}
	public function load_about()
	{
		$this->data['css'] = ['style.css', 'about.css'];
		$this->template->public_render('web/about_us', $this->data);
	}
	public function load_gallery()
	{
		$this->data['css'] = ['style.css', 'about.css'];
		$this->template->public_render('web/gallery', $this->data);
	}
	public function load_what_we_do()
	{
		$this->data['css'] = ['style.css', 'about.css'];
		$this->template->public_render('web/what_we_do', $this->data);
	}
	public function load_work_with_us()
	{
		$this->data['css'] = ['style.css', 'about.css'];
		$this->template->public_render('web/work_with_us', $this->data);
	}
	public function load_talk_to_us()
	{
		// $this->data['css'] = ['style.css', 'about.css'];
		// $this->template->public_render('web/gallery', $this->data);
		$this->load->view('web/talk_to_us');
	}

	public function work_with_us()
	{

		// print_r($_POST);
		// print_r($_FILES);
		// exit();
		$name = $this->input->post('name');
		$number = $this->input->post('number');
		$email = $this->input->post('email');
		$job_profile = $this->input->post('profile');
		$experience = $this->input->post('experience');

		if (empty($name) && empty($number) && empty($email) && empty($message) && empty($job_profile) && empty($experience)) {
			echo json_encode(array('status' => 0, "message" => 'Please enter all the details'));
		} else {
			$data = [
				'name' => $name,
				'mobile' => $number,
				'email' => $email,
				'experience' => $experience,
				'profile' => $job_profile,
			];

			$insert_id = $this->welcome_model->save_work_with_us($data);
			// echo $insert_id;
			if ($insert_id) {
				/*-----------------profile_pic----------------------*/
				$this->load->library('upload');
				foreach ($_FILES as $field_name => $file_data) {
					$img_path = './uploads';
					$file = 'New' . time() . rand(100, 999);
					$config = array(
						'upload_path'       => $img_path,
						'allowed_types' => 'png|jpg|jpeg|pdf|csv',
						'file_name'         => $file,
						'overwrite'         => FALSE,
						'remove_spaces'     => TRUE,
						'quality'           => '100%',
					);
					$this->upload->initialize($config);
					// print_r($file_data);
					if (!empty($file_data['name'])) {
						$_FILES[$field_name] = $file_data;
						if ($this->upload->do_upload($field_name)) {
							$uploaded_files[$field_name] = $this->upload->data()['file_name'];
						} else {
							$error[$field_name] = $this->upload->display_errors();
						}
					}
				};
			// print_r( $uploaded_files);
				if ($this->welcome_model->img_insert($uploaded_files, $insert_id)) {
					echo json_encode(array('status' => 1, "message" => 'Query send successfully'));
				};
			} else {
				echo json_encode(array('status' => 0, "message" => 'Error! please try again later'));
			}
		}
	}
	public function talk_to_us()
	{

		// print_r($_POST);
		// print_r($_FILES);
		// exit();
		$name = $this->input->post('name');
		$number = $this->input->post('phone');
		$format = $this->input->post('format');
		$email = $this->input->post('email');
		$purpose = $this->input->post('purpose');
		$question = $this->input->post('question');

		if (empty($name) && empty($number) && empty($email) && empty($format) && empty($purpose) && empty($question)) {
			echo json_encode(array('status' => 0, "message" => 'Please enter all the details'));
		} else {
			$data = [
				'name' => $name,
				'mobile' => $number,
				'email' => $email,
				'format' => $format,
				'purpose' => $purpose,
				'question' => $question,
			];

			$insert_id = $this->welcome_model->save_talk_to_us($data);
			if ($insert_id) {
				echo json_encode(array('status' => 1, "message" => 'Query send successfully'));
			} else {
				echo json_encode(array('status' => 0, "message" => 'Error! please try again later'));
			}
		}
	}
}
