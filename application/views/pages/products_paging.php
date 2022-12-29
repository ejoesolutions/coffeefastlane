<div class="row">
  <!-- <div class="col-md-12">
    <div class="section-title">
      <h2 class="title">Products</h2>
      <?php $baseW=4.25; ?>
    </div>
  </div> -->
				<!-- ASIDE -->
				<div id="aside" class="col-md-3">

					<!-- aside widget -->
					<div class="aside">
						<h3 class="aside-title">Filter by Seller</h3>
						<ul class="list-links">
              <?php
              $cat_id=$pCat['category_id'];
              if(!empty($seller)){
                  foreach($seller as $v){
                ?><li <?php if($this->uri->segment(4)==$v['seller_id']) { echo 'class="active"';}?>><a href="<?php echo base_url('page/products').'/'.$cat_id.'/'.$v['seller_id'] ?>"><?php echo $v['shop_name'] ?></a></li>
                <?php
              }
              }
               ?>
						</ul>
					</div>
					<!-- /aside widget -->

          <!-- aside widget -->
					<div class="aside">
						<h3 class="aside-title">Filter by Weight(g)</h3>
            <p>Less than or equals to :</p>
            <?php

            if($this->uri->segment(4)!=''){
              echo form_open('page/products/'.$cat_id.'/'.$this->uri->segment(4));
            }else{
              echo form_open('page/products/'.$cat_id);
            }
            ?>
            <?php //echo form_open('page/products/'.$metal_id); ?>
						<input type="text" name="weight" class="form-control" required>
            <button type="submit" class="primary-btn">Filter</button>
            <?php echo form_close(); ?>
					</div>
					<!-- /aside widget -->

          <!-- aside widget -->
					<div class="aside">
						<h3 class="aside-title">Filter by Price(RM)</h3>
            <p>Less than or equals to :</p>
            <?php

            if($this->uri->segment(4)!=''){
              echo form_open('page/products/'.$cat_id.'/'.$this->uri->segment(4));
            }else{
              echo form_open('page/products/'.$cat_id);
            }
            ?>
            <?php //echo form_open('page/products/'.$metal_id); ?>
						<input type="text" name="price" class="form-control" required>
            <button type="submit" class="primary-btn">Filter</button>
            <?php echo form_close(); ?>
					</div>
					<!-- /aside widget -->

				</div>
				<!-- /ASIDE -->

				<!-- MAIN -->
				<div id="main" class="col-md-9">
          <div class="section-title">
            <h3 class="title"><?php echo $pCat['category_type'] ?></h3>
            <?php $baseW=4.25; ?>
          </div>

					<?php
					$limit =24;
			    if (isset($_GET["page"])) {
			      $pn  = $_GET["page"];
			    }
			    else {
			      $pn=1;
			    };

			    $start_from = ($pn-1) * $limit;
			    $data=[];
			    $this->db->LIMIT($limit,$start_from);
					$this->db->where('seller_status=1 and product_status=1 and stock>0');
					$this->db->where('category_id',$this->uri->segment(3));
					if($this->uri->segment(4)!=''){
						$this->db->where('seller_id',$this->uri->segment(4));
					}
					if(isset($_POST['weight'])){
						$this->db->where('weight <=',$_POST['weight']);
					}
					if(isset($_POST['price'])){
						$this->db->where('total_price <=',$_POST['price']);
					}
			    $this->query = $this->db->get('vu_products_list');
			    if ($this->query->num_rows() > 0) {
			      foreach ($this->query->result_array() as $row) {
			        $data[] = $row;
			      }
			      //return $data;
			    }
					?>
					<div class="row" style="padding-left:15px">
						<ul class="pagination">
					      <?php
					        $total_records = 0;
									if(!empty($pList)){
										foreach ($pList as $key) {
											if($key['seller_status']==1 && $key['product_status']==1 && $key['stock']>0){
												$total_records++;
											}
										}
									}
					        // Number of pages required.
					        $total_pages = ceil($total_records / $limit);
									$page = "";
					        for ($i=1; $i<=$total_pages; $i++) {
					          if ($i==$pn) {
											if($this->uri->segment(4)!=''){
												$page .= "<li class='active'><a href='".$this->uri->segment(4)."?page=".$i."'>".$i."</a></li>";
											}else{
												$page .= "<li class='active'><a href='?page=".$i."'>".$i."</a></li>";
											}
												// $pagLink .= "<li class='active'><a href='".$pagLink4."/index.php?page=".$i."'>".$i."</a></li>";
					          }
					          else  {
											if($this->uri->segment(4)!=''){
												$page .= "<li class=''><a href='".$this->uri->segment(4)."?page=".$i."'>".$i."</a></li>";
											}else{
												$page .= "<li class=''><a href='?page=".$i."'>".$i."</a></li>";
											}
					              //$pagLink .= "<li><a href='index.php?page=".$i."'>".$i."</a></li>";
					          }
					        };
					        echo $page;
					      ?>
					</ul>
					</div>
					<?php
					//print_r($pList);
          if(!empty($data)){
            foreach ($data as $row) {
              if($row['stock']>0 && $row['seller_status']==1 && $row['product_status']==1){
								$info = pathinfo( $row['image_file'] );
				        $no_extension =  basename( $row['image_file'], '.'.$info['extension'] );
				        $thumb_image = $no_extension.'_thumb.'.$info['extension'];
              ?>
              <div class="col-md-3 col-sm-6 col-xs-6">
								<a href="<?php echo base_url('catalog/product_detail') ?>/<?php echo $row['product_id'].'/1'; ?>">
								<div class="content product product-single">
			              <div class="product-thumb">
			                <div class="content-overlay"></div>
			                <div class="quarter-circle-bottom-left" style="font-size:80%;text-align:center;"><?php if($row['weight']>=1000){ $n_weight=$row['weight']/1000; echo $n_weight.' kg';}else{ echo number_format($row['weight'],0).'g';} ?></div>
			                <?php
			                if($row['discount']!=null){
			                  ?><div class="discount-label red"> <span>-<?php echo $row['discount'].'%' ?></span> </div><?php
			                }
			                if($row['top_product']!=null){
			                  ?><div class="discount-label-2 yellow"> <span>TOP!</span> </div><?php
			                }
			                if($row['new_product']!=null)
			                {
			                  ?><div class="discount-label-3 black"> <span>NEW!</span> </div><?php
			                }
			                ?>
			                <img style="border:1px solid #e7e4e4;padding-left:1px;padding-right:1px;padding-top:1px;padding-bottom:1px;" class="content-image img-fluid d-block mx-auto" src="<?php echo base_url().'images/thumbnail/'.$thumb_image; ?>" alt="">
			                <div class="content-details fadeIn-bottom">
			                 <div class="bottom d-flex align-items-center justify-content-center">
			                   <?php
			                   $nuprice=0;$price_after_tax=0;$clean_price=0;$price_1=0;

			                   ?>
			                   <p style="color:black">

			                     <?php
			                     if ($row['shop_image']) {

			                       $image_properties = array(
			                         'src'   => base_url().'logo_vendor/'.$row['shop_image'],
			                         'alt'   => $row['shop_name'],
			                         'class' => 'img-thumbnail',
			                         'width' => '30',
			                         'height'=> '30',
			                         'style'=>'border:0',
			                         'title' => $row['shop_name'],
			                       );
			                       echo img($image_properties);

			                     } else {

			                       $image_properties = array(
			                         'src'   => 'https://dummyimage.com/75x75/d6c7d6/9b9dad.jpg&text=No+Image',
			                         'alt'   => 'No image',
			                         'class' => 'img-thumbnail',
			                         'width' => '30',
			                         'height'=> '30',
			                         'style'=>'border:0',
			                         'title' => 'No image',
			                       );
			                       echo img($image_properties);
			                     }

			                     ?>
			                     <br><?php echo $row['shop_name'] ?><br>
			                     CODE : <?php echo $row['item_code']; ?><br>
			                     PRICE : RM <?php echo number_format($row['add_cost'],2);  ?><br>
			                     <!-- TAX :
			                       <?php
			                       $after_tax=$row['tax']*$row['add_cost'];
			                       echo $row['tax'] * 100;
			                       echo '% / RM '.number_format($after_tax,2);
			                       ?><br>
			                     SHIPPING : RM <?php echo number_format($row['shipping'],2); ?><br> -->
			                     <!-- <a href="<?php echo base_url('catalog/product_detail') ?>/<?php echo $row['product_id'].'/1'; ?>">View More</a> -->
			                   </p>
			                 </div>
			                </div>
			              </div>
			              <div class="product-body" align="right" style="height:190px">
			                <h4 class="product-price">
			                  <?php
			                    if($row['discount']!=null)
			                    {
			                      $clean_price=$row['add_cost']-($row['add_cost']*($row['discount']/100));
			                      echo "RM ".number_format($clean_price,2);
			                    }else{
			                      echo "RM ".number_format($row['add_cost'],2);
			                    }

			                   ?>
			                </h4>

			                <p class="product-name" style="color:black;">
			                  <a href="<?php echo base_url('catalog/product_detail') ?>/<?php echo $row['product_id'].'/1'; ?>"><?php echo $row['product_name'] ?></a>
			                  <?php //echo "<br>".$row->category_type; ?><br>
			                  <span class="text-danger">In Stock : <?php echo $row['stock'] ?></span>
			                </p>
			              </div>
			            </div>
                </a>
              </div>

              <?php
            }
            }
          }else{
            echo "<p class='text-center'>No Products Available</p>";
          }
           ?>
				</div>
				<!-- /MAIN -->
			</div>
			<!-- /row -->
