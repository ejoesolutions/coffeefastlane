<style>
/*----------------------------*\
  Product tab
\*----------------------------*/
#exTab3 .nav-pills > li > a {
  border-radius: 4px 4px 0 0 ;
}

#exTab3 .tab-content {
  color : black;
  background-color: #e3ebff;
  padding : 5px 15px;
}
</style>

<div class="portlet box blue">
  <div class="portlet-title">
    <div class="caption">
      <?php echo $title ?>
    </div>
  </div>
  <div class="portlet-body">
      <div class="row">
        <div class="col-md-12">
          <div id="exTab3">
            <ul  class="nav nav-pills">
                  <?php
                    if($user_profile['user_group']==2){
                      ?>
                      <li class="active">
                        <a  href="#1b" data-toggle="tab" style="background-color: #78d9ff">Weight Based Shipping</a>
                			</li>
                      <?php
                    }else{
                      ?>
                      <!-- <li class="active">
                        <a  href="#1b" data-toggle="tab" style="background-color: #78d9ff">Weight Based Cost</a>
                			</li> -->
                			<li class="active"><a  href="#2b" data-toggle="tab" style="background-color: #78d9ff">Logo</a>
                			</li>
                			<li><a  href="#3b" data-toggle="tab" style="background-color: #78d9ff">Banner</a>
                			</li>
                      <li><a  href="#4b" data-toggle="tab" style="background-color: #78d9ff">Footer</a>
                			</li>
                      <li><a  href="#5b" data-toggle="tab" style="background-color: #78d9ff">Menu</a>
                			</li>
                      <li><a  href="#6b" data-toggle="tab" style="background-color: #78d9ff">No. of Day</a>
                			</li>
                      <li><a  href="#7b" data-toggle="tab" style="background-color: #78d9ff">Email</a>
                			</li>
                      <?php
                    }
                   ?>

            	</ul>

        			<div class="tab-content col-md-12">
        			  <?php
                if($user_profile['user_group']==2){
                  ?>
                  <div class="tab-pane active" id="1b">
                    <?php echo form_open('admin/store_weightcost'); ?>
                    <table class="table" width="50%">
                      <tr>
                        <td>Min Weight (g)</td><td><input type="text" name="weightInitial_set" id="weightInitial_set" onkeyup="cek_input()" class="form-control" required></td>
                      </tr>
                      <tr>
                        <td>Max Weight (g)</td><td><input type="text" name="weightFinal_set" id="weightFinal_set" onkeyup="cek_input()" class="form-control" required></td>
                      </tr>
                      <tr>
                        <td>Shipping cost</td><td><input type="text" name="shipcost_set" id="shipcost_set" onkeyup="cek_input()" class="form-control" required></td>
                      </tr>
                      <tr>
                        <td>Area</td>
                        <td>
                          <select name="area" required class="form-control">
                            <option value="1">Semenanjung Malaysia</value>
                            <option value="2">Sabah Sarawak</value>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <input type="hidden" name="seller_id" value="<?php echo $shop['seller_id'] ?>">
                        <td></td><td><input type="submit" name="btnWeightCost" value="Save" class="btn btn-primary"></td>
                      </tr>
                    </table>
                    <?php echo form_close(); ?>
                    <br>
                    <table class="table table-bordered" border="">
                      <tr>
                        <th>No</th>
                        <th>Min Weight (g)</th>
                        <th>Max Weight (g)</th>
                        <th>Shipping cost</th>
                        <th>Area</th>
                        <th>Action</th>
                      </tr>
                        <?php
                        if(!empty($cost)){
                          $i=1;
                          foreach ($cost as $key) {
                            ?>
                            <tr>
                              <td><?php echo $i++ ?></td>
                              <td><?php echo number_format($key['weightInitial_set'],3) ?></td>
                              <td><?php echo number_format($key['weightFinal_set'],3) ?></td>
                              <td><?php echo number_format($key['shipcost_set'],2) ?></td>
                              <td><?php
                              if($key['area']==1){
                                echo 'Semenanjung Malaysia';
                              }else{
                                echo 'Sabah Sarawak';
                              }
                               ?></td>
                              <td>

                                <a id="<?php echo $key['weightcost_id']; ?>" class="view_data"><span class="fa fa-edit"></span></a>

                                <?php
                              echo '&nbsp;&nbsp;';
                              echo anchor('admin/delete_weightcost/'.$key['weightcost_id'], '<span class="fa fa-trash"></span>', array());
                              ?></td>
                            </tr>
                            <?php
                          }
                        }else{

                        }
                         ?>
                    </table>
          				</div>
                  <?php
                }else{
                  ?>
                  <div class="tab-pane active" id="2b">
                    <?php echo form_open_multipart('admin/store_logo');
                    //print_r($logo);
                    ?>
                    <div class="col-md-4">
                      <div class="form-group margin-top-20">

                        <div class="fileinput fileinput-new" data-provides="fileinput">
                          <div class="fileinput-new thumbnail img-responsive">
                            <?php
                            if ($logo['image_file'] != '') {

                              $image_properties = array(
                                'src'   => base_url().'logo/'.$logo['image_file'],
                                'alt'   => 'Logo',
                                'class' => 'img-responsive margin-top-30 ',
                                'title' => 'Logo',
                              );

                            } else {

                              $image_properties = array(
                                'src'   => 'https://www.placehold.it/500x500/EFEFEF/AAAAAA&amp;text=<?php echo lang("form_button_image_non") ?>',
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
                            <small><span class="text-danger">NOTE!</span> Ideal image 155x70</small>
                          </div>
                        </div>

                      </div>
                      <?php echo form_hidden('logo_id',$logo['logo_id']);
                        echo form_hidden('temp_logo',$logo['image_file']);
                       ?>
                      <input type="submit" name="btnWeightCost" value="Save" class="btn btn-primary">
                    </div>
                    <?php echo form_close(); ?>

          				</div>
                  <div class="tab-pane" id="3b">
                    <?php echo form_open_multipart('admin/store_banner'); ?>
                    <h4>Add Banner</h4>
                    <div class="col-md-4">
                      <div class="form-group margin-top-20">

                        <div class="fileinput fileinput-new" data-provides="fileinput">

                          <div class="fileinput-preview fileinput-exists thumbnail img-responsive"></div>
                          <br>
                          <div>
                            <span class="btn default btn-file">
                              <span class="fileinput-new"> <i class="glyphicon glyphicon-camera"></i> <?php echo lang('form_button_image') ?> </span>
                              <span class="fileinput-exists"> <?php echo lang('form_button_image_change') ?> </span>
                              <input type="file" name="bannerFile" required>
                            </span>
                            <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> <?php echo lang('form_button_image_delete') ?> </a>
                          </div>
                          <div class="clearfix margin-top-10">
                            <small><span class="text-danger">NOTE!</span> Ideal image 1200x675</small>
                          </div>
                        </div>

                      </div>
                      <input type="submit" name="btnBanner" value="Save" class="btn btn-primary">
                    </div>
                    <?php echo form_close(); ?>
                    <hr>
                    <br>
                    <table class="table table-bordered" id="">
                      <thead>
                        <tr class="uppercase">
                          <th nowrap  class="">BANNER</th>
                          <!-- <th nowrap  class="text-center">TITLE</th>
                          <th nowrap  class="text-center">DESCRIPTION</th> -->
                          <th nowrap  class="">ACTION</th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php if ($banner):
                          ?>
                          <?php foreach ($banner as $k):
                            ?>
                            <tr>
                              <td style="vertical-align: middle !important;" class="text-center">
                                <div class="col-md-4">
                                  <div class="form-group margin-top-20">

                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                      <div class="fileinput-new thumbnail">
                                        <?php
                                        if ($k['file_name'] != '') {

                                          $image_properties = array(
                                            'src'   => base_url().'banner/'.$k['file_name'],
                                            'alt'   => $k['file_name'],
                                            'class' => 'img-thumbnail',
                                            'width' => '200',
                                            'height'=> '200',
                                            'title' => $k['file_name'],
                                          );

                                        } else {

                                          $image_properties = array(
                                            'src'   => 'https://dummyimage.com/75x75/d6c7d6/9b9dad.jpg&text=No+Image',
                                            'alt'   => 'No image',
                                            'class' => 'img-thumbnail',
                                            'width' => '100',
                                            'height'=> '100',
                                            'title' => 'No image',
                                          );
                                        }

                                        echo img($image_properties);
                                        ?>
                                      </div>
                                    </div>

                                  </div>
                                </div>

                              </td>
                              <!-- <td style="vertical-align: middle !important;">
                                <input type="text" name="title" class="form-control" value="<?php echo $k['title'] ?>" required>
                              </td>
                              <td style="vertical-align: middle !important;">
                                <input type="text" name="description" class="form-control" value="<?php echo $k['description'] ?>" required>
                              </td> -->
                              <td style="vertical-align: middle !important;">
                                <?php //echo anchor('admin/upd_banner/'.$k['banner_id'], '<span class="fa fa-edit">Update</span>'); ?>
                                <a id="<?php echo $k['banner_id']; ?>" class="view_banner"><span class="fa fa-edit">Update</span></a>
                                <?php echo anchor('admin/del_banner/'.$k['banner_id'].'/'.$k['file_name'], '<span class="fa fa-trash">Delete</span>'); ?>
                              </td>
                            </tr>
                          <?php endforeach; ?>
                        <?php endif; ?>
                        <?php if (!$banner): ?>
                          <tr>
                            <td class="text-danger" colspan="3"><center>No banner yet</center></td>
                          </tr>
                        <?php endif; ?>
                      </tbody>
                    </table>
                    <!-- <table class="table">
                      <tr>
                        <th>No</th>
                        <th>Banner</th>
                        <th>Title</th>
                        <th>Description</th>
                      </tr>
                      <?php
                      $i=1;
                      foreach ($banner as $k) {
                      ?>
                      <tr>
                        <td><?php echo $i++; ?></td>
                        <td>
                          <div class="col-md-4">
                            <div class="form-group margin-top-20">

                              <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail img-responsive">
                                  <?php
                                  if ($k['file_name'] != '') {

                                    $image_properties = array(
                                      'src'   => base_url().'banner/'.$k['file_name'],
                                      'alt'   => $k['file_name'],
                                      'class' => 'img-responsive margin-top-30 ',
                                      'title' => $k['file_name'],
                                    );

                                  } else {

                                    $image_properties = array(
                                      'src'   => 'https://www.placehold.it/500x500/EFEFEF/AAAAAA&amp;text=<?php echo lang("form_button_image_non") ?>',
                                      'alt'   => $k['file_name'],
                                      'class' => 'img-responsive margin-top-30 ',
                                      'title' => $k['file_name'],
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
                                    <input type="file" name="userfile[]">
                                  </span>
                                  <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> <?php echo lang('form_button_image_delete') ?> </a>
                                </div>
                                <div class="clearfix margin-top-10">
                                  <small><span class="text-danger">NOTE!</span> Ideal image 1200x675</small>
                                </div>
                                <br>
                                <p>Title :
                                  <input type="text" name="name[]" class="form-control" value="<?php echo $k['title'] ?>" required>
                                </p>
                                <p>Description :
                                  <input type="text" name="description[]" class="form-control" value="<?php echo $k['description'] ?>" required>
                                </p>
                              </div>

                            </div>
                          </div>
                        </td>
                      </tr>
                      <?php
                      }
                       ?>
                       <tr><td><input type="submit" name="btnBanner" value="Save" class="btn btn-primary"></td></tr>
                    </table> -->
                    <?php //echo form_close() ?>
          				</div>
                  <div class="tab-pane" id="4b">
                    <?php echo form_open('admin/store_footer');
                    //print_r($footer['footer_id']);
                    ?>
                    <div class="col-md-8">
                      <div class="form-group margin-top-20">
                        <label>Site Description :</label>
                        <textarea name="site_description" class="form-control"><?php echo $footer['site_description'] ?></textarea>
                      </div>
                      <div class="form-group">
                        <label>Facebook :</label>
                        <input type="text" name="facebook" class="form-control" value="<?php echo $footer['facebook'] ?>" placeholder="Paste link here..">
                      </div>
                      <div class="form-group">
                        <label>Twitter :</label>
                        <input type="text" name="twitter" class="form-control" value="<?php echo $footer['twitter'] ?>" placeholder="Paste link here..">
                      </div>
                      <div class="form-group">
                        <label>Instagram :</label>
                        <input type="text" name="instagram" class="form-control" value="<?php echo $footer['instagram'] ?>" placeholder="Paste link here..">
                      </div>
                      <div class="form-group">
                        <label>Pinterest :</label>
                        <input type="text" name="pinterest" class="form-control" value="<?php echo $footer['pinterest'] ?>" placeholder="Paste link here..">
                      </div>
                      <div class="form-group">
                        <label>About Us :</label>
                        <input type="text" name="about_us" class="form-control" value="<?php echo $footer['about_us'] ?>" placeholder="Paste link here..">
                      </div>
                      <div class="form-group">
                        <label>Shipping & Return :</label>
                        <input type="text" name="shipping_return" class="form-control" value="<?php echo $footer['shipping_return'] ?>" placeholder="Paste link here..">
                      </div>
                      <div class="form-group">
                        <label>Shipping Guide :</label>
                        <input type="text" name="shipping_guide" class="form-control" value="<?php echo $footer['shipping_guide'] ?>" placeholder="Paste link here..">
                      </div>
                      <div class="form-group">
                        <label>FAQ :</label>
                        <input type="text" name="faq" class="form-control" value="<?php echo $footer['faq'] ?>" placeholder="Paste link here..">
                      </div>
                      <div class="form-group">
                        <label>Stay Connected :</label>
                        <textarea name="stay_connected" class="form-control"><?php echo $footer['stay_connected'] ?></textarea>
                      </div>
                      <?php
                        if($footer['footer_id']){
                          echo form_hidden('footer_id',$footer['footer_id']);
                        }
                       ?>
                      <input type="submit" name="btnWeightCost" value="Save" class="btn btn-primary">
                    </div>
                    <?php echo form_close(); ?>

          				</div>
                  <div class="tab-pane" id="5b">
                    <?php echo form_open('admin/store_menu');
                    //print_r($footer['footer_id']);
                    ?>
                    <div class="col-md-8">

                      <div class="form-group">
                        <label>Why Us :</label>
                        <input type="text" name="why_us" class="form-control" value="<?php echo $footer['why_us'] ?>" placeholder="Paste link here..">
                      </div>
                      <div class="form-group">
                        <label>Contact Us :</label>
                        <input type="text" name="contact_us" class="form-control" value="<?php echo $footer['contact_us'] ?>" placeholder="Paste link here..">
                      </div>

                      <?php
                        if($footer['footer_id']){
                          echo form_hidden('footer_id',$footer['footer_id']);
                        }
                       ?>
                      <input type="submit" name="btnSave" value="Save" class="btn btn-primary">
                    </div>
                    <?php echo form_close(); ?>

          				</div>
                  <div class="tab-pane" id="6b">
                    <?php echo form_open('admin/store_days');
                    //print_r($footer['footer_id']);
                    ?>
                    <div class="col-md-8">

                      <div class="form-group">
                        <label>No. of due days to receive order by customer :</label>
                        <input type="number" name="day_to_complete" class="form-control" value="<?php echo $due['day_to_complete'] ?>">
                      </div>
                      <!-- <div class="form-group">
                        <label>Contact Us :</label>
                        <input type="text" name="contact_us" class="form-control" value="<?php echo $footer['contact_us'] ?>" placeholder="Paste link here..">
                      </div> -->

                      <?php
                        if($due['id']){
                          echo form_hidden('due_id',$due['id']);
                        }
                       ?>
                      <input type="submit" name="submit" value="Save" class="btn btn-primary">
                    </div>
                    <?php echo form_close(); ?>

          				</div>
                  <div class="tab-pane" id="7b">
                    <?php echo form_open('admin/store_email'); ?>
                    <h4>Add Email</h4>
                    <div class="col-md-4">
                      <div class="form-group margin-top-20">
                        <input type="email" name="admin_email" class="form-control" required>
                      </div>
                      <input type="submit" name="btnEmail" value="Save" class="btn btn-primary">
                    </div>
                    <?php echo form_close(); ?>
                    <table class="table table-bordered" id="">
                      <thead>
                        <tr class="uppercase">
                          <th nowrap  class="">NO.</th>
                          <th nowrap  class="text-center">EMAIL</th>
                          <th nowrap  class="">##</th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php if ($email):
                          ?>
                          <?php
                          $i=1;
                          foreach ($email as $k):
                            ?>
                            <tr>
                              <td style="vertical-align: middle !important;" class="text-center">
                                <?php echo $i++; ?>
                              </td>
                              <td style="vertical-align: middle !important;">
                                <input type="text" name="title" class="form-control" value="<?php echo $k['email'] ?>" readonly>
                              </td>
                              <td style="vertical-align: middle !important;">
                                <?php //echo anchor('admin/upd_banner/'.$k['banner_id'], '<span class="fa fa-edit">Update</span>'); ?>
                                <!-- <a id="<?php echo $k['banner_id']; ?>" class="view_banner"><span class="fa fa-edit">Update</span></a> -->
                                <?php echo anchor('admin/del_email/'.$k['row_id'], '<span class="fa fa-trash">Delete</span>'); ?>
                              </td>
                            </tr>
                          <?php endforeach; ?>
                        <?php endif; ?>
                        <?php if (!$email): ?>
                          <tr>
                            <td class="text-danger" colspan="3"><center>No email yet</center></td>
                          </tr>
                        <?php endif; ?>
                      </tbody>
                    </table>
          				</div>
                  <?php
                }
                 ?>



                <div class="modal fade bs-modal-xl" id="editWeight" tabindex="-1" role="dialog" aria-hidden="true">
    	            <div class="modal-dialog modal-xl">
    	              <div class="modal-content">
    	                <div class="modal-header">
    	                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    	                  <h4 class="modal-title">Edit Shipping Cost</h4>
    	                </div>
                      <?php echo form_open('admin/update_weightcost', array('class'=>'form-horizontal')); ?>
    	                <div class="modal-body" id="detail">

    	                </div>
    	                <div class="modal-footer">

    	                  <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
    	                  <button type="submit" class="btn btn-success">Save</button>
    	                </div>
    	                <?php echo form_close() ?>
    	              </div>
    	              <!-- /.modal-content -->
    	            </div>
    	            <!-- /.modal-dialog -->
    	          </div>

                <!-- edit banner -->
                <div class="modal fade bs-modal-xl" id="editBanner" tabindex="-1" role="dialog" aria-hidden="true">
    	            <div class="modal-dialog modal-xl">
    	              <div class="modal-content">
    	                <div class="modal-header">
    	                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    	                  <h4 class="modal-title">Edit Banner</h4>
    	                </div>
                      <?php echo form_open_multipart('admin/upd_banner', array('class'=>'form-horizontal')); ?>
    	                <div class="modal-body" id="detail_banner">

    	                </div>
    	                <div class="modal-footer">

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
        </div>
      </div>
  </div>
</div>
<script>
  function cek_input(){
    var w1=document.getElementById('weightInitial_set').value;
    var w2=document.getElementById('weightFinal_set').value;
    var ship=document.getElementById('shipcost_set').value;
    // var premium=document.getElementById('premium_set').value;
    // var sst=document.getElementById('sst_set').value;

    if(isNaN(w1) || isNaN(w2) || isNaN(ship)){
      alert("Insert number only.");
    }
  }
</script>
