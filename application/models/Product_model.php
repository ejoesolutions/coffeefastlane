<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    include_once("resources/func.php");
    include_once("resources/html_dom.php");
  }

  // Get gold daily price
  // public function get_gold_price()
  // {
  //   $this->db->select('price as gold_price,dinar_beli,dinar_jual,wafer_beli,wafer_jual,dirham_beli,dirham_jual, category, MAX(price_id)');
  //   $this->db->group_by('price_id');
  //   $this->db->order_by('price_id', 'desc');
  //   $this->query = $this->db->get('ci_gold_price');
  //   if ($this->query->num_rows() > 0) {
  //     return $this->query->row_array();
  //   }
  // }
  //
  // public function get_gs_price()
  // {
  //   //$html_gold = file_get_html('http://www.livepriceofgold.com/malaysia-gold-price.html');
  //   //$gp =  $html_gold->find('td[class="bold3"]',8)->plaintext;
  //   //$html_silver = file_get_html('http://www.livepriceofgold.com/silver-price/malaysia.html');
  //   //$sp =  $html_silver->find('td[class="bold3"]',7)->plaintext;
  //   $arr_price=array(
  //     // 'gold_price'=>$gp,
  //     // 'silver_price'=>$sp,
  //     'gold_price'=>200,
  //     'silver_price'=>20,
  //   );
  //   return $arr_price;
  // }

  // Store product
  public function store_product($product,$image_file)
  {
    $this->db->insert('ci_products', $product);

    $product_id = $this->db->insert_id();

    $this->addProductions($product_id);

    $this->db->insert('ci_images',array('product_id'=>$product_id,'file_name'=>$image_file));

    //audit
    if($this->data['user_profile']['user_group']!=2){
      $data_log=array(
        'ip_address'=>$ip = $this->input->ip_address(),
        'user_id'=>$this->data['user_profile']['id'],
        'username'=>$this->data['user_profile']['username'],
        'time_record'=>date("Y-m-d H:i:s"),
        'description'=>'Add new product [Product ID:'.$product_id.']',
      );
      $this->db->insert('ci_audit_log',$data_log);
    }

    redirect('catalog/add_stock','refresh');
  }

  public function store_update_product($product)
  {

    $product_id = $this->input->post('product_id');

    $this->db->where('product_id', $product_id);
    $this->db->update('ci_products', $product);

    $this->updateProduction($product_id);
    //audit
    if($this->data['user_profile']['user_group']!=2){
      $data_log=array(
        'ip_address'=>$ip = $this->input->ip_address(),
        'user_id'=>$this->data['user_profile']['id'],
        'username'=>$this->data['user_profile']['username'],
        'time_record'=>date("Y-m-d H:i:s"),
        'description'=>'Update product [Product ID:'.$product_id.']',
      );
      $this->db->insert('ci_audit_log',$data_log);
    }

    // redirect('catalog/product_detail/'.$product_id);
  }

  // update_Price
  public function updateProduction($product_id)
  {
    $checklist=$this->input->post('event_product[]');
    $disc='';$np='';$tp='';
    if(!empty($checklist)){
      foreach ($checklist as $key) {
        if($key=='discount')
        {
          $disc=$this->input->post('product_disc');
        }
        else if($key=='np')
        {
          $np='yes';
        }else if($key=='tp'){
          $tp='yes';
        }
      }
    }

    $new_price = array(
      'category_id'=>$this->input->post('category_id'),
      'weight'=>$this->input->post('weight'),
      'size'=>$this->input->post('size'),
      'add_cost' => $this->input->post('add_cost'),
      'shipping' => 0,
      'tax' => 0,
      'description'=>nl2br($this->input->post('description')),
      'discount'=>($disc!='')? $disc : null,
      'new_product'=>($np!='')? $np : null,
      'top_product'=>($tp!='')? $tp : null,
    );
    $this->db->where('product_id', $product_id);
    $this->db->update('ci_production', $new_price);
  }
  // Add to product description
  public function addProductions($product_id)
  {
    $checklist=$this->input->post('event_product[]');
    $disc='';$np='';$tp='';
    if(!empty($checklist)){
      foreach ($checklist as $key) {
        if($key=='discount')
        {
          $disc=$this->input->post('product_disc');
        }
        else if($key=='np')
        {
          $np='yes';
        }else if($key=='tp'){
          $tp='yes';
        }
      }
    }

    $description = array(
      'product_id' => $product_id,
      'category_id' => empty($this->input->post('category_id')) ? NULL : $this->input->post('category_id'),
      'weight' => empty($this->input->post('weight')) ? NULL : $this->input->post('weight'),
      'size' => empty($this->input->post('size')) ? NULL : $this->input->post('size'),
      'add_cost' => empty($this->input->post('add_cost')) ? 0 : $this->input->post('add_cost'),
      'shipping' => 0,
      'tax' => 0,
      'description' => empty($this->input->post('description')) ? NULL : nl2br($this->input->post('description')),
      'discount'=>($disc!='')? $disc : null,
      'new_product'=>($np!='')? $np : null,
      'top_product'=>($tp!='')? $tp : null,
    );
    $this->db->insert('ci_production', $description);

    $data = array(
      'product_id' => $product_id,
      'owner_id' => $this->data['user_profile']['user_group']!=2? $this->input->post('seller_id'):$this->data['shop']['seller_id'],
      'qty' => NULL,
      'owner_type' => 'company',
      'created_date'=>date("Y-m-d H:i:s")
    );
    $this->db->insert('ci_inventory', $data);
  }


  // Store image product
  // public function addImage($image_id,$product_id)
  // {
  //   $this->db->where('product_id', $product_id);
  //   $this->db->delete('ci_product_images');
  //
  //   $data_images = array(
  //     'product_id'=> $product_id,
  //     'image_id'=> $image_id
  //   );
  //   $this->db->insert('ci_product_images', $data_images);
  // }

  // get product detail from id display for customer
  public function product_view($product_id)
  {
    $this->db->where('product_id', $product_id);
    $this->query = $this->db->get('vu_products_list');
    if ($this->query->num_rows() > 0) {
      return $this->query->row_array();
    }
  }

  public function owner_product($product_id)
  {
    $this->db->where('product_id', $product_id);
    //$this->db->where('store_views.owner_type', 'kgt');
    $this->query = $this->db->get('vu_products_list');
    if ($this->query->num_rows() > 0) {
      return $this->query->row_array();
    }
  }


  // Get list metal id
  public function dropdown_category($type = '')
  {
    // if ($type) {
    //   $this->db->where('category_id', $type);
    // }

    $this->db->order_by('category_id', 'asc');
    $this->query  = $this->db->get('ci_category')->result_array();
    if(is_array( $this->query ) && count( $this->query ) > 0)
    {
      $return[''] = 'CHOOSE CATEGORY';
      foreach($this->query as $row)
      {
        $return[$row['category_id']] = strtoupper($row['category_type']);
      }
      return $return;
    }
  }

  // Get all products
  public function get_all_product($search='',$seller_id='')//use
  {
    if ($search) {
      $this->db->like('product_name', $search, 'both');
      $this->db->or_like('shop_name', $search, 'both');
      $this->db->or_like('category_type', $search, 'both');
    }
    if($seller_id){
      $this->db->where('seller_id',$seller_id);
    }

    $this->db->join(
    '(SELECT
      product_id as pid,
      count(product_id) as sold
    FROM
      `ci_order_items`
      GROUP by product_id) as sold_table','sold_table.pid=vu_products_list.product_id','left'
    );
    $this->db->order_by('product_id', 'desc');
    $this->query = $this->db->get('vu_products_list');
    if ($this->query->num_rows() > 0) {
      foreach ($this->query->result() as $row) {
        $data[] = $row;
      }
      return $data;
    }
    return false;
  }

  // Get category by id
  public function get_category($id="")
  {
    if($id){
      $this->db->where('category_id', $id);
      $this->query = $this->db->get('ci_category');
      if ($this->query->num_rows() > 0) {
        return $this->query->row_array();
      }
    }else{
      $this->query = $this->db->get('ci_category');
      if ($this->query->num_rows() > 0) {
        return $this->query->result_array();
      }
    }
  }

  public function drop_down_products($id='')
  {
    if($id){
      $this->db->where('seller_id',$id);
    }
    $this->query  = $this->db->get('vu_products_list')->result_array();
    if(is_array( $this->query ) && count( $this->query ) > 0)
    {
      $return[''] = 'CHOOSE PRODUCT';
      foreach($this->query as $row)
      {
        // if($this->data['user_profile']['user_group']==0 || $this->data['user_profile']['user_group']==1){
        //   $return[$row['product_id']] = strtoupper($row['product_name']).' [ '.$row['shop_name'].' ]';
        // }else{
        //   $return[$row['product_id']] = strtoupper($row['product_name']);
        // }
        $return[$row['product_id']] = strtoupper($row['product_name']).' [ Qty : '.$row['stock'].' ]';
        // $return[$row['product_id']] = strtoupper($row['product_name']);
      }
      return $return;
    }
  }

  public function list_seller($seller_id='')
  {

    if($seller_id){
      $this->db->where('seller_id',$seller_id);
      $this->db->where('seller_status',1);
      $this->query = $this->db->get('data_seller');
      if ($this->query->num_rows() > 0) {
        return $this->query->row_array();
      }
      return false;
    }else{
      $this->db->where('seller_status',1);
      $this->query = $this->db->get('data_seller');
      if ($this->query->num_rows() > 0) {
        return $this->query->result_array();
      }
      return false;
    }
  }

  // public function list_vendor2($vendor_id='')
  // {
  //
  //   if($vendor_id){
  //     $this->db->where('vendor_id',$vendor_id);
  //     $this->query = $this->db->get('ci_vendor');
  //     if ($this->query->num_rows() > 0) {
  //       return $this->query->row_array();
  //     }
  //     return false;
  //   }else{
  //     $this->query = $this->db->get('ci_vendor');
  //     if ($this->query->num_rows() > 0) {
  //       return $this->query->result_array();
  //     }
  //     return false;
  //   }
  // }

  // public function dropdown_vendor()
  // {
  //   //$this->db->order_by('ci_metal.metal_id', 'asc');
  //   $this->db->where('vendor_status',1);
  //   $this->query  = $this->db->get('ci_vendor')->result_array();
  //   if(is_array( $this->query ) && count( $this->query ) > 0)
  //   {
  //     $return[''] = 'CHOOSE VENDOR';
  //     foreach($this->query as $row)
  //     {
  //       $return[$row['vendor_id']] = strtoupper($row['vendor_name']);
  //     }
  //     return $return;
  //   }
  // }

  public function get_other_image($product_id)
  {
    $this->db->where('product_id',$product_id);
    $this->query = $this->db->get('ci_image_addition');
    if ($this->query->num_rows() > 0) {
      return $this->query->result_array();
    }
    return false;
  }

  // public function get_productMetal($metal_id='')
  // {
  //   if($metal_id!=''){
  //     $this->db->where('metal_id',$metal_id);
  //     $this->query = $this->db->get('ci_metal');
  //     if ($this->query->num_rows() > 0) {
  //       return $this->query->row_array();
  //     }
  //     return false;
  //   }else{
  //     $this->query = $this->db->get('ci_metal');
  //     if ($this->query->num_rows() > 0) {
  //       return $this->query->result_array();
  //     }
  //     return false;
  //   }
  // }

  public function get_productCategory($category_id='') //use
  {
    if($category_id!=''){
      $this->db->where('category_id',$category_id);
      $this->query = $this->db->get('ci_category');
      if ($this->query->num_rows() > 0) {
        return $this->query->row_array();
      }
      return false;
    }else{
      $this->query = $this->db->get('ci_category');
      if ($this->query->num_rows() > 0) {
        return $this->query->result_array();
      }
      return false;
    }
  }

  // Get all products based on type
  public function get_productType($category_id='',$seller_id='',$weight='',$price='')
  {
    if($seller_id!=''){
      $this->db->where('seller_id',$seller_id);
    }
    if($weight!=''){
      $this->db->where('weight <=',$weight);
    }
    if($price!=''){
      $this->db->where('total_price <=',$price);
    }
    if($category_id!=''){
      $this->db->where('category_id',$category_id);
    }
    //$this->db->where('category_id',$category_id);
    $this->db->where('stock > 0');
    $this->query = $this->db->get('vu_products_list');
    if ($this->query->num_rows() > 0) {
      return $this->query->result_array();
    }
    return false;
  }

}
