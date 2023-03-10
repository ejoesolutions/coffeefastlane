<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>COFFEE-FASTLANE.COM - MONTHLY SALES REPORT</title>

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <style>
  body{
    font-size:12px;
  }
  .invoice-box{
    max-width:800px;
    margin:auto;
    padding:30px;
    border:1px solid #eee;
    line-height:24px;
    font-family:'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    color:#555;

  }

  .invoice-box table{
    width:100%;
    line-height:inherit;
    text-align:left;
    height: 100%;
  }

  .invoice-box table td{
    padding:5px;
    vertical-align:top;
  }

  .invoice-box table tr td:nth-child(2){
    text-align:right;
  }

  .text-center {
    padding: 15px;
    text-align: center;
  }
  .invoice-box table tr.top table td{
    padding-bottom:20px;
  }

  .invoice-box table tr.top table td.title{
    font-size:35px;
    line-height:35px;
    color:#333;
  }

  .invoice-box table tr.information table td{
    padding-bottom:40px;
  }

  .invoice-box table tr.heading td{
    background:#eee;
    border-bottom:1px solid #ddd;
    font-weight:bold;
  }

  .invoice-box table tr.details td{
    padding-bottom:20px;
  }

  .invoice-box table tr.item td{
    border-bottom:1px solid #eee;
  }

  .invoice-box table tr.item.last td{
    border-bottom:none;
  }

  .invoice-box table tr.total td:nth-child(2){
    border-top:2px solid #eee;
    font-weight:bold;
  }

  @media only screen and (max-width: 600px) {
    .invoice-box table tr.top table td{
      width:100%;
      display:block;
      text-align:center;
    }

    .invoice-box table tr.information table td{
      width:100%;
      display:block;
      text-align:center;
    }
  }
  </style>
</head>
<body>
  <div class="">
          <!-- <table  class="table table-bordered">
            <tr>
              <td colspan="4" align="center"> -->
                <table width="100%">
                  <tr>
                   <?php
                   echo "<td align='center'><h4>COFFEE-FASTLANE.COM</h4></td>";
                    ?>
					     	 </tr>
                 <tr>
                  <?php
                  echo "<td align='center'><h5>Monthly Sales Report ".$b." ".$t."</h5></td>";
                   ?>
                </tr>
                </table>
                <br>
                <table border="1" bordercolor="#666666" width="100%" cellpadding="4" style="border-collapse:collapse">
      						<tr bgcolor="#CCCCCC" class="style5">
                    <th width="10px" class="text-center">No.</th>
                    <th class="text-center">Seller</th>
                    <th class="text-center">Product</th>
                    <th class="text-center">Product Type</th>
                    <th class="text-center">Weight (g)</th>
                    <th class="text-center">Total Qty</th>
                    <th class="text-center">Total Sales (RM)</th>
      						</tr>
                  <tbody>
                    <?php
                    $n=1;
                    if(!empty($all_report)){

                      foreach ($all_report as $key) {
                        $temp_product[]=array('product_id' => $key['product_id']);
                      }
                      $arr_product2=array_unique($temp_product,SORT_REGULAR);
                      $arr_product=array_values($arr_product2);

                      for($i=0;$i<count($arr_product);$i++){
                        $total_qty=0;$total_sale=0;$total_modal=0;
                        for($j=0;$j<count($all_report);$j++){
                          if($arr_product[$i]['product_id']==$all_report[$j]['product_id']){
                            $total_qty+=$all_report[$j]['qty'];
                            $total_sale+=$all_report[$j]['sale_price'];
                            $total_modal+=$all_report[$j]['modal_price2'];
                            $product_id=$all_report[$j]['product_id'];
                            $product_name=$all_report[$j]['product_name'];
                            $item_code=$all_report[$j]['item_code'];
                            $seller_id=$all_report[$j]['seller_id'];
                            $shop_name=$all_report[$j]['shop_name'];
                            $seller_status=$all_report[$j]['seller_status'];
                            $category_id=$all_report[$j]['category_id'];
                            $category_type=$all_report[$j]['category_type'];
                            $weight=$all_report[$j]['weight'];
                          }
                        }
                        $arr_sale[]=array(
                          'product_id'=>$product_id,
                          'product_name'=>$product_name,
                          'item_code'=>$item_code,
                          'seller_id'=>$seller_id,
                          'shop_name'=>$shop_name,
                          'seller_status'=>$seller_status,
                          'category_id'=>$category_id,
                          'category_type'=>$category_type,
                          'weight'=>$weight,
                          'total_qty_sale'=>$total_qty,
                          'total_sale'=>$total_sale,
                          'total_modal'=>$total_modal,
                          'total_rev'=>$total_sale-$total_modal,
                        );
                      }

                      foreach ($arr_sale as $k1) {
                        if($user_profile['user_group']==2){
                          if($k1['seller_id']==$shop['seller_id']){
                            $temp_sale[]=$k1['shop_name'];
                          }
                        }else{
                          $temp_sale[]=$k1['shop_name'];
                        }
                      }
                      $new_arr_sale=array_values(array_unique($temp_sale));
                      //print_r($new_arr_sale);


                        foreach ($new_arr_sale as $key) {
                          ?>
                          <tr>
                            <td><?php echo $n++; ?></td>
                            <td><?php echo $key; ?></td>
                            <td><?php
                            foreach ($arr_sale as $k) {
                              if($key==$k['shop_name'])
                              {
                                echo $k['product_name'].'<br><br>';
                              }
                            }
                            ?></td>
                            <td><?php
                            foreach ($arr_sale as $k) {
                              if($key==$k['shop_name'])
                              {
                                echo $k['category_type'].'<br><br>';
                              }
                            }
                            ?></td>
                            <td class="text-center"><?php
                            foreach ($arr_sale as $k) {
                              if($key==$k['shop_name'])
                              {
                                echo number_format($k['weight'],2).'<br><br>';
                              }
                            }
                            ?></td>
                            <td class="text-center"><?php
                            foreach ($arr_sale as $k) {
                              if($key==$k['shop_name'])
                              {
                                echo $k['total_qty_sale'].'<br><br>';
                              }
                            }
                            ?></td>
                            <td class="text-center"><?php
                            $total_grand=0;
                            foreach ($arr_sale as $k) {
                              if($key==$k['shop_name'])
                              {
                                echo number_format($k['total_sale'],2).'<br><br>';
                              }

                              if($user_profile['user_group']==2){
                                if($shop['seller_id']==$k['seller_id']){
                                  $total_grand+=$k['total_sale'];
                                }
                              }else{
                                $total_grand+=$k['total_sale'];
                              }
                            }
                            ?></td>
                          </tr>
                          <?php

                        }
                      }
                     ?>
                     <tr>
                       <td colspan="7" align="right"><b>Total monthly sales = RM <?php echo number_format($total_grand,2) ?></b></td>
                     </tr>
                  </tbody>
              </table>
        </div>
      </body>
      </html>
