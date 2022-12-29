<div class="row">
    <?php if($p_detail['product_status']!=0): ?>
  <?php $baseW=4.25; ?>
  <div class="product product-details clearfix">
  <div class="col-md-4">
    <div id="product-main-view">
      <div class="">
        <img src="<?php echo base_url().'images/'.$p_detail['image_file']; ?>" alt="" width="100%" height="100%">
      </div>
      <?php
      if(!empty($imej)){
      foreach ($imej as $key) {
        ?>
        <div class="">
          <img src="<?php echo base_url().'images/'.$key['image_add_file']; ?>" alt="" width="100%" height="100%">
        </div>
        <?php
      }} ?>
    </div>
    <div id="product-view">
      <div class="product-view">
        <?php
        $info = pathinfo( $p_detail['image_file'] );
        $no_extension =  basename( $p_detail['image_file'], '.'.$info['extension'] );
        $thumb_image = $no_extension.'_thumb.'.$info['extension'];
         ?>
        <img src="<?php echo base_url().'images/thumbnail/'.$thumb_image; ?>" alt="">
      </div>
            <?php
            if(!empty($imej)){
            foreach ($imej as $key) {
              $info = pathinfo( $key['image_add_file'] );
              $no_extension =  basename( $key['image_add_file'], '.'.$info['extension'] );
              $thumb_image = $no_extension.'_thumb.'.$info['extension'];
              ?>
              <div class="product-view">
                <img src="<?php echo base_url().'images/thumbnail/'.$thumb_image; ?>" alt="">
              </div>
              <?php
            }} ?>
			</div>
  </div>
  <?php echo form_open('cart/add_pesanan', array('class'=>'horizontal-form')); ?>
  <div class="col-md-6">
    <div class="product-body">
      <div class="product-label">
        <?php
        if($p_detail['discount']!=null)
        {
          ?><span class="sale"><?php echo $p_detail['discount'] ?>% OFF</span><?php
        }
        ?>
      </div>
      <div class="sharethis-inline-share-buttons"></div>
      <h2 class="product-name"><?php echo $p_detail['product_name'] ?></h2>
      <h3 class="product-price">
        <?php
        $nuprice=0;$price_after_tax=0;$clean_price=0;$price_1=0;
        if($p_detail['discount']!=null){
          echo '<del><i>RM '.$p_detail['add_cost'].'</i></del><br>';
          $clean_price=number_format($p_detail['add_cost']-($p_detail['add_cost']*($p_detail['discount']/100)),2);
        }else{
          $clean_price=number_format($p_detail['add_cost'],2);
        }
        //$clean_price=number_format($p_detail['add_cost'],2);
        echo 'RM '.$clean_price;
        echo form_hidden('price',set_value('price', $clean_price));
         ?>
     </h3>

      <div>
        <div class="product-rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-o empty"></i>
        </div>
        <!-- <a href="#">3 Review(s) / Add Review</a> -->
      </div>
      <p><strong>Shop Name:</strong><a href="<?php echo base_url('page/shops') ?>/<?php echo $p_detail['seller_id'].'/1'; ?>"> <?php echo $p_detail['shop_name'] ?></a></p>
      <p><strong>Availability:</strong> In Stock [ <?php echo $p_detail['stock'] ?> ]</p>
      <p><strong>Product Code:</strong> <?php echo $p_detail['item_code'] ?></p>
      <hr>
      <div class="product-btns">
        <div class="qty-input">
          <span class="text-uppercase">QTY: </span>
          <!-- <input class="input" type="number"> -->
          <input type="number" name="qty" class="input text-center" min="1" max="<?php echo $p_detail['stock'] ?>" value='1'>
        </div>

          <?php echo form_hidden('item_code',$p_detail['item_code']) ?>
          <?php echo form_hidden('product_code',$p_detail['product_code']) ?>
          <?php echo form_hidden('product_id',$p_detail['product_id']) ?>
          <?php echo form_hidden('product_name', $p_detail['product_name']);
          echo form_hidden('weight', $p_detail['weight']);
          echo form_hidden('seller_id', $p_detail['seller_id']);
          echo form_hidden('shop_name', $p_detail['shop_name']);
          echo form_hidden('modal', $p_detail['product_price']);

          //print_r($p_detail);
          echo form_hidden('unit_price', $p_detail['add_cost']);
          echo form_hidden('tax_price', $p_detail['tax']*$p_detail['add_cost']);
          echo form_hidden('ship_price', $p_detail['shipping']);
          ?>


        <!-- <button class="primary-btn add-to-cart" type="submit" id="btnSubmitOrder"><i class="fa fa-shopping-cart"></i> Add to Cart</button> -->
        <div class="pull-right">
          <!-- <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
          <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
          <button class="main-btn icon-btn"><i class="fa fa-share-alt"></i></button> -->
          <button class="primary-btn add-to-cart" type="submit" id="btnSubmitOrder"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
        </div>
      </div>
    </div>
    <div class="product-tab">
      <ul class="tab-nav">
        <!-- <li class="active"><a data-toggle="tab" href="#tab1">Description</a></li> -->
        <li class="active"><a data-toggle="tab" href="#tab1">Details</a></li>
        <li><a data-toggle="tab" href="#tab2">Product Description</a></li>
      </ul>
      <div class="tab-content">
        <div id="tab1" class="tab-pane fade in active">
          <p><?php echo 'Berat :';  ?>
            <?php
              if($p_detail['weight']>=1000){
                $n_weight=$p_detail['weight']/1000;
                echo $n_weight.' kg';
              }else{
                echo number_format($p_detail['weight'],2).' g';
              }
             ?>
            <br><?php echo 'Size : '.$p_detail['size']  ?>
            <!-- <br><?php echo 'Tax : '.($p_detail['tax']*100).' %'  ?>
            <br><?php echo 'Shipping Cost : RM '.$p_detail['shipping'] ?> -->
          </p>
        </div>
        <div id="tab2" class="tab-pane fade in">
          <p><?php echo $p_detail['description'];  ?>
          </p>
        </div>
      </div>
    </div>
  </div>
  <?php echo form_close(); ?>

</div>
<?php endif; ?>
<?php if($p_detail['product_status']==0): ?>
  <p class="text-center">Product not available!</p>
  <?php endif; ?>
</div>
