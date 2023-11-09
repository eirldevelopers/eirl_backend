<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends Admin_Controller
{

  public function __construct()
  {
    parent::__construct();

    /* Load :: Common */
    // $this->load->model('admin/users_model');
    // $this->load->model('admin/cities_model');
    $this->load->model('admin/dashboard_model');
  }

  public function index()
  {
    /* Title Page */
    // $this->page_title->push(lang('menu_dashboard'));
    // $this->data['pagetitle'] = $this->page_title->show();
    $this->data['total_work_with_us'] = $this->dashboard_model->total_work_with_us();
    $this->data['total_talk_to_us'] = $this->dashboard_model->total_talk_to_us();
    // $this->data['total_users'] = $this->dashboard_model->get_all_users();
    /* Load Template */
    $this->template->admin_render('admin/dashboard/index', $this->data);
  }
  public function projects()
  {
    // $this->page_title->push(lang('menu_projects'));
    // $this->data['pagetitle'] = $this->page_title->show();
    // $this->template->admin_render('admin/project/index', $this->data);
  }
}
