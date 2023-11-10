<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Project extends Admin_Controller
{

  public function __construct()
  {
    parent::__construct();

    /* Load :: Common */
    // $this->load->model('admin/users_model');
    // $this->load->model('admin/cities_model');
    $this->load->model('admin/project_model');
  }

  public function index()
  {
    /* Title Page */
    $this->page_title->push(lang('menu_projects'));
    $this->data['pagetitle'] = $this->page_title->show();


    if (!$this->ion_auth->logged_in()) {
      // redirect them to the login page
      redirect('auth/login', 'refresh');
    }
    /* Validate form input */

    $validation = [
      [
        'field' => 'project_name',
        'label' => 'Project Name',
        'rules' => 'required|trim',
        'errors' => ['required' => 'Please enter %s.']
      ],
      [
        'field' => 'para_1',
        'label' => 'Project Description',
        'rules' => 'required',
        'errors' => ['required' => 'Project description is required.']
      ],
    ];

    $this->form_validation->set_rules($validation);

    if ($this->form_validation->run() == true) {

      $additional_data = [
        'project_name' => $this->input->post('project_name') ? $this->input->post('project_name') : "",
        'project_para_1' => $this->input->post('para_1') ? $this->input->post('para_1') : "",
        'project_para_2' => $this->input->post('para_2') ? $this->input->post('para_2') : "",
        'project_para_3' => $this->input->post('para_3') ? $this->input->post('para_3') : "",
      ];

      // print_r($additional_data);

      $insert_id = $this->project_model->add_project($additional_data);

      // echo $insert_id;
      // die();
      if ($insert_id) {
        /*-----------------profile_pic----------------------*/
        $this->load->library('upload');

        foreach ($_FILES as $field_name => $file_data) {


          $product_img_path = './uploads';
          $file = 'New' . time() . rand(100, 999);
          $config = array(
            'upload_path'       => $product_img_path,
            'allowed_types' => 'png|jpg|jpeg',
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
        $this->project_model->project_img_insert($uploaded_files, $insert_id);

        $this->session->set_flashdata('message', ['1', 'Project added successfully.']);
        redirect('projects', 'refresh');
      } else {
        $this->session->set_flashdata('message', ['0', 'Project added failed.']);
        redirect('projects', 'refresh');
      }
    } else {
      //print_r($this->data['categories']); die;
      $this->template->admin_render('admin/project/index', $this->data);
    }
  }

  public function project_list()
  {
    $this->page_title->push(lang('menu_project_list'));
    $this->data['pagetitle'] = $this->page_title->show();
    $this->data['project_list'] = $this->project_model->get_project_list();
    $this->template->admin_render('admin/project/project_list', $this->data);
  }

  public function edit_project($id)
  {
    $this->page_title->push(lang('menu_projects'));
    $this->data['pagetitle'] = $this->page_title->show();


    if (!$this->ion_auth->logged_in()) {
      // redirect them to the login page
      redirect('auth/login', 'refresh');
    }
    /* Validate form input */

    $validation = [
      [
        'field' => 'project_name',
        'label' => 'Project Name',
        'rules' => 'required|trim',
        'errors' => ['required' => 'Please enter %s.']
      ],
      [
        'field' => 'para_1',
        'label' => 'Project Description',
        'rules' => 'required|trim',
        'errors' => ['required' => 'Project description is required.']
      ],
    ];

    $this->form_validation->set_rules($validation);

    if ($this->form_validation->run() == true) {

      $additional_data = [
        'project_name' => $this->input->post('project_name') ? $this->input->post('project_name') : "",
        'project_para_1' => $this->input->post('para_1') ? $this->input->post('para_1') : "",
        'project_para_2' => $this->input->post('para_2') ? $this->input->post('para_2') : "",
        'project_para_3' => $this->input->post('para_3') ? $this->input->post('para_3') : "",
      ];

        // print_r($additional_data);

      ;

      // echo $insert_id;
      // die();
      if ($this->project_model->update_project($additional_data, $id)) {
        /*-----------------profile_pic----------------------*/
        $this->load->library('upload');

        foreach ($_FILES as $field_name => $file_data) {


          $product_img_path = './uploads';
          $file = 'New' . time() . rand(100, 999);
          $config = array(
            'upload_path'       => $product_img_path,
            'allowed_types' => 'png|jpg|jpeg',
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
        $this->project_model->update_project_img($uploaded_files, $id);

        $this->session->set_flashdata('message', ['1', 'Project edit successfully.']);
        redirect('edit-project/' . $id, 'refresh');
      } else {
        $this->session->set_flashdata('message', ['0', 'Project edit failed.']);
        redirect('edit-project/' . $id, 'refresh');
      }
    } else {
      //print_r($this->data['categories']); die;
      $this->data['get_project_details'] = $this->project_model->get_project_details($id);
      $this->template->admin_render('admin/project/edit', $this->data);
    }
  }

  public function delete_project()
  {
    $delete_id = $this->input->post('delete_id');
    if ($delete_id) {
      if ($this->project_model->delete_project($delete_id)) {
        echo json_encode(array("status" => 1, "message" => "Project delete successfully"));
      } else {
        echo json_encode(array("status" => 0, "message" => "Error ! Please try again  later"));
      }
    }
  }
}
