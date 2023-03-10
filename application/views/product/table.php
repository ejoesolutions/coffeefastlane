<style>
div.scrollit {
/* overflow:scroll;
height:100px; */
  height: 60px;
  width: 230px;
  overflow-y: auto;
 }
</style>
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
          <!-- <th nowrap >VENDOR</th> -->
          <th nowrap  class="text-center">IMAGE</th>
          <th nowrap >PRODUCT</th>
          <th nowrap  class="text-center">MODAL PRICE (RM)</th>
          <th nowrap  class="text-center">SELL PRICE (RM)</th>
          <th class="text-center" width="160px">STOCK</th>
          <?php
          //if($user_profile['user_group']==1 || $user_profile['user_group']==0 )
          //{
            ?><th class="text-center">#</th><?php
          //}
           ?>

        </tr>
      </thead>
      <tbody>
        <?php if ($products):
          //print_r($products)
          ?>
          <?php foreach ($products as $row):
            ?>
            <tr>
              <!-- <td style="vertical-align: middle !important;"><b><?php echo $row->vendor_name ?></b></td> -->
              <td style="vertical-align: middle !important;" class="text-center">
                <?php
                if ($row->image_file) {
                  $info = pathinfo( $row->image_file );
                  $no_extension =  basename( $row->image_file, '.'.$info['extension'] );
                  $thumb_image = $no_extension.'_thumb.'.$info['extension'];
                  $image_properties = array(
                    'src'   => base_url().'images/thumbnail/'.$thumb_image,
                    'alt'   => $row->product_name,
                    'class' => 'img-thumbnail',
                    'width' => '75',
                    'height'=> '75',
                    'title' => $row->product_name,
                  );
                  echo img($image_properties);

                } else {

                  $image_properties = array(
                    'src'   => 'https://dummyimage.com/75x75/d6c7d6/9b9dad.jpg&text=No+Image',
                    'alt'   => 'No image',
                    'class' => 'img-thumbnail',
                    'width' => '75',
                    'height'=> '75',
                    'title' => 'No image',
                  );
                  echo img($image_properties);
                }

                ?>
              </td>
              <td style="vertical-align: middle !important;">
                <h4>
                  <?php
                  //if($this->uri->segment(1)=="sales"){
                    echo $row->product_name;
                  //}
                  //if($this->uri->segment(1)=="catalog"){
                    //echo anchor('catalog/product_detail/'.$row->product_id, $row->product_name .' - <small>'. $row->karat.'</small>');
                  //}
                   ?>
                </h4>
                <p><small>
                  CODE : <?php echo $row->item_code; ?><br>
                  SHOP : <?php echo $row->shop_name; ?>
                </small></p>

              </td>

              <td style="vertical-align: middle !important;" class="text-center" nowrap>

                <h4>
                  <?php echo number_format($row->product_price,2); ?>
                </h4>
              </td>
              <td style="vertical-align: middle !important;" class="text-center" nowrap>
                <h4>
                  <?php
                  $nuprice=0;$price_after_tax=0;$clean_price=0;$price_1=0;
                  $price_1=$row->add_cost;
                  //$nuprice=($price_1*$row->add_cost)+$price_1;
                  $price_after_tax=($row->tax*$price_1)+$price_1;
                  $clean_price=$price_after_tax+$row->shipping;
                  //echo number_format(round($clean_price,0)).'.00';
                  echo number_format($row->add_cost,2);
                  ?>
                </h4>
              </td>
              <td style="vertical-align: middle !important;" class="text-center">
                <h4>
                  <?php
                  if ($row->stock < 20 ) {
                    echo '<span class="text-danger">'.$row->stock.'</span>';
                  } else {
                    echo '<span class="text-info">'.$row->stock.'</span>';
                  }
                  ?>
                </h4>
              </td>
              <?php //if($user_profile['user_group']==1 || $user_profile['user_group']==0) { ?>
              <td style="vertical-align: middle !important;" class="text-center">
                <small>
                  <?php

                    echo anchor('catalog/product_detail/'.$row->product_id, '<span class="text-info">View</span>');

                  ?>
                  <?php
                    if($row->stock=='' || $row->sold==''):
                        echo anchor('catalog/product_delete/'.$row->product_id, '<span class="text-info">| Delete</span>');
                    endif;
                    
                    if($row->product_status==1){
                        echo anchor('catalog/set_publish/0/'.$row->product_id, '<span class="text-info">| Hide</span>',array('title'=>'Hide item on mainpage'));
                    }else{
                        echo anchor('catalog/set_publish/1/'.$row->product_id, '<span class="text-info">| Show</span>',array('title'=>'Show item on mainpage'));
                    }
                  ?>
                  
                </small>
              </td>
            <?php //} ?>
            </tr>
          <?php endforeach; ?>
        <?php endif; ?>
        <?php if (!$products): ?>
          <tr>
            <td class="text-danger" colspan="6"><center>No product yet</center></td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</div>
