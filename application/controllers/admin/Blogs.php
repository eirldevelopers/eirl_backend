<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Blogs extends Admin_Controller
{

    public function __construct()
    {
        parent::__construct();

        /* Load :: Common */
        // $this->load->model('admin/users_model');
        // $this->load->model('admin/cities_model');
        $this->load->model('admin/blog_model');
    }

    //   public function index()
    //   {
    //     /* Title Page */
    //     $this->page_title->push(lang('menu_projects'));
    //     $this->data['pagetitle'] = $this->page_title->show();


    //     if (!$this->ion_auth->logged_in()) {
    //       // redirect them to the login page
    //       redirect('auth/login', 'refresh');
    //     }
    //     /* Validate form input */

    //     $validation = [
    //       [
    //         'field' => 'project_name',
    //         'label' => 'Project Name',
    //         'rules' => 'required|trim',
    //         'errors' => ['required' => 'Please enter %s.']
    //       ],
    //       [
    //         'field' => 'para_1',
    //         'label' => 'Project Description',
    //         'rules' => 'required',
    //         'errors' => ['required' => 'Project description is required.']
    //       ],
    //     ];

    //     $this->form_validation->set_rules($validation);

    //     if ($this->form_validation->run() == true) {

    //       $additional_data = [
    //         'project_name' => $this->input->post('project_name') ? $this->input->post('project_name') : "",
    //         'project_para_1' => $this->input->post('para_1') ? $this->input->post('para_1') : "",
    //         'project_para_2' => $this->input->post('para_2') ? $this->input->post('para_2') : "",
    //         'project_para_3' => $this->input->post('para_3') ? $this->input->post('para_3') : "",
    //       ];

    //       // print_r($additional_data);

    //       $insert_id = $this->project_model->add_project($additional_data);

    //       // echo $insert_id;
    //       // die();
    //       if ($insert_id) {
    //         /*-----------------profile_pic----------------------*/
    //         $this->load->library('upload');

    //         foreach ($_FILES as $field_name => $file_data) {


    //           $product_img_path = './uploads';
    //           $file = 'New' . time() . rand(100, 999);
    //           $config = array(
    //             'upload_path'       => $product_img_path,
    //             'allowed_types' => 'png|jpg|jpeg',
    //             'file_name'         => $file,
    //             'overwrite'         => FALSE,
    //             'remove_spaces'     => TRUE,
    //             'quality'           => '100%',
    //           );
    //           $this->upload->initialize($config);
    //           // print_r($file_data);
    //           if (!empty($file_data['name'])) {
    //             $_FILES[$field_name] = $file_data;
    //             if ($this->upload->do_upload($field_name)) {
    //               $uploaded_files[$field_name] = $this->upload->data()['file_name'];
    //             } else {
    //               $error[$field_name] = $this->upload->display_errors();
    //             }
    //           }
    //         };
    //         $this->project_model->project_img_insert($uploaded_files, $insert_id);

    //         $this->session->set_flashdata('message', ['1', 'Project added successfully.']);
    //         redirect('projects', 'refresh');
    //       } else {
    //         $this->session->set_flashdata('message', ['0', 'Project added failed.']);
    //         redirect('projects', 'refresh');
    //       }
    //     } else {
    //       //print_r($this->data['categories']); die;
    //       $this->template->admin_render('admin/project/index', $this->data);
    //     }
    //   }

    public function index()
    {
        // $this->page_title->push(lang('menu_project_list'));
        // $this->data['pagetitle'] = $this->page_title->show();
        $this->data['blog_list'] = $this->blog_model->get_blog_list();
        $this->template->admin_render('admin/blog/index', $this->data);
    }

    public function add_blog()
    {
        // $this->page_title->push(lang('menu_projects'));
        // $this->data['pagetitle'] = $this->page_title->show();


        // if (!$this->ion_auth->logged_in()) {
        //   // redirect them to the login page
        //   redirect('auth/login', 'refresh');
        // }
        //     /* Validate form input */

        $validation = [
            [
                'field' => 'blog_name',
                'label' => 'Blog Name',
                'rules' => 'required|trim',
                'errors' => ['required' => 'Please enter %s.']
            ],
            [
                'field' => 'blog_desc',
                'label' => 'Blog Description',
                'rules' => 'required',
                'errors' => ['required' => 'Blog Description is required.']
            ],
        ];

        $this->form_validation->set_rules($validation);

        if ($this->form_validation->run() == true) {

            $additional_data = [
                'blog_name' => $this->input->post('blog_name') ? $this->input->post('blog_name') : "",
                'blog_description' => $this->input->post('blog_desc') ? $this->input->post('blog_desc') : "",

            ];

            $insert_id = $this->blog_model->add_blog($additional_data);
            if ($insert_id) {
                /*-----------------profile_pic----------------------*/
                $this->load->library('upload');

                foreach ($_FILES as $field_name => $file_data) {
                    $blog_img_path = './uploads';
                    $file = 'New' . time() . rand(100, 999);
                    $config = array(
                        'upload_path'       => $blog_img_path,
                        'allowed_types' => 'png|jpg|jpeg',
                        'file_name'         => $file,
                        'overwrite'         => FALSE,
                        'remove_spaces'     => TRUE,
                        'quality'           => '100%',
                        'max_size'           => '50',
                    );
                    $this->upload->initialize($config);
                    // print_r($file_data);
                    if (!empty($file_data['name'])) {
                        $_FILES[$field_name] = $file_data;
                        if ($this->upload->do_upload($field_name)) {
                            $uploaded_files[$field_name] = $this->upload->data()['file_name'];
                        } else {
                            $this->session->set_flashdata('message', ['0', 'Only imgages allowed and sshould not be greater than 50 kb.']);
                        }
                    }
                };
                $this->blog_model->blog_img_insert($uploaded_files, $insert_id);

                $this->session->set_flashdata('message', ['1', 'Blog added successfully.']);
                redirect('admin/blogs', 'refresh');
            } else {
                $this->session->set_flashdata('message', ['0', 'Blog added failed.']);
                redirect('admin/blogs', 'refresh');
            }
        } else {
            //print_r($this->data['categories']); die;
            $this->template->admin_render('admin/blog/add', $this->data);
        }
    }
    public function edit_blog($id)
    {

        // echo $id;
        // exit();
        // $this->page_title->push(lang('menu_projects'));
        // $this->data['pagetitle'] = $this->page_title->show();


        // if (!$this->ion_auth->logged_in()) {
        //   // redirect them to the login page
        //   redirect('auth/login', 'refresh');
        // }
        //     /* Validate form input */

        $validation = [
            [
                'field' => 'blog_name',
                'label' => 'Blog Name',
                'rules' => 'required|trim',
                'errors' => ['required' => 'Please enter %s.']
            ],
            [
                'field' => 'blog_desc',
                'label' => 'Blog Description',
                'rules' => 'required',
                'errors' => ['required' => 'Blog Description is required.']
            ],
        ];

        $this->form_validation->set_rules($validation);
        $uploaded_files = array();
        if ($this->form_validation->run() == true) {

            $additional_data = [
                'blog_name' => $this->input->post('blog_name') ? $this->input->post('blog_name') : "",
                'blog_description' => $this->input->post('blog_desc') ? $this->input->post('blog_desc') : "",
            ];

            $update_id = $this->blog_model->edit_blog($additional_data, $id);
            if ($update_id) {
                /*-----------------profile_pic----------------------*/
                if (!empty($_FILES)) {
                    $this->load->library('upload');
                    foreach ($_FILES as $field_name => $file_data) {
                        $blog_img_path = './uploads';
                        $file = 'New' . time() . rand(100, 999);
                        $config = array(
                            'upload_path'       => $blog_img_path,
                            'allowed_types' => 'png|jpg|jpeg',
                            'file_name'         => $file,
                            'overwrite'         => FALSE,
                            'remove_spaces'     => TRUE,
                            'quality'           => '100%',
                            'max_size'           => '50',
                        );
                        $this->upload->initialize($config);
                        // print_r($file_data);
                        if (!empty($file_data['name'])) {
                            $_FILES[$field_name] = $file_data;
                            if ($this->upload->do_upload($field_name)) {
                                $uploaded_files[$field_name] = $this->upload->data()['file_name'];
                            } else {
                                $this->session->set_flashdata('message', ['0', 'Only imgages allowed and sshould not be greater than 50 kb.']);
                                exit();
                            }
                        }
                    };
                    $this->blog_model->blog_img_insert($uploaded_files, $id);
                }
                $this->session->set_flashdata('message', ['1', 'Blog edit successfully.']);
                redirect('edit_blog/' . $id, 'refresh');
            } else {
                $this->session->set_flashdata('message', ['0', 'Blog edit failed.']);
                redirect('edit_blog/' . $id, 'refresh');
            }
        } else {
            //print_r($this->data['categories']); die;
            $this->data['blog'] = $this->blog_model->get_single_blog($id);
            $this->template->admin_render('admin/blog/edit', $this->data);
        }
    }
    //   public function project_list()
    //   {
    //     $this->page_title->push(lang('menu_project_list'));
    //     $this->data['pagetitle'] = $this->page_title->show();
    //     $this->data['project_list'] = $this->project_model->get_project_list();
    //     $this->template->admin_render('admin/project/project_list', $this->data);
    //   }

    //   public function edit_project($id)
    //   {
    //     $this->page_title->push(lang('menu_projects'));
    //     $this->data['pagetitle'] = $this->page_title->show();


    //     if (!$this->ion_auth->logged_in()) {
    //       // redirect them to the login page
    //       redirect('auth/login', 'refresh');
    //     }
    //     /* Validate form input */

    //     $validation = [
    //       [
    //         'field' => 'project_name',
    //         'label' => 'Project Name',
    //         'rules' => 'required|trim',
    //         'errors' => ['required' => 'Please enter %s.']
    //       ],
    //       [
    //         'field' => 'para_1',
    //         'label' => 'Project Description',
    //         'rules' => 'required|trim',
    //         'errors' => ['required' => 'Project description is required.']
    //       ],
    //     ];

    //     $this->form_validation->set_rules($validation);

    //     if ($this->form_validation->run() == true) {

    //       $additional_data = [
    //         'project_name' => $this->input->post('project_name') ? $this->input->post('project_name') : "",
    //         'project_para_1' => $this->input->post('para_1') ? $this->input->post('para_1') : "",
    //         'project_para_2' => $this->input->post('para_2') ? $this->input->post('para_2') : "",
    //         'project_para_3' => $this->input->post('para_3') ? $this->input->post('para_3') : "",
    //       ];

    //         // print_r($additional_data);

    //       ;

    //       // echo $insert_id;
    //       // die();
    //       $uploaded_files=[];
    //       if ($this->project_model->update_project($additional_data, $id)) {
    //         /*-----------------profile_pic----------------------*/
    //         $this->load->library('upload');

    //         foreach ($_FILES as $field_name => $file_data) {


    //           $product_img_path = './uploads';
    //           $file = 'New' . time() . rand(100, 999);
    //           $config = array(
    //             'upload_path'       => $product_img_path,
    //             'allowed_types' => 'png|jpg|jpeg',
    //             'file_name'         => $file,
    //             'overwrite'         => FALSE,
    //             'remove_spaces'     => TRUE,
    //             'quality'           => '100%',
    //           );
    //           $this->upload->initialize($config);
    //           // print_r($file_data);
    //           if (!empty($file_data['name'])) {
    //             $_FILES[$field_name] = $file_data;
    //             if ($this->upload->do_upload($field_name)) {
    //               $uploaded_files[$field_name] = $this->upload->data()['file_name'];
    //             } else {
    //               $error[$field_name] = $this->upload->display_errors();
    //             }
    //           }
    //         };
    //         $this->project_model->update_project_img($uploaded_files, $id);

    //         $this->session->set_flashdata('message', ['1', 'Project edit successfully.']);
    //         redirect('edit-project/' . $id, 'refresh');
    //       } else {
    //         $this->session->set_flashdata('message', ['0', 'Project edit failed.']);
    //         redirect('edit-project/' . $id, 'refresh');
    //       }
    //     } else {
    //       //print_r($this->data['categories']); die;
    //       $this->data['get_project_details'] = $this->project_model->get_project_details($id);
    //       $this->template->admin_render('admin/project/edit', $this->data);
    //     }
    //   }

    public function delete_blog()
    {
        $delete_id = $this->input->post('delete_id');
        if ($delete_id) {
            if ($this->blog_model->delete_blog($delete_id)) {
                echo json_encode(array("status" => 1, "message" => "Blog delete successfully"));
            } else {
                echo json_encode(array("status" => 0, "message" => "Error ! Please try again  later"));
            }
        }
    }
}
