<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <title>Coffee-Fastlane</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <meta content="System administrator" name="description" />
  <meta content="are.vie18@gmail.com" name="author" />

  <!-- BEGIN GLOBAL MANDATORY STYLES -->
  <!-- <link href="https://fonts.google.com/specimen/Roboto?selection.family=Lato|Roboto" rel="stylesheet" type="text/css" /> -->
  <link href="<?php echo base_url('assets'); ?>/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url('assets'); ?>/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url('assets'); ?>/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url('assets'); ?>/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
  <!-- END GLOBAL MANDATORY STYLES -->

  <!-- BEGIN PAGE LEVEL PLUGINS -->
  <link href="<?php echo base_url('assets'); ?>/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url('assets'); ?>/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />

  <link href="<?php echo base_url('assets'); ?>/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />

  <link href="<?php echo base_url('assets'); ?>/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url('assets'); ?>/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url('assets'); ?>/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />

  <link href="<?php echo base_url('assets'); ?>/global/plugins/bootstrap-summernote/summernote.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url('assets'); ?>/pages/css/profile.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url('assets'); ?>/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url('assets'); ?>/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />

  <link href="<?php echo base_url('assets'); ?>/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url('assets'); ?>/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url('assets'); ?>/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css" />

  <!-- END PAGE LEVEL PLUGINS -->


  <!-- BEGIN THEME GLOBAL STYLES -->
  <link href="<?php echo base_url('assets'); ?>/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
  <link href="<?php echo base_url('assets'); ?>/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
  <!-- END THEME GLOBAL STYLES -->

  <!-- BEGIN THEME LAYOUT STYLES -->
  <link href="<?php echo base_url('assets'); ?>/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url('assets'); ?>/layouts/layout/css/themes/darkblue.min.css?<?php echo date('YmdHis') ?>" rel="stylesheet" type="text/css" id="style_color" />
  <link href="<?php echo base_url('assets'); ?>/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
  <!-- END THEME LAYOUT STYLES -->


  <!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
  <!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
  <!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
  <!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
  <!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
  <!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
  <!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
  <!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
  <!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
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
  <link rel="manifest" href="<?php echo base_url('assets/logo'); ?>/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?php echo base_url('logo/'.$logo['image_file']); ?>">
  <meta name="theme-color" content="#ffffff">

  <!-- <link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico" /> -->
</head>

<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white ">
  <div class="page-wrapper">
    <div class="page-header navbar navbar-fixed-top">
      <div class="page-header-inner">
        <div class="page-logo">
          <a href="<?php echo site_url(); ?>">
            <h4 class="logo-default">Coffee-Fastlane</h4>
            <!-- <img src="<?php echo base_url('assets/'); ?>layouts/layout/img/logo.png?<?php echo date('YdmHms') ?>" alt="logo" class="logo-default" /> -->
          </a>
          <div class="menu-toggler sidebar-toggler">
            <span></span>
          </div>
        </div>

        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
          <span></span>
        </a>

        <div class="top-menu">
          <?php
          if($this->ion_auth->logged_in()){
            if($user_profile['user_group']==2 && $shop['seller_status']!=1){
              redirect('customer/logout');
            }
          }
          ?>
          <?php $this->load->view('includes/top_menu') ?>
        </div>
      </div>
    </div>
    <div class="clearfix"> </div>
    <div class="page-container">
      <div class="page-sidebar-wrapper">

        <div class="page-sidebar navbar-collapse collapse">

          <ul class="page-sidebar-menu  page-header-fixed" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="250" style="padding-top: 20px">

            <li class="sidebar-toggler-wrapper hide">
              <div class="sidebar-toggler">
                <span></span>
              </div>
            </li>

            <?php $this->load->view('includes/side_menu') ?>

          </ul>
        </div>
      </div>
      <div class="page-content-wrapper">
        <div class="page-content">
          <?php echo $contents ?>
        </div>
      </div>
    </div>
    <div class="page-footer">
      <div class="page-footer-inner">
        <?php echo '2019' ?> &copy; <a href="<?php echo base_url(); ?>">Coffee-Fastlane</a>

      </div>
      <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
      </div>
    </div>
  </div>
  <!--[if lt IE 9]>
  <script src="<?php echo base_url('assets'); ?>/global/plugins/respond.min.js"></script>
  <script src="<?php echo base_url('assets'); ?>/global/plugins/excanvas.min.js"></script>
  <script src="<?php echo base_url('assets'); ?>/global/plugins/ie8.fix.min.js"></script>
  <![endif]-->

  <!-- BEGIN CORE PLUGINS -->
  <script src="<?php echo base_url('assets'); ?>/global/plugins/jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url('assets'); ?>/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
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
  <!-- END THEME LAYOUT SCRIPTS -->
  <script>
  $(document).ready(function()
  {
    $('#clickmewow').click(function()
    {
      $('#radio1003').attr('checked', 'checked');
    });
  })

  $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
  });

  $(document).ready(function(){

    // Choosing right form for item configuration
    $(function() {
      $('#category_type').on('change', function(){
        var cat_id = $('#category_type').val();
          $.ajax({
            url: '<?php echo base_url() ?>catalog/get_form_for_metal/',
            type: 'POST',
            data: { category_id:cat_id },
            success : function(data){
              $('#sub_form_view').html(data).slideDown('slow');
            }
          });
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
                     
                     $(document).on('click','a[data-role=verify_pending]', function(){
                       //alert($(this).data('id'));

                       var order_id  = $(this).data('id');
                       var user_id  = $(this).data('uid');

                        $('#order_id').val(order_id);
                        $('#user_id').val(user_id);
                       $('#dataModal').modal("toggle");
                     });



  });

  </script>
</body>

</html>
