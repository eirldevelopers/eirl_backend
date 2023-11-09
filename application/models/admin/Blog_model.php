<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Blog_model extends CI_Model
{


  public function __construct()
  {
    parent::__construct();
  }


  public function add_blog($data)
  {
    $this->db->insert('blogs', $data);
    $insert_id = $this->db->insert_id();

    return  $insert_id;
  }

  public function blog_img_insert($data, $id)
  {
    $this->db->update('blogs', $data, "id =$id");
  }

  public function get_blog_list()
  {
    $this->db->select('*');
    $this->db->from('blogs');
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      return $query->result();
    } else {
      return FALSE;
    }
  }
  public function get_single_blog($id)
  {
    $this->db->select('*');
    $this->db->from('blogs');
    $this->db->where('id', $id);
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      return $query->result();
    } else {
      return FALSE;
    }
  }

  public function edit_blog($data, $id)
  {
    return $this->db->update('blogs', $data, "id =$id");
  }

  public function update_project_img($data, $id)
  {
    return $this->db->update('blogs', $data, "id =$id");
  }

  public function delete_blog($id)
  {
    return $this->db->delete('blogs', array('id' => $id));
  }
}
