<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{


  public function __construct()
  {
    parent::__construct();
  }


  public function total_work_with_us()
  {
    $this->db->select('*');
    $this->db->from('work_with_us');
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      return $query->result();
    } else {
      return FALSE;
    }
  }
  public function total_talk_to_us()
  {
    $this->db->select('*');
    $this->db->from('talk_to_us');
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      return $query->result();
    } else {
      return FALSE;
    }
  }
  public function get_work_with_us()
  {
    $this->db->select('*');
    $this->db->from('work_with_us');
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      return $query->result();
    } else {
      return FALSE;
    }
  }
}
