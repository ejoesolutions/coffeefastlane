<!-- <div class="form-group">
  <div class="col-md-4">
      <label class="control-label">Purity</label>
  </div>
  <div class="col-md-8">
      <input type="text" class="form-control" name="quality" value="<?php echo $metal_cat['quality'] ?>" required>
  </div>
</div> -->
<div class="form-group">
  <div class="col-md-4">
      <label class="control-label">Product Type</label>
  </div>
  <div class="col-md-8">
      <input type="text" class="form-control" name="category_type" value="<?php echo $cType['category_type'] ?>" required>
  </div>
</div>
<!-- <div class="form-group">
  <div class="col-md-4">
      <label class="control-label">Metal Type</label>
  </div>
  <div class="col-md-8">
    <?php
      if($metal_cat['type']==1){
        ?><input type="radio" name="type" value="1" checked> Gold<?php
        ?><br><input type="radio" name="type" value="3"> Silver<?php
      }else{
        ?><input type="radio" name="type" value="1"> Gold<?php
        ?><br><input type="radio" name="type" value="3"checked> Silver<?php
      }
     ?>
  </div>
</div> -->
<?php echo form_hidden('category_id',$cType['category_id']); ?>
