<body data-sidebar="light">

  <!-- <body data-layout="horizontal" data-topbar="dark"> -->
  <!-- Begin page -->
  <div id="layout-wrapper">
    <header id="page-topbar">
      <div class="navbar-header">
        <div class="d-flex">
          <!-- LOGO -->
          <div class="navbar-brand-box">
            <a href="index.html" class="logo ">
              <span class="logo-sm">
                <img src="<?php echo base_url('assets') ?>/images/loggo1.jpg" alt="" height="35">
              </span>
              <span class="logo-lg">
                <!-- <img src="<?php echo base_url('assets') ?>/images/loggo1.jpg" alt="" height="50"> -->
                <img src="<?php echo base_url('assets') ?>/images/epawn.png" alt="" height="50">
              </span>
            </a>

            <a href="index.html" class="logo logo-light">
              <span class="logo-sm">
                <img src="<?php echo base_url('assets') ?>/images/loggo1.jpg" alt="" height="22">
              </span>
              <span class="logo-lg">
                <img src="<?php echo base_url('assets') ?>/images/loggo1.jpg" alt="" height="40">
              </span>
            </a>
          </div>

          <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
            <i class="fa fa-fw fa-bars"></i>
          </button>
        </div>


        <div class="d-flex">

          <div class="dropdown d-inline-block">
            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <!-- <img class="rounded-circle header-profile-user" src="<?php echo base_url('assets') ?>/images/users/avatar-1.jpg" alt="Header Avatar"> -->
              <i class="fas fa-user-circle"></i>
              <span class="d-none d-xl-inline-block ms-1" key="t-henry"><?php echo $this->session->userdata('USER_NAME') ?></span>
              <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end">
              <!-- item-->
              <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-danger" href="../"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
            </div>
          </div>

          <div class="dropdown d-inline-block">
            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
              <i class="bx bx-cog bx-spin"></i>
            </button>
          </div>

        </div>
      </div>
    </header>


    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">

      <div data-simplebar class="h-100" style="background-color: #F2ECCE;">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
          <!-- Left Menu Start -->
          <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title" key="t-menu">Menu</li>
            <!-- far fa-window-minimize -->
            <li>
              <a href="<?php echo base_url('SystemSetup/dashboard') ?>" class="waves-effect">
                <i class="bx bx-home-circle"></i>
                <span key="t-dashboards">Dashboards</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url('SystemSetup/employee') ?>" class="waves-effect">
                <i class="bx bx-home-circle"></i>
                <span key="t-dashboards">Employee</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url('SystemSetup/client') ?>" class="waves-effect">
                <i class="bx bx-home-circle"></i>
                <span key="t-dashboards">Client</span>
              </a>
            </li>
            <li>
              <a href="<?php echo base_url('SystemSetup/transactions') ?>" class="waves-effect">
                <i class="bx bx-home-circle"></i>
                <span key="t-dashboards">Transactions</span>
              </a>
            </li>
            <li>
              <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="bx bx-layout"></i>
                <span key="t-layouts">Items </span>
              </a>
              <ul class="sub-menu" aria-expanded="true">
                <li>
                  <a href="javascript: void(0);" class="waves-effect">
                    <i class="bx bx-home-circle"></i>
                    <span key="t-dashboards">Pawned Items</span>
                  </a>
                </li>
                <li>
                  <a href="javascript: void(0);" class="waves-effect">
                    <i class="bx bx-home-circle"></i>
                    <span key="t-dashboards">Items</span>
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="bx bx-layout"></i>
                <span key="t-layouts">Pawn </span>
              </a>
              <ul class="sub-menu" aria-expanded="true">
                <li>
                  <a href="javascript: void(0);" class="waves-effect">
                    <i class="bx bx-home-circle"></i>
                    <span key="t-dashboards">Contracts</span>
                  </a>
                </li>
                <li>
                  <a href="javascript: void(0);" class="waves-effect">
                    <i class="bx bx-home-circle"></i>
                    <span key="t-dashboards">Pawn accounts</span>
                  </a>
                </li>
                <li>
                  <a href="javascript: void(0);" class="waves-effect">
                    <i class="bx bx-home-circle"></i>
                    <span key="t-dashboards">Pawned Items</span>
                  </a>
                </li>
              </ul>
            </li>

            <!-- SYSTEM SETUPS -->
            <li class="menu-title" key="t-apps">System Setups</li>
            <!-- User -->
            <li>
              <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="fas fa-minus"></i>
                <span key="t-layouts">User Setups </span>
              </a>
              <ul class="sub-menu" aria-expanded="true">
                <li>
                  <a href="javascript: void(0);" class="has-arrow" key="t-vertical">

                    <i class="fas fa-minus"></i>
                    <span key="t-layouts">User Credentials </span></a>
                  <ul class="sub-menu" aria-expanded="true">
                    <li><a href="layouts-horizontal.html" key="t-horizontal">Employee</a></li>
                    <li><a href="layouts-hori-topbar-light.html" key="t-topbar-light">Client</a></li>
                  </ul>
                </li>
                <li>
                  <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="fas fa-minus"></i>
                    <span key="t-layouts">User Information</span>
                  </a>
                  <ul class="sub-menu" aria-expanded="true">

                    <li><a href="layouts-horizontal.html" key="t-horizontal">Employee</a></li>
                    <li><a href="layouts-hori-topbar-light.html" key="t-topbar-light">Client</a></li>
                  </ul>
                </li>
              </ul>
            </li>


            <!-- Items -->
            <li>
              <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="fas fa-minus"></i>
                <span key="t-layouts">Items</span>
              </a>
              <ul class="sub-menu" aria-expanded="true">
                <li>
                  <a href="javascript: void(0);" class="has-arrow" key="t-vertical">

                    <i class="fas fa-minus"></i>
                    <span key="t-layouts">Item Category</span></a>
                </li>
                <li>
                  <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="fas fa-minus"></i>
                    <span key="t-layouts">Item Details</span>
                  </a>
                </li>
              </ul>
            </li>


            <!-- Contract -->
            <li>
              <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="fas fa-minus"></i>
                <span key="t-layouts">Contract</span>
              </a>
              <ul class="sub-menu" aria-expanded="true">
                <li>
                  <a href="javascript: void(0);" class="has-arrow" key="t-vertical">

                    <i class="fas fa-minus"></i>
                    <span key="t-layouts">Contract Category</span></a>
                </li>
                <li>
                  <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="fas fa-minus"></i>
                    <span key="t-layouts">Contract Details</span>
                  </a>
                </li>
              </ul>
            </li>

          </ul>
        </div>
        <!-- Sidebar -->
      </div>
    </div>
    <!-- Left Sidebar End -->