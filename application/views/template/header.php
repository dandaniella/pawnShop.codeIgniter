  <!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ePawnShop</title>

  Google Font: Source Sans Pro
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
Font Awesome
<link rel="stylesheet" href="<?php echo base_url('plugins') ?>/fontawesome-free/css/all.min.css">
Theme style
<link rel="stylesheet" href="<?php echo base_url('dist') ?>/css/adminlte.min.css">
overlayScrollbars
<link rel="stylesheet" href="<?php echo base_url('plugins') ?>/overlayScrollbars/css/OverlayScrollbars.min.css">

</head> -->


  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard 3</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+" <?php echo base_url('dist') ?>Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo base_url('plugins') ?>/fontawesome-free/css/all.min.css">
    <!-- date range -->
    <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url('plugins') ?>/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url('plugins') ?>/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url('plugins') ?>/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('dist') ?>/css/adminlte.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url('plugins') ?>/daterangepicker/daterangepicker.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="<?php echo base_url('plugins') ?>/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="<?php echo base_url('plugins') ?>/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?php echo base_url('plugins') ?>/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- ph_cities -->
    <script src="<?php echo base_url('plugins') ?>/ph_cities/city.js"></script>
    <!-- toastr -->
    <link rel="stylesheet" href="<?php echo base_url('plugins') ?>/toastr/toastr.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo base_url('plugins') ?>/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo base_url('plugins') ?>/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="<?php echo base_url('plugins') ?>/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- BS Stepper -->
    <link rel="stylesheet" href="<?php echo base_url('plugins') ?>/bs-stepper/css/bs-stepper.min.css">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="<?php echo base_url('plugins') ?>/dropzone/min/dropzone.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('dist') ?>/css/adminlte.min.css">



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