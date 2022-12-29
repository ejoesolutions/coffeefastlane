<div class="row">
  <!-- section title -->
  <div class="col-md-12">
    <div class="section-title">
      <h3 class="title">All Shops</h3>
    </div>
  </div>
    <!-- section title -->
    <?php

    if(!empty($shops)){
      foreach ($shops as $row) { ?>
        <div class="col-md-3 col-sm-6 col-xs-6">
          <a href="<?php echo base_url('page/shops') ?>/<?php echo $row['seller_id'].'/1'; ?>">
          <div class="content product product-single">
              <div class="product-thumb">
                 <!-- <div class="bottom d-flex align-items-center justify-content-center"> -->
                     <?php
                     if ($row['shop_image']) {

                       $image_properties = array(
                         'src'   => base_url().'logo_vendor/'.$row['shop_image'],
                         'alt'   => $row['shop_name'],
                         'class' => 'img-thumbnail',
                         'width' => '200',
                         'height'=> '200',
                         'style'=>'border:0',
                         'title' => $row['shop_name'],
                       );
                       echo img($image_properties);

                     } else {

                       $image_properties = array(
                        'src'   => 'https://dummyimage.com/230x230/d6c7d6/9b9dad.jpg&text=No+Image',
                        'alt'   => 'No image',
                        'class' => 'img-thumbnail',
                        'width' => '200',
                        'height'=> '200',
                        'style'=>'border:0',
                        'title' => 'No image',
                       );
                       echo img($image_properties);
                     }

                     ?>
              
                 <!-- </div> -->
              </div>

            </div>
          </a>
          <span style="color:black;" class="someDiv">
                <br><strong>Shop Name</strong> : <?php echo $row['shop_name'] ?>
                <br><strong>Phone</strong> : <?php echo $row['phone'] ?>
                <br><span><strong>Email</strong> : <?php echo $row['email'] ?></span>
              </span>
        </div>

        <?php
  }

    }else{
        echo "<p class='text-center'>No Shops yet</p>";
    }
   ?>

</div>
<!-- <ul class="pagination"> -->
      <?php
        //$total_records = count($products);
        // $limit =36;
        // $total_records = 0;
        // $pn=1;
        // if(!empty($shops)){
        //   foreach ($shops as $key) {
        //       $total_records++;
        //   }
        // }
        // // Number of pages required.
        // $total_pages = ceil($total_records / $limit);
        // $pagLink = "";
        // for ($i=1; $i<=$total_pages; $i++) {
        //   if ($i==$pn) {
        //       $pagLink .= "<li class='active'><a href='?page=".$i."'>".$i."</a></li>";
        //   }
        //   else  {
        //       $pagLink .= "<li><a href='?page=".$i."'>".$i."</a></li>";
        //   }
        // };
        // echo $pagLink;
      ?>
<!-- </ul> -->
