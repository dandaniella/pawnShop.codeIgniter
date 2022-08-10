<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8" />
  <title>ePawnShop | Group 5</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
  <meta content="Themesbrand" name="author" />
  <!-- App favicon -->
  <link rel="shortcut icon" href=" <?php echo base_url('assets') ?>/images/favicon.ico">

  <!-- select 2 -->
  <link href="<?php echo base_url('assets') ?>/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
  <!-- date -->
  <link href="<?php echo base_url('assets') ?>/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/libs/@chenfengyuan/datepicker/datepicker.min.css">

  <!-- Responsive datatable examples -->
  <link href="<?php echo base_url('assets') ?>/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
  <!-- Bootstrap Css -->
  <link href="<?php echo base_url('assets') ?>/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
  <!-- Icons Css -->
  <link href="<?php echo base_url('assets') ?>/css/icons.min.css" rel="stylesheet" type="text/css" />
  <!-- App Css-->
  <link href="<?php echo base_url('assets') ?>/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

  <!-- Cities -->
  <script src="<?php echo base_url('assets') ?>/js/city.js"></script>

  <!-- DataTables -->
  <link href="<?php echo base_url('assets') ?>/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url('assets') ?>/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

  <!-- common js -->
  <script src="<?php echo base_url('assets') ?>/js/common.js"></script>
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