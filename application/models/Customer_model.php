<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More

  }

  // public function get_billAddress($user_id){
  //   $this->db->where('user_id',$user_id);
  //   $this->db->where('bill_default',1);
  //   $this->query = $this->db->get('ci_billing');
  //   if ($this->query->num_rows() > 0) {
  //     // foreach ($this->query->row_array() as $row) {
  //     //   $data[] = $row;
  //     // }
  //     return $this->query->row_array();
  //   }
  //   return false;
  // }

  public function get_shipAddress($user_id){
    $this->db->where('user_id',$user_id);
    $this->db->where('ship_default',1);
    $this->db->join('ci_state','ci_state.state_id=ci_shipping.ship_state');
    $this->query = $this->db->get('ci_shipping');
    if ($this->query->num_rows() > 0) {
      // foreach ($this->query->row_array() as $row) {
      //   $data[] = $row;
      // }
      return $this->query->row_array();
    }
    return false;
  }

  // public function bill_address($user_id){
  //   $this->db->where('user_id',$user_id);
  //   $this->query = $this->db->get('ci_billing');
  //   if ($this->query->num_rows() > 0) {
  //     // foreach ($this->query->result_array() as $row) {
  //     //   $data[] = $row;
  //     // }
  //     return $this->query->row_array();
  //   }
  //   return false;
  // }

  public function ship_address($user_id){
    $this->db->where('user_id',$user_id);
    $this->db->join('ci_state','ci_state.state_id=ci_shipping.ship_state');
    $this->query = $this->db->get('ci_shipping');
    if ($this->query->num_rows() > 0) {
      // foreach ($this->query->result_array() as $row) {
      //   $data[] = $row;
      // }
      return $this->query->row_array();
    }
    return false;
  }



}
