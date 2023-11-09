<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Contact_us extends Admin_Controller
{

  public function __construct()
  {
    parent::__construct();

    /* Load :: Common */
    // $this->load->model('admin/users_model');
    // $this->load->model('admin/cities_model');
    $this->load->model('admin/dashboard_model');
  }

  public function job_applied()
  {
    /* Title Page */
    // $this->page_title->push(lang('menu_contact_us'));
    // $this->data['pagetitle'] = $this->page_title->show();
    $this->data['get_job_applied'] = $this->dashboard_model->get_work_with_us();
    // $this->data['test'] = array('1');
    $this->template->admin_render('admin/contact/job_applied', $this->data);
  }

  public function queries()
  {
    /* Title Page */
    // $this->page_title->push(lang('menu_contact_us'));
    // $this->data['pagetitle'] = $this->page_title->show();
    $this->data['get_queries'] = $this->dashboard_model->total_talk_to_us();
    $this->template->admin_render('admin/contact/queries', $this->data);
  }
}
