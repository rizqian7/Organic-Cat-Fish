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
                <li><!-- 
                  <a href="<?php echo site_url('MonitoringController'); ?>">
                    <i class="fa fa-television">
                    </i> 
                    <span>Monitoring
                    </span>
                  </a>
                </li> -->
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