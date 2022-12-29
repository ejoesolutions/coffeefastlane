<div class="row">
					<div class="col-md-4">
            <?php $this->load->view('includes/side_menu_cust') ?>
					</div>
          <div class="col-md-8">
            <h4>My Account</h4>
            <table class="table">
              <tr>
                <td>Username</td>
                <td><?php echo $user_profile['username'] ?></td>
              </tr>
              <tr>
                <td>Name</td>
                <td><?php echo $user_profile['full_name'] ?></td>
              </tr>
              <tr>
                <td>Phone</td>
                <td><?php echo $user_profile['phone'] ?></td>
              </tr>
              <tr>
                <td>Email</td>
                <td><?php echo $user_profile['email'] ?></td>
              </tr>
              <tr>
                <td>Address</td>
                <td><?php echo $user_profile['address'].'<br>'.$user_profile['postcode'].' '.$user_profile['town_area'].'<br>'.$user_profile['state'] ?></td>
              </tr>
							<!-- <tr>
                <td><a class="" data-toggle="modal" href="#editAccount"><button class="primary-btn"><b>Edit<b></button></a></td>
              </tr> -->
            </table>

						<a class="" data-toggle="modal" href="#editAccount"><button class="primary-btn">Edit</button></a>
            <!-- <br><br>
            <h4>Change Password</h4>
            <table class="table">
              <tr>
                <td>Password</td>
                <td>
                  <?php echo form_input($password) ?>
                  <?php echo form_error('password', '<p class="text-danger">', '</p>'); ?>
                </td>
              </tr>
              <tr>
                <td>Confirm Password</td>
                <td>
                  <?php echo form_input($password_confirm) ?>
                  <?php echo form_error('password_confirm', '<p class="text-danger">', '</p>'); ?>
                </td>
              </tr>
            </table> -->

						<!-- edit modal -->
						<div class="modal fade bs-modal-xl" id="editAccount" tabindex="-1" role="dialog" aria-hidden="true">
	            <div class="modal-dialog modal-xl">
	              <div class="modal-content">
	                <div class="modal-header">
	                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
	                  <h4 class="modal-title">Edit Account</h4>
	                </div>
	                <div class="modal-body">
	                  <?php echo form_open('customer/update_account',array('class'=>'form-horizontal')) ?>
	                  <div class="form-group">
	                    <div class="col-md-4">
	                        <label class="control-label">Name</label>
	                    </div>
	                    <div class="col-md-8">
	                        <input type="text" class="form-control" name="full_name" value="<?php echo $user_profile['full_name'] ?>" required>
	                    </div>
	                  </div>
	                  <div class="form-group">
	                    <div class="col-md-4">
	                        <label class="control-label">Phone</label>
	                    </div>
	                    <div class="col-md-8">
	                        <input type="text" class="form-control" name="phone" value="<?php echo $user_profile['phone'] ?>" required>
	                    </div>
	                  </div>
	                  <div class="form-group">
	                    <div class="col-md-4">
	                        <label class="control-label">Email</label>
	                    </div>
	                    <div class="col-md-8">
	                        <input type="email" class="form-control" name="email" value="<?php echo $user_profile['email'] ?>" required>
	                    </div>
	                  </div>
	                  <div class="form-group">
	                    <div class="col-md-4">
	                        <label class="control-label">Address</label>
	                    </div>
	                    <div class="col-md-8">
	                        <textarea name="address" class="form-control" required value="<?php echo $user_profile['address'] ?>"><?php echo $user_profile['address'] ?></textarea>
	                    </div>
	                  </div>
										<div class="form-group">
	                    <div class="col-md-4">
	                        <label class="control-label">Postcode</label>
	                    </div>
	                    <div class="col-md-8">
	                        <input type="text" class="form-control" name="postcode" value="<?php echo $user_profile['postcode'] ?>" required>
	                    </div>
	                  </div>
										<div class="form-group">
	                    <div class="col-md-4">
	                        <label class="control-label">Area</label>
	                    </div>
	                    <div class="col-md-8">
	                        <input type="text" class="form-control" name="town_area" value="<?php echo $user_profile['town_area'] ?>" required>
	                    </div>
	                  </div>
										<div class="form-group">
	                    <div class="col-md-4">
	                        <label class="control-label">State</label>
	                    </div>
	                    <div class="col-md-8">
	                        <?php echo form_dropdown('state_id',$state,$user_profile['state_id'],array('class'=>'form-control','required'=>'required')) ?>
	                    </div>
	                  </div>
										<hr>
										<div class="form-group">
	                    <div class="col-md-4">
	                        <label class="control-label">Password</label>
	                    </div>
	                    <div class="col-md-8">
	                        <input type="password" class="form-control" name="password">
	                    </div>
	                  </div>
										<div class="form-group">
	                    <div class="col-md-4">
	                        <label class="control-label">Re-Type Password</label>
	                    </div>
	                    <div class="col-md-8">
	                        <input type="password" class="form-control" name="password_confirm">
	                    </div>
	                  </div>
	                </div>
	                <div class="modal-footer">
	                  <?php echo form_hidden('user_id',$user_profile['id']) ?>
	                  <?php echo form_hidden('ori_email',$user_profile['email']) ?>
										
										<?php echo form_hidden('ship',$ship_id['shipping_id']) ?>
	                  <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
	                  <button type="submit" class="btn btn-success">Save</button>
	                </div>
	                <?php echo form_close() ?>
	              </div>
	              <!-- /.modal-content -->
	            </div>
	            <!-- /.modal-dialog -->
	          </div>
					</div>
</div>
