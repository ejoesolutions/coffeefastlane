<div class="portlet box blue">
  <div class="portlet-title">
    <div class="caption">
      <?php echo $title ?>
    </div>
  </div>
  <div class="portlet-body">
    <?php echo form_open();?>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label class="control-label">FULL NAME</label>
          <?php echo form_input($full_name) ?>
          <?php echo form_error('full_name', '<p class="text-danger">', '</p>'); ?>
        </div>
          <div class="form-group">
            <label class="control-label">USERNAME</label>
            <?php echo form_input($username) ?>
            <?php echo form_error('username', '<p class="text-danger">', '</p>'); ?>
          </div>
        <div class="form-group">
          <label class="control-label">PHONE NO.</label>
          <?php echo form_input($phone) ?>
          <?php echo form_error('phone', '<p class="text-danger">', '</p>'); ?>
        </div>
        <div class="form-group">
          <label class="control-label">ADDRESS</label>
          <?php echo form_textarea($address) ?>
          <?php echo form_error('address', '<p class="text-danger">', '</p>'); ?>
        </div>
        <div class="form-group">
          <label class="control-label">POSTCODE</label>
          <?php echo form_input($postcode) ?>
          <?php echo form_error('postcode', '<p class="text-danger">', '</p>'); ?>
        </div>
        <div class="form-group">
          <label class="control-label">AREA</label>
          <?php echo form_input($town_area) ?>
          <?php echo form_error('town_area', '<p class="text-danger">', '</p>'); ?>
        </div>
        <div class="form-group">
          <label class="control-label">STATE</label>
          <?php echo form_dropdown($state_id,$state,$state_id['value']) ?>
          <?php echo form_error('state_id', '<p class="text-danger">', '</p>'); ?>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label class="control-label">EMAIL <small class="text-danger"> <strong>*Note:</strong> Each person must have one unique email.</small></label>
              <?php echo form_input($email) ?>
              <?php echo form_error('email', '<p class="text-danger">', '</p>'); ?>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label class="control-label">PASSWORD</label>
              <?php echo form_input($password) ?>
              <?php echo form_error('password', '<p class="text-danger">', '</p>'); ?>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label class="control-label">PASSWORD CONFIRMATION</label>
              <?php echo form_input($password_confirm) ?>
              <?php echo form_error('password_confirm', '<p class="text-danger">', '</p>'); ?>
            </div>
          </div>
        </div>
        <hr>
      </div>
      <?php if($user_profile['user_group']!=2){ ?>
        <div class="col-md-12">
          <div class="form-group">
            <?php //if ($user_info['user_group']==1): ?>

              <h3>Status</h3>
              <?php
              if($user_info['active']=='1')
              {
                ?>
                <input type="radio" name="active" value="1" checked="checked">Active<br>
                <input type="radio" name="active" value="0">Deactive
                <?php
              }else{
                ?>
                <input type="radio" name="active" value="1">Active<br>
                <input type="radio" name="active" value="0" checked="checked">Deactive
                <?php
              }

              ?>


            <?php //endif ?>
          </div>
        </div>
      <?php }else{
        echo form_hidden('active',1);
      } ?>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <?php echo form_hidden('id', $user_info['id']);?>
          <?php echo form_hidden('user_group', $user_info['user_group']);?>
          <?php echo form_hidden('ori_email', $user_info['email']);?>

          <?php echo form_submit('submit', lang('edit_user_submit_btn'), array('class'=>'btn btn-success'));?>
        </div>
      </div>
    </div>
    <?php echo form_close();?>
  </div>
</div>
