<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More

  }

  public function get_users()
  {

    $this->db->order_by('user_group','asc');
    $this->query = $this->db->get('data_user');
    if ($this->query->num_rows() > 0) {
      foreach ($this->query->result_array() as $row) {
        $data[] = $row;
      }
      return $data;
    }
    return false;
  }

  public function get_profile($user_id = '') //use
  {
    if ($user_id) {
      $this->db->where('id', $user_id);
    }
    $this->query = $this->db->get('data_user');
    if ($this->query->num_rows() > 0) {
      return $this->query->row_array();
    }
  }

  public function get_email($email)
  {
    $this->db->select('count(email) as count');
    $this->db->where('email', $email);
    $this->query = $this->db->get('data_user');
    if ($this->query->num_rows() > 0) {
      return $this->query->row_array();
    }
    return 0;
  }

  public function get_seller($user_id='') //use
  {
    if($user_id!=''){
      $this->db->where('user_id', $user_id);
      //$this->db->where('seller_status',1);
      $this->query = $this->db->get('data_seller');
      if ($this->query->num_rows() > 0) {
        return $this->query->row_array();
      }
    }else{
      $this->query = $this->db->get('data_seller');
      if ($this->query->num_rows() > 0) {
        foreach ($this->query->result_array() as $row) {
          $data[] = $row;
        }
        return $data;
      }
      return false;
    }
  }

    public function get_detail_seller($seller_id)
    {
      $this->db->where('seller_id', $seller_id);
      $this->query = $this->db->get('data_seller');
      if ($this->query->num_rows() > 0) {
        return $this->query->row_array();
      }
    }

    public function all_shops()
    {
      $this->db->where('seller_status',1);
      $this->query = $this->db->get('data_seller');
      if ($this->query->num_rows() > 0) {
        return $this->query->result_array();
      }
    }

    public function dropdown_seller()
    {
      //$this->db->order_by('ci_metal.metal_id', 'asc');
      $this->db->where('seller_status',1);
      $this->query  = $this->db->get('data_seller')->result_array();
      if(is_array( $this->query ) && count( $this->query ) > 0)
      {
        $return[''] = 'CHOOSE SELLER';
        foreach($this->query as $row)
        {
          $return[$row['seller_id']] = strtoupper($row['shop_name']);
        }
        return $return;
      }
    }

    public function count_register_seller()
    {
      $this->db->where('seller_verify',0);
      $this->db->select('count(seller_id) as total');
      $this->query = $this->db->get('data_seller');
      if ($this->query->num_rows() > 0) {
        return $this->query->row_array();
      }
    }
    
    public function newslatter(){
    $this->query = $this->db->get('ci_newslatter');
    if ($this->query->num_rows() > 0) {
      return $this->query->result_array();
    }
    return false;
  }
  
  public function state_list(){
    $this->query  = $this->db->get('ci_state')->result_array();
    if(is_array( $this->query ) && count( $this->query ) > 0)
    {
      $return[''] = '--STATE--';
      foreach($this->query as $row)
      {
        $return[$row['state_id']] = $row['state'];
      }
      return $return;
    }
  }

  public function state($state_id=''){
    if($state_id){
      $this->db->where('state_id',$state_id);
      $this->query = $this->db->get('ci_state');
      if ($this->query->num_rows() > 0) {
        return $this->query->row_array();
      }
    }else{
      $this->query = $this->db->get('ci_state');
      if ($this->query->num_rows() > 0) {
        return $this->query->result_array();
      }
    }
  }

}
