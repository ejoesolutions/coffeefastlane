<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <title>Coffee-Fastlane</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <meta content="System administrator" name="description" />
  <meta content="are.vie18@gmail.com" name="author" />

  <!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets'); ?>/layouts/layout_shop/css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets'); ?>/layouts/layout_shop/css/slick.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets'); ?>/layouts/layout_shop/css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets'); ?>/layouts/layout_shop/css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="<?php echo base_url('assets'); ?>/layouts/layout_shop/css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets'); ?>/layouts/layout_shop/css/style.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets'); ?>/layouts/layout_shop/css/style-display-product.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets'); ?>/layouts/layout_shop/css/badge_style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!-- [if lt IE 9]> -->
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<!-- <![endif] -->

    <!-- <link href="<?php echo base_url('assets/'); ?>global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" /> -->
    <link href="<?php echo base_url('assets/'); ?>global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <!-- <link href="<?php echo base_url('assets/'); ?>global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" /> -->
    <link href="<?php echo base_url('assets/'); ?>global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/'); ?>global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/'); ?>global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- <link href="<?php echo base_url('assets/'); ?>global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" /> -->
    <link href="<?php echo base_url('assets/'); ?>global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/'); ?>pages/css/login.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets'); ?>/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets'); ?>/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets'); ?>/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets'); ?>/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets'); ?>/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets'); ?>/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets'); ?>/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets'); ?>/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
    <!-- <link href="<?php echo base_url('assets'); ?>/layouts/layout/css/themes/darkblue.min.css?<?php echo date('YmdHis') ?>" rel="stylesheet" type="text/css" id="style_color" /> -->
    <link href="<?php echo base_url('assets'); ?>/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets'); ?>/layouts/layout_shop/css/pagingstyle.css" />
    <script src="<?php echo base_url('assets'); ?>/layouts/layout_shop/js/pagination.js" type="text/javascript"></script>

  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url('logo/'.$logo['image_file']); ?>">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url('logo/'.$logo['image_file']); ?>">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('logo/'.$logo['image_file']); ?>">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('logo/'.$logo['image_file']); ?>">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('logo/'.$logo['image_file']); ?>">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url('logo/'.$logo['image_file']); ?>">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url('logo/'.$logo['image_file']); ?>">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('logo/'.$logo['image_file']); ?>">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url('logo/'.$logo['image_file']); ?>">
  <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url('logo/'.$logo['image_file']); ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('logo/'.$logo['image_file']); ?>">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('logo/'.$logo['image_file']); ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('logo/'.$logo['image_file']); ?>">
  <!-- <link rel="manifest" href="<?php echo base_url('assets/logo'); ?>/manifest.json"> -->
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?php echo base_url('logo/'.$logo['image_file']); ?>">
  <meta name="theme-color" content="#ffffff">

  <!-- <link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico" /> -->

</head>
  <style>
    .someDiv {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
  </style>
<body>
  <?php
  if($this->ion_auth->logged_in()){
    if($user_profile['user_group']!=2){
      redirect('user/logout');
    }
  }
  ?>
	<!-- HEADER -->
	<header class="section-white">
		<!-- top Header -->
		<!--<div id="top-header">-->
		<!--	<div class="container">-->
		<!--		<div >-->
		<!--			<span>Welcome to G-shop!</span>-->
		<!--		</div>-->
		<!--		<div class="pull-right">-->
		<!--			 <ul class="header-top-links">-->
		<!--				<li><a href="#">Store</a></li>-->
		<!--				<li><a href="#">Newsletter</a></li>-->
		<!--				<li><a href="#">FAQ</a></li>-->
		<!--				<li class="dropdown default-dropdown">-->
		<!--					<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">ENG <i class="fa fa-caret-down"></i></a>-->
		<!--					<ul class="custom-menu">-->
		<!--						<li><a href="#">English (ENG)</a></li>-->
		<!--						<li><a href="#">Russian (Ru)</a></li>-->
		<!--						<li><a href="#">French (FR)</a></li>-->
		<!--						<li><a href="#">Spanish (Es)</a></li>-->
		<!--					</ul>-->
		<!--				</li>-->
		<!--				<li class="dropdown default-dropdown">-->
		<!--					<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">USD <i class="fa fa-caret-down"></i></a>-->
		<!--					<ul class="custom-menu">-->
		<!--						<li><a href="#">USD ($)</a></li>-->
		<!--						<li><a href="#">EUR (€)</a></li>-->
		<!--					</ul>-->
		<!--				</li>-->
		<!--			</ul>-->
		<!--		</div>-->
		<!--	</div>-->
		<!--</div>-->
		<!-- /top Header -->

		<!-- header -->
		<div id="header">
			<?php $this->load->view('includes/header') ?>
			<!-- header -->
		</div>
		<!-- container -->
	</header>
	<!-- /HEADER -->

	<!-- NAVIGATION -->
	<div id="navigation">
		<!-- container -->
		<div class="container">
			<div id="responsive-nav">
				<!-- category nav -->
				<!-- <?php $this->load->view('includes/category_nav') ?> -->
				<!-- /category nav -->

				<!-- menu nav -->
				<?php $this->load->view('includes/menu') ?>
				<!-- menu nav -->
			</div>
		</div>
		<!-- /container -->
	</div>
	<!-- /NAVIGATION -->

	<?php
    if($this->uri->segment(1)==''){
      ?>
      <!-- HOME -->
    	<div id="home" class="section section-red-dark">
    		<!-- container -->
    		<div class="container">
    			<!-- home wrap -->
    			<div class="">
    				<!-- home slick -->
    				<div id="home-slick">
    					<!-- banner -->
    						<?php $this->load->view('includes/banner') ?>
    					<!-- /banner -->

    				</div>
    				<!-- /home slick -->
    			</div>
    			<!-- /home wrap -->
    		</div>
    		<!-- /container -->
    	</div>
    	<!-- /HOME -->
      <?php
    }
   ?>



	<!-- section -->

	<!-- /section -->

	<!-- section -->
	<div class="section">
		<!-- container -->
    <div class="container">
			<!-- row -->
			<div class="modal fade bs-modal-xl" id="loginSeller" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
              <h4 class="modal-title">Login Seller Centre</h4>
            </div>
            <div class="modal-body">
              <?php echo form_open('seller/login',array('class'=>'form-horizontal')) ?>
              <div class="form-group">
                <div class="col-md-4">
                    <label class="control-label">Username/Email</label>
                </div>
                <div class="col-md-8">
                    <input class="form-control" type="text" name="identity" placeholder="Username/Email" required>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-4">
                    <label class="control-label">Password</label>
                </div>
                <div class="col-md-8">
                    <input class="form-control" type="password" name="password" placeholder="Password" required>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success">Login</button>
            </div>
            <?php echo form_close() ?>
          </div>
        </div>
      </div>

      <div class="modal fade bs-modal-xl" id="submitSeller" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
              <h4 class="modal-title">Create Shop</h4>
            </div>
            <div class="modal-body">
              <?php echo form_open('seller/create_shop',array('class'=>'form-horizontal')) ?>
              <div class="form-group">
                <div class="col-md-4">
                    <label class="control-label">Shop Name</label>
                </div>
                <div class="col-md-8">
                    <input class="form-control" type="text" name="shop_name" required>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-4">
                    <label class="control-label">Seller Type</label>
                </div>
                <div class="col-md-8">
                    <select name="seller_type" class="form-control" required>
                      <option value="">--Select--</option>
                      <option value="PERSONAL">Personal</option>
                      <option value="COMPANY">Company</option>
                    </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-4">
                    <label class="control-label">Bank Name</label>
                </div>
                <div class="col-md-8">
                    <input class="form-control" type="text" name="seller_bank" required>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-4">
                    <label class="control-label">Bank Account No.</label>
                </div>
                <div class="col-md-8">
                    <input class="form-control" type="text" name="seller_acc" required>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
            <?php echo form_close() ?>
          </div>
        </div>
      </div>
			<?php
      if($this->uri->segment(1)==''){
        $this->load->view('includes/products_main_page');
      }else{
        echo $contents;
      }

      ?>
			<!-- /row -->

		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

	<!-- FOOTER -->
	<?php $this->load->view('includes/footer') ?>
	<!-- /FOOTER -->

<!-- jQuery Plugins -->

	<script src="<?php echo base_url('assets'); ?>/layouts/layout_shop/js/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url('assets'); ?>/layouts/layout_shop/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url('assets'); ?>/layouts/layout_shop/js/slick.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url('assets'); ?>/layouts/layout_shop/js/nouislider.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url('assets'); ?>/layouts/layout_shop/js/jquery.zoom.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url('assets'); ?>/layouts/layout_shop/js/main.js" type="text/javascript"></script>

  <!-- BEGIN CORE PLUGINS -->
  <!--<script src="<?php echo base_url('assets'); ?>/global/plugins/jquery.min.js" type="text/javascript"></script>-->
  <!--<script src="<?php echo base_url('assets'); ?>/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>-->
  <script src="<?php echo base_url('assets'); ?>/global/plugins/js.cookie.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url('assets'); ?>/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
  <!-- END CORE PLUGINS -->

  <!-- BEGIN PAGE LEVEL PLUGINS -->
  <script src="<?php echo base_url('assets'); ?>/global/plugins/moment.min.js" type="text/javascript"></script>

  <script src="<?php echo base_url('assets'); ?>/global/scripts/datatable.js" type="text/javascript"></script>
  <script src="<?php echo base_url('assets'); ?>/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url('assets'); ?>/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>

  <script src="<?php echo base_url('assets'); ?>/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
  <!-- <script src="<?php echo base_url('assets'); ?>/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script> -->

  <script src="<?php echo base_url('assets'); ?>/global/plugins/morris/morris.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url('assets'); ?>/global/plugins/morris/raphael-min.js" type="text/javascript"></script>

  <script src="<?php echo base_url('assets'); ?>/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url('assets'); ?>/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>

  <script src="<?php echo base_url('assets'); ?>/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
  <script src="<?php echo base_url('assets'); ?>/global/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
  <script src="<?php echo base_url('assets'); ?>/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
  <script src="<?php echo base_url('assets'); ?>/global/plugins/amcharts/amcharts/radar.js" type="text/javascript"></script>
  <script src="<?php echo base_url('assets'); ?>/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"></script>
  <script src="<?php echo base_url('assets'); ?>/global/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>
  <script src="<?php echo base_url('assets'); ?>/global/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>
  <script src="<?php echo base_url('assets'); ?>/global/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>
  <script src="<?php echo base_url('assets'); ?>/global/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"></script>
  <script src="<?php echo base_url('assets'); ?>/global/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"></script>

  <script src="<?php echo base_url('assets'); ?>/global/plugins/bootstrap-summernote/summernote.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url('assets'); ?>/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>

  <script src="<?php echo base_url('assets'); ?>/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>

  <script src="<?php echo base_url('assets'); ?>/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>

  <script src="<?php echo base_url('assets'); ?>/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script>

  <script src="<?php echo base_url('assets'); ?>/global/plugins/plupload/js/plupload.full.min.js" type="text/javascript"></script>

  <!-- END PAGE LEVEL PLUGINS -->

  <!-- BEGIN THEME GLOBAL SCRIPTS -->
  <script src="<?php echo base_url('assets/'); ?>global/scripts/app.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/'); ?>js/ajax.js?<?php echo date('YmdHis') ?>" type="text/javascript"></script>
  <!-- END THEME GLOBAL SCRIPTS -->

  <!-- BEGIN PAGE LEVEL SCRIPTS -->
  <script src="<?php echo base_url('assets/'); ?>pages/scripts/table-datatables-responsive.min.js?<?php echo date('YdmHis') ?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/'); ?>pages/scripts/dashboard.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/'); ?>pages/scripts/components-editors.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/'); ?>pages/scripts/components-select2.min.js?<?php echo date('YmdHis') ?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/'); ?>pages/scripts/ecommerce-products-edit.min.js?<?php echo date('YmdHis') ?>" type="text/javascript"></script>
  <!-- END PAGE LEVEL SCRIPTS -->

  <!-- BEGIN THEME LAYOUT SCRIPTS -->
  <script src="<?php echo base_url('assets/'); ?>layouts/layout/scripts/layout.min.js?<?php echo date('YmdHis') ?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/'); ?>layouts/layout/scripts/demo.min.js?<?php echo date('YmdHis') ?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/'); ?>layouts/global/scripts/quick-sidebar.min.js?<?php echo date('YmdHis') ?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/'); ?>layouts/global/scripts/quick-nav.min.js?<?php echo date('YmdHis') ?>" type="text/javascript"></script>
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5d54b9cd4cd0540012f2052d&product=inline-share-buttons&cms=website' async='async'></script>

<script>
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }

  $(document).ready(function(){

      var limit = 12;
      var start = 0;
      var action = 'inactive';

      function lazzy_loader()
      {
        var output = '';
        //for(var count=0; count<limit; count++)
        //{
          output += '<div class="post_data">';
          output += '<p><span class="content-placeholder" style="width:100%; height: 20px;">&nbsp;</span></p>';
          //output += '<p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p>';
          output += '</div>';
        //}
        $('#load_data_message').html(output);
      }

      lazzy_loader();

      function load_data(limit, start)
      {
        $.ajax({
          url:"<?php echo base_url(); ?>admin/fetch_products",
          method:"POST",
          data:{limit:limit, start:start},
          cache: false,
          success:function(data)
          {
            if(data == '')
            {
              $('#load_data_message').html('<h4 align="center">No More Result Found</h4>');
              action = 'active';
            }
            else
            {
              $('#load_data').append(data);
              $('#load_data_message').html("");
              action = 'inactive';
            }
          }
        })
      }

      if(action == 'inactive')
      {
        action = 'active';
        load_data(limit, start);
      }

      $(window).scroll(function(){
        if($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive')
        {
          lazzy_loader();
          action = 'active';
          start = start + limit;
          setTimeout(function(){
            load_data(limit, start);
          }, 1000);
        }
      });
    });

    $(document).on('click', '.view_data',function(){
      //$('.view_data').click(function(){
        var weightcost_id=$(this).attr("id");
        $.ajax({
          url:"<?php echo base_url() ?>admin/get_weightcostID",
          method:"post",
          data:{weightcost_id:weightcost_id},
          success:function(data){
            $('#detail').html(data);
            $('#editWeight').modal("show");
          }
        });

      });




      $(document).on('click', '.view_data2',function(){
        //$('.view_data').click(function(){
          var address_id=$(this).attr("id");
          $.ajax({
            url:"<?php echo base_url() ?>customer/get_del_address",
            method:"post",
            data:{address_id:address_id},
            success:function(data){
              $('#del_address_detail').html(data);
              $('#delAddress').modal("show");
            }
          });

        });

        $(document).on('click', '.view_data3',function(){
          //$('.view_data').click(function(){
            var address_id=$(this).attr("id");
            $.ajax({
              url:"<?php echo base_url() ?>customer/set_pickup",
              method:"post",
              data:{address_id:address_id},
              success:function(data){
                location.reload();
              }
            });

          });



              $(document).on('click', '.view_banner',function(){
                //$('.view_data').click(function(){
                  var banner_id=$(this).attr("id");
                  $.ajax({
                    url:"<?php echo base_url() ?>admin/get_bannerID",
                    method:"post",
                    data:{banner_id:banner_id},
                    success:function(data){
                      $('#detail_banner').html(data);
                      $('#editBanner').modal("show");
                    }
                  });

                });



                  $(function() {
                    $('#seller_id').on('change', function(){
                      var seller_id = $('#seller_id').val();
                        $.ajax({
                          url: '<?php echo base_url() ?>catalog/get_product_vendor',
                          type: 'POST',
                          data: { seller_id:seller_id },
                          success : function(data){
                            $('#sub_form_vendor').html(data).slideDown('slow');
                          }
                        });
                    });
                  });

                  $(document).on('click', '.upd_category',function(){
                    //$('.view_data').click(function(){
                      var cat_id=$(this).attr("id");
                      $.ajax({
                        url:"<?php echo base_url() ?>catalog/get_category",
                        method:"post",
                        data:{category_id:cat_id},
                        success:function(data){
                          $('#detail_category').html(data);
                          $('#editCategory').modal("show");
                        }
                      });
                    });

                    $(document).on('click', '.upd_verify',function(){
                     //$('.view_data').click(function(){
                       var seller_id=$(this).attr("id");
                       $.ajax({
                         url:"<?php echo base_url() ?>seller/verify",
                         method:"post",
                         data:{seller_id:seller_id},
                         success:function(data){
                           $('#detail_seller').html(data);
                           $('#verifySeller').modal("show");
                         }
                       });
                     });



  });
  </script>

</body>
</html>
