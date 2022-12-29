<div class="portlet box blue">
  <div class="portlet-title">
    <div class="caption">
      <?php echo $title; ?>
    </div>
  </div>
  <div class="portlet-body form">
    <?php echo form_open_multipart('', array('class'=>'')); ?>
    <div class="form-body">
      <div class="row">
        <div class="col-md-4">
          <div class="form-group margin-top-20">

            <div class="fileinput fileinput-new" data-provides="fileinput">
              <div class="fileinput-new thumbnail img-responsive">
                <!-- <img src="https://www.placehold.it/400x400/EFEFEF/AAAAAA&amp;text=<?php echo lang('form_button_image_non') ?>" alt="" /> -->
                <img src="https://via.placeholder.com/500" alt="" />
              </div>
              <div class="fileinput-preview fileinput-exists thumbnail img-responsive"></div>
              <br>
              <div>
                <span class="btn default btn-file">
                  <span class="fileinput-new"> <i class="glyphicon glyphicon-camera"></i> <?php echo lang('form_button_image') ?> </span>
                  <span class="fileinput-exists"> <?php echo lang('form_button_image_change') ?> </span>
                  <input type="file" name="userfile" id="userfile">
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
                <?php echo form_dropdown('seller_id', $seller, set_value('seller_id'), array('class'=>'form-control','required'=>'required')) ?>
              </div>
              <?php
            }

           ?>
          <!-- <div class="form-group margin-top-20">
            <label class="control-label">VENDOR</label>
            <?php echo form_dropdown('vendor_id', $vendor, set_value('vendor_id'), array('class'=>'form-control','required'=>'required')) ?>
          </div> -->

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
                <?php echo form_error('item_code', '<p class="text-danger">', '</p>'); ?>
                <!-- <small class="text-danger">(Letak '-' sekiranya tiada)</small> -->
              </div>
            </div>
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
                <?php echo form_dropdown('category_id', $cType, set_value('category_id'), array('class'=>'form-control','id'=>'category_type','required'=>'required')) ?>
              </div>
            </div>
          </div>
          <!-- <div class="row" id="sub_form_view">
            <?php //if (set_value('category_id')): ?>
              <?php $this->load->view('product/ajax_metal_form') ?>
            <?php //endif; ?>
          </div> -->
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
                  <input type="checkbox" name="event_product[]" value="discount" id="myCheck" onclick="myFunction()"> Discount (%)
                    <div id="text" style="display:none">
                      <input type="text" name="product_disc" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                  <input type="checkbox" name="event_product[]" value="np"> New Product
                </div>
                <div class="col-md-4">
                  <input type="checkbox" name="event_product[]" value="tp"> Top Product
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        <hr>
      <div class="row">
        <div class="col-md-9">
          &nbsp;
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <?php echo form_submit('submit', lang('form_button_submit'), array('class'=>'btn btn-primary btn-block')) ?>
          </div>
        </div>
      </div>

      <hr>



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