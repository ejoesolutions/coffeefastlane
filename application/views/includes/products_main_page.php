<div class="row">
  <!-- section title -->
  <div class="col-md-12">
    <div class="section-title">
      <h2 class="title">New Products</h2>
      <p style="float:right"><a href="<?php echo base_url("page/new_products") ?>">View All</a></p>
    </div>
  </div>
  <!-- section title -->
  <?php
    //print_r($products);

    //$data=[];
    $this->db->LIMIT(12,0);
    $this->db->where('seller_status=1 and product_status=1 and stock>0 and new_product IS NOT NULL');
    $this->db->order_by('product_id','desc');
    $this->query = $this->db->get('vu_products_list');
    if ($this->query->num_rows() > 0) {
      foreach ($this->query->result() as $row) {
        $data_new[] = $row;
      }
      //return $data;
    }
    //print_r($data);

    if(!empty($data_new)){
      foreach ($data_new as $row) {
        if($row->stock>0 && $row->seller_status==1 && $row->product_status==1){
          $info = pathinfo( $row->image_file );
          $no_extension =  basename( $row->image_file, '.'.$info['extension'] );
          $thumb_image = $no_extension.'_thumb.'.$info['extension'];
        ?>
        <div class="col-md-2 col-sm-6 col-xs-6">
          <a href="<?php echo base_url('catalog/product_detail') ?>/<?php echo $row->product_id.'/1'; ?>">
          <div class="content product product-single">
              <div class="product-thumb">
                <div class="content-overlay"></div>
                <div class="quarter-circle-bottom-left" style="font-size:80%;text-align:center;"><?php if($row->weight>=1000){ $n_weight=$row->weight/1000; echo $n_weight.' kg';}else{ echo number_format($row->weight,0).'g';} ?></div>
                <?php
                if($row->discount!=null){
                  ?><div class="discount-label red"> <span>-<?php echo $row->discount.'%' ?></span> </div><?php
                }
                if($row->top_product!=null){
                  ?><div class="discount-label-2 yellow"> <span>TOP!</span> </div><?php
                }
                if($row->new_product!=null)
                {
                  ?><div class="discount-label-3 black"> <span>NEW!</span> </div><?php
                }
                ?>
                <img style="border:1px solid #e7e4e4;padding-left:1px;padding-right:1px;padding-top:1px;padding-bottom:1px;" class="content-image img-fluid d-block mx-auto" src="<?php echo base_url().'images/thumbnail/'.$thumb_image; ?>" alt="">
                <div class="content-details fadeIn-bottom">
                 <div class="bottom d-flex align-items-center justify-content-center">
                   <?php
                   $nuprice=0;$price_after_tax=0;$clean_price=0;$price_1=0;

                   ?>
                   <p style="color:black">

                     <?php
                     if ($row->shop_image) {

                       $image_properties = array(
                         'src'   => base_url().'logo_vendor/'.$row->shop_image,
                         'alt'   => $row->shop_name,
                         'class' => 'img-thumbnail',
                         'width' => '30',
                         'height'=> '30',
                         'style'=>'border:0',
                         'title' => $row->shop_name,
                       );
                       echo img($image_properties);

                     } else {

                       $image_properties = array(
                         'src'   => 'https://dummyimage.com/75x75/d6c7d6/9b9dad.jpg&text=No+Image',
                         'alt'   => 'No image',
                         'class' => 'img-thumbnail',
                         'width' => '30',
                         'height'=> '30',
                         'style'=>'border:0',
                         'title' => 'No image',
                       );
                       echo img($image_properties);
                     }

                     ?>
                     <br><?php echo $row->shop_name ?><br>
                     CODE : <?php echo $row->item_code; ?><br>
                     PRICE : RM <?php echo number_format($row->add_cost,2);  ?><br>
                     <!-- TAX :
                       <?php
                       $after_tax=$row->tax*$row->add_cost;
                       echo $row->tax * 100;
                       echo '% / RM '.number_format($after_tax,2);
                       ?><br>
                     SHIPPING : RM <?php echo number_format($row->shipping,2); ?><br> -->
                     <!-- <a href="<?php echo base_url('catalog/product_detail') ?>/<?php echo $row->product_id.'/1'; ?>">View More</a> -->
                   </p>
                 </div>
                </div>
              </div>
              <div class="product-body" align="right" style="height:190px">
                <h4 class="product-price">
                  <?php
                    if($row->discount!=null)
                    {
                      $clean_price=$row->add_cost-($row->add_cost*($row->discount/100));
                      echo "RM ".number_format($clean_price,2);
                    }else{
                      echo "RM ".number_format($row->add_cost,2);
                    }

                   ?>
                </h4>

                <p class="product-name" style="color:black;">
                  <a href="<?php echo base_url('catalog/product_detail') ?>/<?php echo $row->product_id.'/1'; ?>"><?php echo $row->product_name ?></a>
                  <?php //echo "<br>".$row->category_type; ?><br>
                  <span class="text-danger">In Stock : <?php echo $row->stock ?></span>
                </p>
              </div>
            </div>
          </a>
        </div>

        <?php
      }
  }

    }else{
        echo "<p class='text-center'>No products yet</p>";
    }
   ?>

</div>
<div class="row">
  <!-- section title -->
  <div class="col-md-12">
    <div class="section-title">
      <h2 class="title">Top Products</h2>
      <p style="float:right"><a href="<?php echo base_url("page/top_products") ?>">View All</a></p>
    </div>
  </div>
  <!-- section title -->
  <?php
    //print_r($products);

    //$data=[];
    $this->db->LIMIT(12,0);
    $this->db->where('seller_status=1 and product_status=1 and stock>0 and top_product IS NOT NULL');
    $this->db->order_by('product_id','desc');
    $this->query = $this->db->get('vu_products_list');
    if ($this->query->num_rows() > 0) {
      foreach ($this->query->result() as $row) {
        $data_top[] = $row;
      }
      //return $data;
    }
    //print_r($data);

    if(!empty($data_top)){
      foreach ($data_top as $row) {
        if($row->stock>0 && $row->seller_status==1 && $row->product_status==1){
          $info = pathinfo( $row->image_file );
          $no_extension =  basename( $row->image_file, '.'.$info['extension'] );
          $thumb_image = $no_extension.'_thumb.'.$info['extension'];
        ?>
        <div class="col-md-2 col-sm-6 col-xs-6">
          <a href="<?php echo base_url('catalog/product_detail') ?>/<?php echo $row->product_id.'/1'; ?>">
          <div class="content product product-single">
              <div class="product-thumb">
                <div class="content-overlay"></div>
                <div class="quarter-circle-bottom-left" style="font-size:80%;text-align:center;"><?php if($row->weight>=1000){ $n_weight=$row->weight/1000; echo $n_weight.' kg';}else{ echo number_format($row->weight,0).'g';} ?></div>
                <?php
                if($row->discount!=null){
                  ?><div class="discount-label red"> <span>-<?php echo $row->discount.'%' ?></span> </div><?php
                }
                if($row->top_product!=null){
                  ?><div class="discount-label-2 yellow"> <span>TOP!</span> </div><?php
                }
                if($row->new_product!=null)
                {
                  ?><div class="discount-label-3 black"> <span>NEW!</span> </div><?php
                }
                ?>
                <img style="border:1px solid #e7e4e4;padding-left:1px;padding-right:1px;padding-top:1px;padding-bottom:1px;" class="content-image img-fluid d-block mx-auto" src="<?php echo base_url().'images/thumbnail/'.$thumb_image; ?>" alt="">
                <div class="content-details fadeIn-bottom">
                 <div class="bottom d-flex align-items-center justify-content-center">
                   <?php
                   $nuprice=0;$price_after_tax=0;$clean_price=0;$price_1=0;

                   ?>
                   <p style="color:black">

                     <?php
                     if ($row->shop_image) {

                       $image_properties = array(
                         'src'   => base_url().'logo_vendor/'.$row->shop_image,
                         'alt'   => $row->shop_name,
                         'class' => 'img-thumbnail',
                         'width' => '30',
                         'height'=> '30',
                         'style'=>'border:0',
                         'title' => $row->shop_name,
                       );
                       echo img($image_properties);

                     } else {

                       $image_properties = array(
                         'src'   => 'https://dummyimage.com/75x75/d6c7d6/9b9dad.jpg&text=No+Image',
                         'alt'   => 'No image',
                         'class' => 'img-thumbnail',
                         'width' => '30',
                         'height'=> '30',
                         'style'=>'border:0',
                         'title' => 'No image',
                       );
                       echo img($image_properties);
                     }

                     ?>
                     <br><?php echo $row->shop_name ?><br>
                     CODE : <?php echo $row->item_code; ?><br>
                     PRICE : RM <?php echo number_format($row->add_cost,2);  ?><br>
                     <!-- TAX :
                       <?php
                       $after_tax=$row->tax*$row->add_cost;
                       echo $row->tax * 100;
                       echo '% / RM '.number_format($after_tax,2);
                       ?><br>
                     SHIPPING : RM <?php echo number_format($row->shipping,2); ?><br> -->
                     <!-- <a href="<?php echo base_url('catalog/product_detail') ?>/<?php echo $row->product_id.'/1'; ?>">View More</a> -->
                   </p>
                 </div>
                </div>
              </div>
              <div class="product-body" align="right" style="height:190px">
                <h4 class="product-price">
                  <?php
                    if($row->discount!=null)
                    {
                      $clean_price=$row->add_cost-($row->add_cost*($row->discount/100));
                      echo "RM ".number_format($clean_price,2);
                    }else{
                      echo "RM ".number_format($row->add_cost,2);
                    }

                   ?>
                </h4>

                <p class="product-name" style="color:black;">
                  <a href="<?php echo base_url('catalog/product_detail') ?>/<?php echo $row->product_id.'/1'; ?>"><?php echo $row->product_name ?></a>
                  <?php //echo "<br>".$row->category_type; ?><br>
                  <span class="text-danger">In Stock : <?php echo $row->stock ?></span>
                </p>
              </div>
            </div>
          </a>
        </div>

        <?php
      }
  }

    }else{
        echo "<p class='text-center'>No products yet</p>";
    }
   ?>

</div>
<div class="row">
  <!-- section title -->
  <div class="col-md-12">
    <div class="section-title">
      <h2 class="title">Discount Products</h2>
      <p style="float:right"><a href="<?php echo base_url("page/discount_products") ?>">View All</a></p>
    </div>
  </div>
  <!-- section title -->
  <?php
    //print_r($products);

    //$data=[];
    $this->db->LIMIT(12,0);
    $this->db->where('seller_status=1 and product_status=1 and stock>0 and discount IS NOT NULL');
    $this->db->order_by('product_id','desc');
    $this->query = $this->db->get('vu_products_list');
    if ($this->query->num_rows() > 0) {
      foreach ($this->query->result() as $row) {
        $data_discount[] = $row;
      }
      //return $data;
    }
    //print_r($data);

    if(!empty($data_discount)){
      foreach ($data_discount as $row) {
        if($row->stock>0 && $row->seller_status==1 && $row->product_status==1){
          $info = pathinfo( $row->image_file );
          $no_extension =  basename( $row->image_file, '.'.$info['extension'] );
          $thumb_image = $no_extension.'_thumb.'.$info['extension'];
        ?>
        <div class="col-md-2 col-sm-6 col-xs-6">
          <a href="<?php echo base_url('catalog/product_detail') ?>/<?php echo $row->product_id.'/1'; ?>">
          <div class="content product product-single">
              <div class="product-thumb">
                <div class="content-overlay"></div>
                <div class="quarter-circle-bottom-left" style="font-size:80%;text-align:center;"><?php if($row->weight>=1000){ $n_weight=$row->weight/1000; echo $n_weight.' kg';}else{ echo number_format($row->weight,0).'g';} ?></div>
                <?php
                if($row->discount!=null){
                  ?><div class="discount-label red"> <span>-<?php echo $row->discount.'%' ?></span> </div><?php
                }
                if($row->top_product!=null){
                  ?><div class="discount-label-2 yellow"> <span>TOP!</span> </div><?php
                }
                if($row->new_product!=null)
                {
                  ?><div class="discount-label-3 black"> <span>NEW!</span> </div><?php
                }
                ?>
                <img style="border:1px solid #e7e4e4;padding-left:1px;padding-right:1px;padding-top:1px;padding-bottom:1px;" class="content-image img-fluid d-block mx-auto" src="<?php echo base_url().'images/thumbnail/'.$thumb_image; ?>" alt="">
                <div class="content-details fadeIn-bottom">
                 <div class="bottom d-flex align-items-center justify-content-center">
                   <?php
                   $nuprice=0;$price_after_tax=0;$clean_price=0;$price_1=0;

                   ?>
                   <p style="color:black">

                     <?php
                     if ($row->shop_image) {

                       $image_properties = array(
                         'src'   => base_url().'logo_vendor/'.$row->shop_image,
                         'alt'   => $row->shop_name,
                         'class' => 'img-thumbnail',
                         'width' => '30',
                         'height'=> '30',
                         'style'=>'border:0',
                         'title' => $row->shop_name,
                       );
                       echo img($image_properties);

                     } else {

                       $image_properties = array(
                         'src'   => 'https://dummyimage.com/75x75/d6c7d6/9b9dad.jpg&text=No+Image',
                         'alt'   => 'No image',
                         'class' => 'img-thumbnail',
                         'width' => '30',
                         'height'=> '30',
                         'style'=>'border:0',
                         'title' => 'No image',
                       );
                       echo img($image_properties);
                     }

                     ?>
                     <br><?php echo $row->shop_name ?><br>
                     CODE : <?php echo $row->item_code; ?><br>
                     PRICE : RM <?php echo number_format($row->add_cost,2);  ?><br>
                     <!-- TAX :
                       <?php
                       $after_tax=$row->tax*$row->add_cost;
                       echo $row->tax * 100;
                       echo '% / RM '.number_format($after_tax,2);
                       ?><br>
                     SHIPPING : RM <?php echo number_format($row->shipping,2); ?><br> -->
                     <!-- <a href="<?php echo base_url('catalog/product_detail') ?>/<?php echo $row->product_id.'/1'; ?>">View More</a> -->
                   </p>
                 </div>
                </div>
              </div>
              <div class="product-body" align="right" style="height:190px">
                <h4 class="product-price">
                  <?php
                    if($row->discount!=null)
                    {
                      $clean_price=$row->add_cost-($row->add_cost*($row->discount/100));
                      echo "RM ".number_format($clean_price,2);
                    }else{
                      echo "RM ".number_format($row->add_cost,2);
                    }

                   ?>
                </h4>

                <p class="product-name" style="color:black;">
                  <a href="<?php echo base_url('catalog/product_detail') ?>/<?php echo $row->product_id.'/1'; ?>"><?php echo $row->product_name ?></a>
                  <?php //echo "<br>".$row->category_type; ?><br>
                  <span class="text-danger">In Stock : <?php echo $row->stock ?></span>
                </p>
              </div>
            </div>
          </a>
        </div>

        <?php
      }
  }

    }else{
        echo "<p class='text-center'>No products yet</p>";
    }
   ?>

</div>
