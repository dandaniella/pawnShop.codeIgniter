<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8" />
  <title>ePawnShop | Group 5</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
  <meta content="Themesbrand" name="author" />
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

</head>

<body>

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

        <div class="dropdown d-inline-block" style="margin-right:5vh;">
          <button type="button" class="btn header-item waves-effect h-100" onclick="window.location='../Access'" style="background-color: black;">
            <i class="fas fa-user-circle " style="font-size: 1.3rem; color:white;"></i>
            <span class="d-none d-xl-inline-block ms-1" style="
              font-size:1.3rem;
              color:white;
              letter-spacing: 2.2px"> LOGIN</span>
          </button>

        </div>

      </div>

    </div>
  </header>