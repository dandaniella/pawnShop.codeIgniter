<body data-sidebar="dark">

  <!-- <body data-layout="horizontal" data-topbar="dark"> -->
  <!-- Begin page -->
  <div id="layout-wrapper">
    <header id="page-topbar" style="height:90px; background-color:#FFC835;">
      <div class="navbar-header d-felx align-items-stretch h-100 ">
        <div class="d-flex align-items-stretch">
          <!-- LOGO -->
          <div class="navbar-brand-box h-100 " style="background-color:#FFC835; padding: 0 0 0 2rem;">


            <!-- <a href="index.html" class="logo logo-light h-100 " style="line-height: 100px;">
              <span class="logo-sm">
                <img src="<?php echo base_url('assets') ?>/images/loggo1.jpg" alt="" height="22">
              </span>
              <span class="logo-lg">
                <img src="<?php echo base_url('assets') ?>/images/loggo1.jpg" alt="" height="50">
              </span>
              <span class="logo-lg ">
                <img src="<?php echo base_url('assets') ?>/images/w_epawn.png" alt="" height="40
                ">
              </span>
            </a> -->
          </div>

          <!-- <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect h-100" id="vertical-menu-btn">
            <i class="fa fa-fw fa-bars"></i>
          </button> -->
          <div class="navbar-brand-box h-100 " style="background-color:#FFC835;
   padding: 0 0 0 2rem;">
            <a href="index.html" class="logo logo-dark h-100" style="line-height: 100px;">
              <span class="logo-sm">
                <img src="<?php echo base_url('assets') ?>/images/loggo1.jpg" alt="" height="33">
              </span>
              <span class="logo-lg">
                <img src="<?php echo base_url('assets') ?>/images/epawn.png" alt="" height="17">
              </span>
            </a>

            <a href="index.html" class="logo logo-light h-100 " style="line-height: 100px;">
              <span class="logo-sm">
                <img src="<?php echo base_url('assets') ?>/images/loggo1.jpg" alt="" height="50">
              </span>
              <span class="logo-lg">
                <img src="<?php echo base_url('assets') ?>/images/loggo1.jpg" alt="" height="50">
              </span>
              <span class="logo-lg ">
                <img src="<?php echo base_url('assets') ?>/images/w_epawn.png" alt="" height="40
                ">
              </span>
            </a>
          </div>


        </div>


        <div class="d-flex ">

          <div class="dropdown d-inline-block" style="margin-right:10vh;">
            <button type="button" class="btn header-item waves-effect h-100" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <!-- <img class="rounded-circle header-profile-user" src="<?php echo base_url('assets') ?>/images/users/avatar-1.jpg" alt="Header Avatar"> -->
              <i class="fas fa-user-circle" style="font-size: 2em;"></i>
              <span class="d-none d-xl-inline-block ms-1 " key="t-henry"><?php echo $this->session->userdata('USER_NAME') ?></span>
              <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end">
              <!-- item-->
              <a class="dropdown-item h-100" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-danger" href="../"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
            </div>
          </div>

        </div>

      </div>
    </header>