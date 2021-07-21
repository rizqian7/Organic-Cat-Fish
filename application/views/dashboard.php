<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?php echo base_url() ?>assets/images/logo.png" type="image/ico" />

  <title>Organik Bioflok Solution |</title>

  <!-- Bootstrap -->
  <link href="<?php echo base_url() ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="<?php echo base_url() ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="<?php echo base_url() ?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="<?php echo base_url() ?>assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

  <!-- bootstrap-progressbar -->
  <link href="<?php echo base_url() ?>assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
  <!-- JQVMap -->
  <link href="<?php echo base_url() ?>assets/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
  <!-- bootstrap-daterangepicker -->
  <link href="<?php echo base_url() ?>assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="<?php echo base_url() ?>assets/build/css/custom.min.css" rel="stylesheet">
</head>
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">


          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="<?php echo base_url() ?>assets/images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>Administrator</h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li>
                  <a href="<?php echo site_url('AdminController'); ?>">
                    <i class="fa fa-home">
                    </i> 
                    <span>Dashboard
                    </span>
                  </a>
                </li>
                <li><a><i class="fa fa-truck"></i> Distribusi <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li>
                      <a href="<?php echo site_url('PanenController/viewPanen'); ?>">
                        <i class="fa fa-truck">
                        </i> 
                        <span>Panen
                        </span>
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo site_url('PemesananController/viewPemesanan'); ?>">
                        <i class="fa fa-truck">
                        </i> 
                        <span>Pemesanan
                        </span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-group"></i> Pengguna <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li>
                      <a href="<?php echo site_url('PeternakLeleController/viewPeternakLele'); ?>">
                        <i class="fa fa-group">
                        </i> 
                        <span>Peternak Lele
                        </span>
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo site_url('RumahMakanController/viewRumahMakan'); ?>">
                        <i class="fa fa-group">
                        </i> 
                        <span>Rumah Makan
                        </span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="<?php echo site_url('DriverController/viewDriver'); ?>">
                    <i class="fa fa-cab">
                    </i> 
                    <span>Driver
                    </span>
                  </a>
                </li>
                <li><a><i class="fa fa-bar-chart-o"></i> Grafik <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li>
                      <a href="<?php echo site_url('AdminController/viewGraphicPanen'); ?>">
                        <i class="fa fa-bar-chart-o">
                        </i> 
                        <span>Panen Ikan Lele
                        </span>
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo site_url('AdminController/viewGraphicPesanan'); ?>">
                        <i class="fa fa-bar-chart-o">
                        </i> 
                        <span>Pesanan Ikan Lele
                        </span>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <!-- /sidebar menu -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <nav>
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  Administrator
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a href="<?php echo base_url('LoginController/logout') ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        <!-- top tiles -->
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Dashboard</h3>
            </div>

            <div class="title_right">
              <div class="col-md-3 col-sm-3 col-xs-3 form-group pull-right">
                <a class="btn btn-primary" href="<?php echo site_url('AdminController/viewHargaIkan'); ?>" role="button">Ubah Harga Ikan</a>
              </div>
            </div>
          </div>

          <div class="x_content">

          </div>

          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12">
              <div class="">
                <div class="x_content">
                  <div class="row">
                    <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
                      <div class="tile-stats">
                        <div class="icon"><i class="fa fa-group"></i>
                        </div>
                        <div class="count">
                          <?php echo $jumPeternakLele ?>
                        </div>
                        <h3>Peternak Lele</h3>
                        <p>Jumlah Pengguna Peternak Lele.</p>
                      </div>
                    </div>
                    <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
                      <div class="tile-stats">
                        <div class="icon"><i class="fa fa-cutlery"></i>
                        </div>
                        <div class="count">
                          <?php echo $jumRumahMakan ?>
                        </div>
                        <h3>Rumah Makan</h3>
                        <p>Jumlah Pengguna Rumah Makan.</p>
                      </div>
                    </div>
                    <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
                      <div class="tile-stats">
                        <div class="icon"><i class="fa fa-truck"></i>
                        </div>
                        <div class="count">
                          <?php echo $jumDriver ?>
                        </div>
                        <h3>Driver</h3>
                        <p>Jumlah Pengguna Driver.</p>
                      </div>
                    </div>
                    <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
                      <div class="tile-stats">
                        <div class="icon"><i class="fa fa-usd"></i>
                        </div>
                        <div class="count">
                          <?php $harga_beli = "Rp. ".number_format($hargaBeli,0,',','.'); ?>
                          <?php echo $harga_beli;?>
                        </div>
                        <h3>Harga Beli</h3>
                        <p>Harga Beli Ikan Lele.</p>
                      </div>
                    </div>
                    <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
                      <div class="tile-stats">
                        <div class="icon"><i class="fa fa-usd"></i>
                        </div>
                        <div class="count">
                          <?php $harga_jual = "Rp. ".number_format($hargaJual,0,',','.'); ?>
                          <?php echo $harga_jual;?>
                        </div>
                        <h3>Harga Jual</h3>
                        <p>Harga Jual Ikan Lele.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Harga Ikan -->
            
            <!-- Harga Ikan -->
          </div>
        </div>
        <!-- /top tiles -->        
      </div>
      <!-- /page content -->

      <!-- footer content -->
      <footer>
        <div class="pull-right">
          <strong>Copyright &copy; 2021 
            <a>Sistem Informasi Distribusi Ikan Lele
            </a>
          </strong> 
        </div>
        <div class="clearfix"></div>
      </footer>
      <!-- /footer content -->
    </div>
  </div>

  <!-- jQuery -->
  <script src="<?php echo base_url() ?>assets/vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?php echo base_url() ?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url() ?>assets/vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="<?php echo base_url() ?>assets/vendors/nprogress/nprogress.js"></script>
  <!-- Chart.js -->
  <script src="<?php echo base_url() ?>assets/vendors/Chart.js/dist/Chart.min.js"></script>
  <!-- gauge.js -->
  <script src="<?php echo base_url() ?>assets/vendors/gauge.js/dist/gauge.min.js"></script>
  <!-- bootstrap-progressbar -->
  <script src="<?php echo base_url() ?>assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
  <!-- iCheck -->
  <script src="<?php echo base_url() ?>assets/vendors/iCheck/icheck.min.js"></script>
  <!-- Skycons -->
  <script src="<?php echo base_url() ?>assets/vendors/skycons/skycons.js"></script>
  <!-- Flot -->
  <script src="<?php echo base_url() ?>assets/vendors/Flot/jquery.flot.js"></script>
  <script src="<?php echo base_url() ?>assets/vendors/Flot/jquery.flot.pie.js"></script>
  <script src="<?php echo base_url() ?>assets/vendors/Flot/jquery.flot.time.js"></script>
  <script src="<?php echo base_url() ?>assets/vendors/Flot/jquery.flot.stack.js"></script>
  <script src="<?php echo base_url() ?>assets/vendors/Flot/jquery.flot.resize.js"></script>
  <!-- Flot plugins -->
  <script src="<?php echo base_url() ?>assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
  <script src="<?php echo base_url() ?>assets/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendors/flot.curvedlines/curvedLines.js"></script>
  <!-- DateJS -->
  <script src="<?php echo base_url() ?>assets/vendors/DateJS/build/date.js"></script>
  <!-- JQVMap -->
  <script src="<?php echo base_url() ?>assets/vendors/jqvmap/dist/jquery.vmap.js"></script>
  <script src="<?php echo base_url() ?>assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="<?php echo base_url() ?>assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
  <!-- bootstrap-daterangepicker -->
  <script src="<?php echo base_url() ?>assets/vendors/moment/min/moment.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

  <!-- Custom Theme Scripts -->
  <script src="<?php echo base_url() ?>assets/build/js/custom.min.js"></script>
</body>
</html>
