<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->model(array('admin_model','order_model','customer_model','product_model'));
    if ($this->ion_auth->logged_in()) {
      $user = $this->ion_auth->user()->row();
      $this->data['user_profile'] = $this->user_model->get_profile($user->id);
      $this->data['shop'] = $this->user_model->get_seller($user->id);
      if($this->data['user_profile']['user_group']==2){
        $this->data['count_order'] = $this->order_model->get_order_status(null,$this->data['shop']['seller_id']);
      }else {
        $this->data['count_order'] = $this->order_model->get_order_status();
      }
    }
    //$this->data['metal'] = $this->product_model->get_gs_price();
    $this->data['logo'] = $this->admin_model->get_logo();
    $this->data['pm'] = $this->product_model->get_productCategory();
    $this->data['footer'] = $this->admin_model->get_footer();
    //$this->data['count_order'] = $this->order_model->count_order();
    $this->data['count_newSeller'] = $this->user_model->count_register_seller(); //utk side menu
    $this->data['state']=$this->user_model->state_list();
    $this->data['list_shop'] = $this->product_model->list_seller();
    $this->data['products'] = $this->product_model->get_all_product();
    //Codeigniter : Write Less Do More
  }

  public function why_us()
  {
      $this->template->load('layouts/main', 'pages/why_us',$this->data);
  }

  public function products($category_id,$seller_id='')
  {
      $weight='';$price='';
      if($this->input->post('weight')){
        $weight=$this->input->post('weight');
      }
      if($this->input->post('price')){
        $price=$this->input->post('price');
      }
      $this->data['seller'] = $this->product_model->list_seller();
      $this->data['pList'] = $this->product_model->get_productType($category_id,$seller_id,$weight,$price);
      $this->data['pCat'] = $this->product_model->get_productCategory($category_id);
      $this->template->load('layouts/main', 'pages/products_paging',$this->data);
  }

  public function search()
  {
      $search=$this->input->post('search_text');
    //   if($this->input->post('search_cat')=='All'){
    //       $search=$this->input->post('search_text');
    //       $this->data['title'] = 'All';
    //   }
    //   if($this->input->post('search_cat')=='Product'){
    //       $search=array('0'=>'2','1'=>$this->input->post('search_text'));
    //       $this->data['title'] = 'Product';
    //   }
    //   if($this->input->post('search_cat')=='Vendor'){
    //       $search=array('0'=>'3','1'=>$this->input->post('search_text'));
    //       $this->data['title'] = 'Vendor';
    //   }

      $this->data['products'] = $this->product_model->get_all_product($search);

      $this->template->load('layouts/main', 'pages/search',$this->data);

  }

  public function all_shops()
  {
    $this->data['title'] = "All Shops";
    $this->data['shops'] = $this->user_model->all_shops();
    $this->template->load('layouts/main', 'pages/all_shops',$this->data);
  }
  
  public function shops($seller_id='')
  {
    $this->data['pList'] = $this->product_model->get_productType(null,$seller_id,null,null);
    $this->data['seller'] = $this->user_model->get_detail_seller($seller_id);
    $this->template->load('layouts/main', 'pages/shop_paging',$this->data);
  }
  
  public function all_products()
  {
    $this->data['title'] = "All Products";
    $this->template->load('layouts/main', 'includes/products_display2_page',$this->data);
  }

  public function new_products()
  {
    $this->data['title'] = "New Products";
    $this->template->load('layouts/main', 'includes/products_new',$this->data);
  }

  public function top_products()
  {
    $this->data['title'] = "Top Products";
    $this->template->load('layouts/main', 'includes/products_top',$this->data);
  }

  public function discount_products()
  {
    $this->data['title'] = "Discount Products";
    $this->template->load('layouts/main', 'includes/products_discount',$this->data);
  }

}
