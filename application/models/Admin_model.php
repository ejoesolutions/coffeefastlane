<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function fetch_data($start,$limit)
  {

   $this->db->limit($start, $limit);
   $this->query = $this->db->get('vu_products_list');
   if ($this->query->num_rows() > 0) {
     foreach ($this->query->result() as $row) {
       $data[] = $row;
     }
     return $data;
   }
   return false;
  }

  public function get_logo() //use
  {
    $this->db->where('status',1);
    $this->query = $this->db->get('ci_logo');
    if ($this->query->num_rows() > 0) {
      return $this->query->row_array();
    }
  }

  public function get_banner() //use
  {
    //$this->db->where('status',1);
    $this->query = $this->db->get('ci_banner');
    if ($this->query->num_rows() > 0) {
      return $this->query->result_array();
    }
  }


  public function get_bannerDetail($banner_id)
  {
    $this->db->where('banner_id',$banner_id);
    $this->query = $this->db->get('ci_banner');
    if ($this->query->num_rows() > 0) {
      return $this->query->row_array();
    }
  }

  public function get_footer()
  {
    $this->query = $this->db->get('ci_footer');
    if ($this->query->num_rows() > 0) {
      return $this->query->row_array();
    }
  }

  //report
  public function count_order($seller_id='') //use
  {
    if($seller_id!=''){
      $this->db->where('seller_id',$seller_id);
    }
    $this->db->select('count(seller_id) as total');
    $this->query = $this->db->get('ci_order_status');
    if ($this->query->num_rows() > 0) {
      return $this->query->row_array();
    }
  }

  public function count_seller() //use
  {
    $this->db->where('seller_status',1);
    $this->db->select('count(seller_id) as total');
    $this->query = $this->db->get('ci_seller');
    if ($this->query->num_rows() > 0) {
      return $this->query->row_array();
    }
  }

  public function count_product($seller_id='') //use
  {
    if($seller_id!=''){
      $this->db->where('seller_id',$seller_id);
    }
    $this->db->select('count(product_id) as total');
    $this->query = $this->db->get('vu_products_list');
    if ($this->query->num_rows() > 0) {
      return $this->query->row_array();
    }
  }

  public function count_sale($seller_id='') //use
  {
    if($seller_id!=''){
      $this->db->where('seller_id',$seller_id);
    }
    $this->db->select('sum(qty) as total');
    $this->query = $this->db->get('sale_report');
    if ($this->query->num_rows() > 0) {
      return $this->query->row_array();
    }
  }

  public function count_sale_value($seller_id='') //use
  {
    if($seller_id!=''){
      $this->db->where('seller_id',$seller_id);
    }
    $this->db->select('sum(sale_price) as total');
    $this->query = $this->db->get('sale_report');
    if ($this->query->num_rows() > 0) {
      return $this->query->row_array();
    }
  }

  public function count_customer() //use
  {
    $this->db->where('user_group',2);
    $this->db->select('count(id) as total');
    $this->query = $this->db->get('ci_users');
    if ($this->query->num_rows() > 0) {
      return $this->query->row_array();
    }
  }

  public function get_vendor_list()
  {
    $this->db->where('vendor_status',1);
    $this->query = $this->db->get('ci_vendor');
    if ($this->query->num_rows() > 0) {
      return $this->query->result_array();
    }
  }

  public function get_all_report_sale($vendor_id='',$bulan='',$tahun='')
  {
    //$this->db->where('vendor_status',1);
    if($vendor_id){
      $this->db->where('vendor_id',$vendor_id);
    }
    if($bulan){
      $this->db->where('MONTH(created_date)', $bulan);
    }
    if($tahun){
      $this->db->where('YEAR(created_date)', $tahun);
    }
    $this->query = $this->db->get('sale_report');
    if ($this->query->num_rows() > 0) {
      return $this->query->result_array();
    }
  }

  public function get_product_sale()
  {
    $this->query = $this->db->get('product_sale');
    if ($this->query->num_rows() > 0) {
      return $this->query->result_array();
    }
  }

  public function get_year_order() //use
    {
      $this->db->DISTINCT();
      $this->db->select('YEAR(created_date) as tahun');
      $this->query  = $this->db->get('generate_report')->result_array();

      if(is_array( $this->query ) && count( $this->query ) > 0)
      {
        $return[''] = 'Choose Year';
        foreach($this->query as $row)
        {
          $return[$row['tahun']] = strtoupper($row['tahun']);
        }
        return $return;
      }else{
        $return[''] = 'Choose Year';
        return $return;
      }
    }

    public function dropdown_seller($general='') //use
  {
    //$this->db->order_by('ci_metal.metal_id', 'asc');
    $this->db->where('seller_status',1);
    $this->query  = $this->db->get('data_seller')->result_array();
    if(is_array( $this->query ) && count( $this->query ) > 0)
    {
      $return[''] = 'Choose Seller';
      foreach($this->query as $row)
      {
        $return[$row['seller_id']] = strtoupper($row['shop_name']);
      }
      return $return;
    }
  }

  public function get_month_order()
      {
        $bulan = array(
          "" => 'Choose Month',
          "01" => 'January',
          "02" => 'February',
          "03" => 'March',
          "04" => 'April',
          "05" => 'May',
          "06" => 'June',
          "07" => 'July',
          "08" => 'August',
          "09" => 'September',
          "10" => 'October',
          "11" => 'November',
          "12" => 'December'
        );
        return $bulan;
      }

  //report
    public function get_daily_report($daily='')
    {

      if($daily){
        $this->db->where('DATE(created_date)',$daily);
        //$this->db->where('status',4);
      }

      $this->query = $this->db->get('generate_report');
      if ($this->query->num_rows() > 0) {
        return $this->query->result_array();
      }
    }

    public function get_detail_order()
    {

      $this->query = $this->db->get('view_order');
      if ($this->query->num_rows() > 0) {
        return $this->query->result_array();
      }
    }

    public function get_dailyVendor_report($daily='')
    {

      if($daily){
        $this->db->where('DATE(created_date)',$daily);
        //$this->db->where('status',4);
      }

      $this->query = $this->db->get('generate_report');
      if ($this->query->num_rows() > 0) {
        return $this->query->result_array();
      }
    }

    public function get_dailyOrderVendor_report($daily='')
    {

      if($daily){
        $this->db->where('DATE(created_date)',$daily);
        //$this->db->where('status',4);
      }

      $this->query = $this->db->get('generate_report');
      if ($this->query->num_rows() > 0) {
        return $this->query->result_array();
      }
    }

    public function get_productType() //use
    {
      $this->query  = $this->db->get('ci_category')->result_array();
      if(is_array( $this->query ) && count( $this->query ) > 0)
      {
        $return[''] = 'Choose Product Type';
        foreach($this->query as $row)
        {
          $return[$row['category_id']] = strtoupper($row['category_type']);
        }
        return $return;
      }
    }

    public function get_productDailyOrder_report($daily='')
    {

      if($daily){
        $this->db->where('DATE(created_date)',$daily);
        //$this->db->where('status',4);
      }

      $this->query = $this->db->get('generate_report');
      if ($this->query->num_rows() > 0) {
        return $this->query->result_array();
      }
    }

    public function get_monthlySales_report($bulan,$tahun,$seller)
    {
      if ($bulan) {
        $this->db->where('MONTH(created_date)',$bulan);
      }
      if ($tahun) {
        $this->db->where('YEAR(created_date)',$tahun);
      }
      if ($seller) {
        $this->db->where('seller_id',$seller);
      }
      $this->db->order_by('seller_id','asc');
      $this->query = $this->db->get('generate_report');
      if ($this->query->num_rows() > 0) {
        return $this->query->result_array();
      }
    }

    public function get_vendorMonthlySales_report($seller_id,$bulan,$tahun)
    {
      if ($bulan) {
        $this->db->where('MONTH(created_date)',$bulan);
      }
      $this->db->where('YEAR(created_date)',$tahun);
      $this->db->where('seller_id',$seller_id);

      $this->query = $this->db->get('generate_report');
      if ($this->query->num_rows() > 0) {
        return $this->query->result_array();
      }
    }

    public function get_vendorProductList($seller_id)
    {
      $this->db->where('seller_id',$seller_id);
      $this->query = $this->db->get('vu_products_list');
      if ($this->query->num_rows() > 0) {
        return $this->query->result_array();
      }
    }

    public function get_clientsList($cust_id='')
    {
      $this->db->where('user_group',2);
      if($cust_id){
        $this->db->where('id',$cust_id);
        $this->query = $this->db->get('data_user');
        if ($this->query->num_rows() > 0) {
          return $this->query->row_array();
        }
      }else{
        $this->query = $this->db->get('data_user');
        if ($this->query->num_rows() > 0) {
          return $this->query->result_array();
        }
      }
    }

    public function list_clients()
    {
      $this->db->where('user_group',2);
      $this->query  = $this->db->get('data_user')->result_array();

      if(is_array( $this->query ) && count( $this->query ) > 0)
      {
        $return[''] = 'Choose Client';
        foreach($this->query as $row)
        {
          $return[$row['id']] = strtoupper($row['full_name'])." [".$row['id']."]";
        }
        return $return;
      }
    }


    public function get_clientsTransaction($cust_id)
    {
      $this->db->where('created_by',$cust_id);
      //$this->db->where('status',4);
      $this->query = $this->db->get('generate_report');
      if ($this->query->num_rows() > 0) {
        return $this->query->result_array();
      }
    }

    //audit
    public function get_audit()
    {
      $this->query = $this->db->get('ci_audit_log');
      if ($this->query->num_rows() > 0) {
        return $this->query->result_array();
      }
    }

    public function get_setting_day()
    {
      $this->query = $this->db->get('ci_setting_status');
      if ($this->query->num_rows() > 0) {
        return $this->query->row_array();
      }
    }

    public function get_admin_email()
    {

      $this->query = $this->db->get('ci_email_admin');
      if ($this->query->num_rows() > 0) {
        return $this->query->result_array();
      }
    }

}
