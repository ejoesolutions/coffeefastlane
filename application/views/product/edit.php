<div class="portlet box blue">
  <div class="portlet-title">
    <div class="caption">
      <?php echo $title; ?>
    </div>
  </div>
  <div class="portlet-body form">
    <?php echo form_open_multipart('catalog/store_product_update', array('class'=>'')); ?>
    <input type="hidden" name="product_id" id="product_id" value="<?php echo $product['product_id']; ?>">
    <!-- <pre><?php echo validation_errors(); ?></pre> -->
    <div class="form-body">
      <div class="row">
        <div class="col-md-4">
          <div class="form-group margin-top-20">

            <div class="fileinput fileinput-new" data-provides="fileinput">
              <div class="fileinput-new thumbnail img-responsive">
                <?php
                if ($product['image_file'] != '') {

                  $image_properties = array(
                    'src'   => base_url().'images/'.$product['image_file'],
                    'alt'   => $product['product_name'],
                    'class' => 'img-responsive margin-top-30 ',
                    'title' => $product['product_name'],
                  );

                } else {

                  $image_properties = array(
                    // 'src'   => 'https://www.placehold.it/500x500/EFEFEF/AAAAAA&amp;text=<?php echo lang("form_button_image_non")
                    'src'   => 'https://via.placeholder.com/500',
                    'alt'   => $product['product_name'],
                    'class' => 'img-responsive margin-top-30 ',
                    'title' => $product['product_name'],
                  );
                }

                echo img($image_properties);
                ?>
              </div>
              <div class="fileinput-preview fileinput-exists thumbnail img-responsive"></div>
              <br>
              <div>
                <span class="btn default btn-file">
                  <span class="fileinput-new"> <i class="glyphicon glyphicon-camera"></i> <?php echo lang('form_button_image') ?> </span>
                  <span class="fileinput-exists"> <?php echo lang('form_button_image_change') ?> </span>
                  <input type="file" name="userfile">
                </span>
                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> <?php echo lang('form_button_image_delete') ?> </a>
              </div>
              <div class="clearfix margin-top-10">
                <small><span class="text-danger">NOTE!</span> <?php echo lang('form_button_upload_note') ?> | Size < 250KB</small>
                <?php if (isset($error_image)): ?>
                  <?php echo '<p><small class="text-danger">'. $error_image .'</small></p>'; ?>
                <?php endif; ?>
              </div>
            </div>

          </div>
        </div>

        <div class="col-md-8">
          <?php
            if($user_profile['user_group']==0 || $user_profile['user_group']==1){
              ?>
              <div class="form-group margin-top-20">
                <label class="control-label">SELLER</label>
                <?php
                echo form_dropdown('seller_id',$seller,$product['seller_id'],array('class'=>'form-control','required'=>'required'));
                 ?>
              </div>
              <?php
            }

           ?>
          <div class="form-group margin-top-20">
            <label class="control-label">PRODUCT NAME</label>
            <?php echo form_input($product_name);?>
            <?php echo form_error('product_name', '<p class="text-danger">', '</p>'); ?>
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label class="control-label">PRODUCT CODE</label>
                <?php echo form_input($item_code);?>
                <?php echo form_error('product_code', '<p class="text-danger">', '</p>'); ?>
                <!-- <small class="text-danger">(Letak '-' sekiranya tiada)</small> -->
              </div>
            </div>
            <!-- <div class="col-md-3">
              <div class="form-group">
                <label class="control-label">KOD TAG SIRI</label>
                <?php echo form_input($product_code);?>
                <?php echo form_error('product_code', '<p class="text-danger">', '</p>'); ?>

              </div>
            </div> -->
            <!-- <div class="col-md-4">
              <div class="form-group">
                <label class="control-label">HARGA TAMBAHAN (%)</label>
                <?php echo form_input($add_cost);?>
                <?php echo form_error('add_cost', '<p class="text-danger">', '</p>'); ?>

              </div>
            </div> -->
            <div class="col-md-4">
              <div class="form-group uppercase">
                <label class="control-label">PRODUCT CATEGORY</label>
                <?php //echo form_dropdown('metal_id', $metals, set_value('metal_id',$product['metal']), array('class'=>'form-control','id'=>'metal_type')) ?>
                <select name="category_id" class="form-control">
                  <?php
                  foreach ($category as $v) {
                    if($product['category_id']==$v['category_id']){
                      ?>
                      <option value="<?php echo $v['category_id'] ?>" selected><?php echo $v['category_type'] ?></option>
                      <?php
                    }else{
                      ?>
                      <option value="<?php echo $v['category_id'] ?>"><?php echo $v['category_type'] ?></option>
                      <?php
                    }
                  }
                   ?>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <!-- <h3>KONFIGURASI JENIS PRODUK EMAS</h3> -->
              <hr>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="control-label">WEIGHT (g)</label>
                    <?php echo form_input($weight);?>
                    <?php echo form_error('weight', '<p class="text-danger">', '</p>'); ?>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="control-label">SIZE</label>
                    <?php echo form_input($size);?>
                    <?php echo form_error('size', '<p class="text-danger">', '</p>'); ?>
                  </div>
                </div>
                <!--<div class="col-md-4">-->
                <!--  <div class="form-group">-->
                <!--    <label class="control-label">MODAL PRICE (RM)</label>-->
                <!--    <?php echo form_input($product_price);?>-->
                <!--    <?php echo form_error('product_price', '<p class="text-danger">', '</p>'); ?>-->
                <!--  </div>-->
                <!--</div>-->
              </div>
              <div class="row">
                <!--<div class="col-md-4">-->
                <!--  <div class="form-group">-->
                <!--    <label class="control-label">SHIPPING COST (RM)</label>-->
                <!--    <?php echo form_input($shipping);?>-->
                <!--    <?php echo form_error('shipping', '<p class="text-danger">', '</p>'); ?>-->
                <!--  </div>-->
                <!--</div>-->
                <!--<div class="col-md-4">-->
                <!--  <div class="form-group">-->
                <!--    <label class="control-label">TAX (%)</label>-->
                <!--    <?php echo form_input($tax);?>-->
                <!--    <?php echo form_error('tax', '<p class="text-danger">', '</p>'); ?>-->
                <!--  </div>-->
                <!--</div>-->
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="control-label">MODAL PRICE (RM)</label>
                    <?php echo form_input($product_price);?>
                    <?php echo form_error('product_price', '<p class="text-danger">', '</p>'); ?>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="control-label">SELL PRICE (RM)</label>
                    <?php echo form_input($add_cost);?>
                    <?php echo form_error('add_cost', '<p class="text-danger">', '</p>'); ?>
                  </div>
                </div>


              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label">DESCRIPTION</label>
                    <?php echo form_textarea($description);?>
                    <?php echo form_error('description', '<p class="text-danger">', '</p>'); ?>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label">EVENTS</label><br>
                    <div class="col-md-4">
                      <?php if($product['discount']!=null){
                        ?><input type="checkbox" name="event_product[]" value="discount" id="myCheck" onclick="myFunction()" checked> Discount (%)
                        <div id="text" style="display:show">
                          <input type="text" name="product_disc" class="form-control" value="<?php echo $product['discount'] ?>">
                        </div>
                        <?php
                      }else{
                        ?><input type="checkbox" name="event_product[]" value="discount" id="myCheck" onclick="myFunction()"> Discount (%)
                        <div id="text" style="display:none">
                          <input type="text" name="product_disc" class="form-control">
                        </div>
                        <?php
                      } ?>
                    </div>
                    <div class="col-md-4">
                      <?php if($product['new_product']!=null){
                        ?><input type="checkbox" name="event_product[]" value="np" checked> New Product
                        <?php
                      }else{
                        ?><input type="checkbox" name="event_product[]" value="np"> New Product
                        <?php
                      }
                      ?>
                      <!-- <input type="checkbox"> New Product -->
                    </div>
                    <div class="col-md-4">
                      <?php if($product['top_product']!=null){
                        ?><input type="checkbox" name="event_product[]" value="tp" checked> Top Product
                        <?php
                      }else{
                        ?><input type="checkbox" name="event_product[]" value="tp"> Top Product
                        <?php
                      }
                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">

        <input type="hidden" name='image_id' value='<?php echo $product['image_id'];?>'>
        <input type="hidden" name='temp_image' value='<?php echo $product['image_file'];?>'>
        <hr>
        <div class="col-md-9">
          &nbsp;
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <?php echo form_submit('submit', 'Save', array('class'=>'btn btn-primary btn-block')) ?>
          </div>
        </div>

        <?php if ($product['stock'] == NULL ): ?>
          <div class="col-md-2">
            <div class="form-group">
              <?php echo anchor('catalog/product_delete/'.$product['product_id'], 'Delete', array('class'=>'btn btn-block btn-danger')) ?>
            </div>
          </div>
        <?php endif; ?>
      </div>

      <!-- <hr> -->

    </div>
    <?php echo form_close() ?>
  </div>

</div>
<script>
function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>
