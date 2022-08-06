<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8" />
  <title>Coming Soon | Skote - Admin & Dashboard Template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
  <meta content="Themesbrand" name="author" />


  <!-- Calendar -->

  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/libs/tui-time-picker/tui-time-picker.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/libs/tui-date-picker/tui-date-picker.min.css">
  <link href="<?php echo base_url('assets') ?>/libs/tui-calendar/tui-calendar.min.css" rel="stylesheet" type="text/css" />
  <script src="<?php echo base_url('assets') ?>/js/city.js"></script>
  <!-- Select -->
  <link href="<?php echo base_url('assets') ?>/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />


  <!-- Date -->
  <link href="<?php echo base_url('assets') ?>/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css">

  <!-- App favicon -->
  <link rel="shortcut icon" href="<?php echo base_url('assets') ?>/images/favicon.ico">
  <!-- ION Slider -->
  <link href="<?php echo base_url('assets') ?>/libs/ion-rangeslider/css/ion.rangeSlider.min.css" rel="stylesheet" type="text/css" />
  <!-- Bootstrap Css -->
  <link href="<?php echo base_url('assets') ?>/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
  <!-- Icons Css -->
  <link href="<?php echo base_url('assets') ?>/css/icons.min.css" rel="stylesheet" type="text/css" />
  <!-- App Css-->
  <link href="<?php echo base_url('assets') ?>/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url('assets') ?>/css/custom.css" rel="stylesheet" type="text/css" />



  <script>
    window.onload = function() {

      // ---------------
      // basic usage
      // ---------------
      var $ = new City();
      $.showProvinces("#province");
      $.showCities("#city");

      // ------------------
      // additional methods 
      // -------------------

      // will return all provinces 
      console.log($.getProvinces());

      // will return all cities 
      console.log($.getAllCities());

      // will return all cities under specific province (e.g Batangas)
      console.log($.getCities("Batangas"));

    }
  </script>
</head>

<body>
  <!-- Philippine Cities -->


  <header id="page-topbar" style="height:90px; background-color:#FFC835;">
    <div class="navbar-header d-felx align-items-stretch h-100 ">
      <div class="d-flex align-items-stretch">
        <!-- LOGO -->
        <div class="navbar-brand-box h-100 " style="background-color:#FFC835; padding: 0 0 0 2rem;">
        </div>


        <div class="navbar-brand-box h-100 " style="background-color:#FFC835;
                padding: 0 0 0 2rem;">
          <a href="" class="logo logo-dark h-100" style="line-height: 100px;">
            <span class="logo-sm">
              <img src="<?php echo base_url('assets') ?>/images/loggo1.jpg" alt="" height="50">
            </span>
            <span class="logo-lg">
              <img src="<?php echo base_url('assets') ?>/images/loggo1.jpg" alt="" height="50">
              <img src="<?php echo base_url('assets') ?>/images/w_epawn.png" alt="" height="40">
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

        <form class=" app-search d-none d-lg-block h-100" style=" padding: 30px; width:80vh;">
          <div class="position-relative">
            <input type="text" class="form-control" id="search" oninput="loadProduct()" placeholder="Search...">
            <span class="bx bx-search-alt"></span>
          </div>
        </form>


      </div>


      <div class="d-flex ">

        <!-- <div class="dropdown d-inline-block" style="margin-right:5vh;">
          <button type="button" class="btn header-item waves-effect h-100" onclick="window.location='Access'" style="background-color: black;">
            <i class="fas fa-user-circle " style="font-size: 1.3rem; color:white;"></i>
            <span class="d-none d-xl-inline-block ms-1" style="
              font-size:1.3rem;
              color:white;
              letter-spacing: 2.2px"> LOGIN</span>
          </button>

        </div> -->

        <div class="dropdown d-inline-block" style="margin-right:5vh;">
          <button type="button" class="btn header-item waves-effect h-100" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: black;">
            <img class="rounded-circle header-profile-user" src="<?php echo base_url('assets') ?>/images/users/avatar-1.jpg" alt="Header Avatar">
            <span class="d-none d-xl-inline-block ms-1" style="
              font-size:1.2rem;
              color:white;
              letter-spacing: 2px"> LOGIN</span>
            <i class="mdi mdi-chevron-down d-none d-xl-inline-block" style="color:white;  font-size:1.2rem;"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end">
            <!-- item-->
            <a class="dropdown-item" href="<?php echo base_url('Client/profile') ?>"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>
            <a class="dropdown-item" href="<?php echo base_url('Client/pawn_account') ?>"><i class="bx bx-wallet font-size-16 align-middle me-1"></i> <span key="t-my-wallet">My Pawn</span></a>
            <a class="dropdown-item d-block" href="<?php echo base_url('Client/calendar') ?>"><span class="badge bg-success float-end">11</span><i class="bx bx-calendar font-size-16 align-middle me-1"></i> <span key="t-settings">Calendar</span></a>
            <!--<a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span key="t-lock-screen">Lock screen</span></a> -->
            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-danger" href="Access"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
          </div>
        </div>

      </div>

    </div>
  </header>