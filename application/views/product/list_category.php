<div class="portlet box blue">
  <div class="portlet-title">
    <div class="caption">
      <?php echo $title;
      ?>
      <?php $gov_tax = 0.06;
      $baseW=4.25;
       ?>
    </div>
  </div>
  <div class="portlet-body">
    <table class="table table-bordered" id="sample_1">
      <thead>
        <tr class="uppercase">
          <th nowrap >NO</th>
          <th nowrap class="text-center">PRODUCT TYPE</th>
          <!-- <th nowrap class="text-center">GOLD/SILVER</th> -->
          <th class="text-center">#</th>
        </tr>
      </thead>
      <tbody>
        <?php
          if(!empty($category)){
            $n=1;
            foreach ($category as $c) {
              ?>
              <tr>
                <td><?php echo $n++; ?></td>
                <td class="text-center"><?php echo $c['category_type']; ?></td>
                <td class="text-center"><a id="<?php echo $c['category_id']; ?>" class="upd_category"><span class="fa fa-edit">Edit</span></a></td>
              </tr>
              <?php
            }
          }
         ?>

      </tbody>
    </table>
    <a class="" data-toggle="modal" href="#addCategory"><button class="btn btn-primary">+ Category</button></a>

    <div class="modal fade bs-modal-xl" id="addCategory" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            <h4 class="modal-title">Add Product's Category</h4>
          </div>
          <div class="modal-body">
            <?php echo form_open('catalog/store_category',array('class'=>'form-horizontal','id'=>'form_category')) ?>
            <!-- <div class="form-group">
              <div class="col-md-4">
                  <label class="control-label">Purity</label>
              </div>
              <div class="col-md-8">
                  <input type="text" class="form-control" name="quality" required>
              </div>
            </div> -->
            <div class="form-group">
              <div class="col-md-4">
                  <label class="control-label">Product Type</label>
              </div>
              <div class="col-md-8">
                  <input type="text" class="form-control" name="category_type" id="category_type" required>

              </div>
            </div>
            <!-- <div class="form-group">
              <div class="col-md-4">
                  <label class="control-label">Metal Type</label>
              </div>
              <div class="col-md-8">
                <input type="radio" name="type" value="1" required> Gold
                <br><input type="radio" name="type" value="3"> Silver
              </div>
            </div> -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
            <!-- <button type="submit" class="btn btn-success">Save</button> -->
            <input type="submit" class="btn btn-success" value="Save">
          </div>
          <?php echo form_close() ?>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>

    <div class="modal fade bs-modal-xl" id="editCategory" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            <h4 class="modal-title">Edit Product's Category</h4>
          </div>
          <?php echo form_open('catalog/upd_category', array('class'=>'form-horizontal')); ?>
          <div class="modal-body" id="detail_category">

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
