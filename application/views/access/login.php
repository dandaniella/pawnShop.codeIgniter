<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Login | Skote - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo base_url('assets') ?>/images/favicon.ico">
    <!-- toastr -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/libs/toastr/build/toastr.min.css">

    <!-- Bootstrap Css -->
    <link href="<?php echo base_url('assets') ?>/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?php echo base_url('assets') ?>/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?php echo base_url('assets') ?>/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <!-- cutom css  -->
    <link href="<?php echo base_url('assets') ?>/css/custom.css" rel="stylesheet" type="text/css" />



</head>

<body style=" background-image: url(assets/images/banner.jpg);
    background-repeat: no-repeat;
	background-position: center 30%;
	background-size: cover; 
    backdrop-filter: blur(10px);">
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <!-- <div class="col "> </div> -->
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-primary bg-soft">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-4">
                                        <h5 class="text-primary">Welcome Back !</h5>
                                        <p>Sign in to continue to Skote.</p>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="<?php echo base_url('assets') ?>/images/profile-img.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="auth-logo">
                                <a href="index.html" class="auth-logo-light">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                            <img src="<?php echo base_url('assets') ?>/images/logo-light.svg" alt="" class="rounded-circle" height="34">
                                        </span>
                                    </div>
                                </a>

                                <a href="index.html" class="auth-logo-dark">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                            <img src="<?php echo base_url('assets') ?>/images/logo.svg" alt="" class="rounded-circle" height="34">
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2">
                                <form class="form-horizontal" action="index.html" id="login_id">

                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="user_email" name="user_email" placeholder="Enter email" data-parsley-required="true" parsley-type="email">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <div class="input-group auth-pass-inputgroup grid">
                                            <div class="col">
                                                <input type="password" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon" id="user_password" name="user_password" data-parsley-required="true">
                                            </div>
                                            <div>
                                                <button class="btn btn-light " type="button"><i class="mdi mdi-eye-outline"></i></button>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="remember-check">
                                        <label class="form-check-label" for="remember-check">
                                            Remember me
                                        </label>
                                    </div>

                                    <div class="mt-3 d-grid">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit">Log In</button>
                                    </div>

                                    <div class="mt-3 d-grid">
                                        <button class="btn btn-danger waves-effect waves-light" type="button">Sign in with Google</button>
                                    </div>

                                    <!-- <div class="mt-4 text-center">
                                        <h5 class="font-size-14 mb-3">Sign in with</h5>

                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="javascript::void()" class="social-list-item bg-primary text-white border-primary">
                                                    <i class="mdi mdi-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript::void()" class="social-list-item bg-info text-white border-info">
                                                    <i class="mdi mdi-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript::void()" class="social-list-item bg-danger text-white border-danger">
                                                    <i class="mdi mdi-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div> -->

                                    <div class="mt-4 text-center">
                                        <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock me-1"></i> Forgot your password?</a>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center">

                        <div>
                            <p>Don't have an account ? <a href="auth-register.html" class="fw-medium text-primary"> Signup now </a> </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end account-pages -->

    <!-- JAVASCRIPT -->
    <script src="<?php echo base_url('assets') ?>/libs/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('assets') ?>/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('assets') ?>/libs/metismenu/metisMenu.min.js"></script>
    <script src="<?php echo base_url('assets') ?>/libs/simplebar/simplebar.min.js"></script>
    <script src="<?php echo base_url('assets') ?>/libs/node-waves/waves.min.js"></script>

    <!-- App js -->
    <script src="<?php echo base_url('assets') ?>/js/app.js"></script>

    <!-- parsley -->
    <script src="assets/libs/parsleyjs/parsley.min.js"></script>
    <!-- toastr plugin -->
    <script src="<?php echo base_url('assets') ?>/libs/toastr/build/toastr.min.js"></script>
    <!-- <script src="<?php echo base_url('assets_c') ?>/js/plugins.js"></script> -->
    <!-- <script src="<?php echo base_url('assets_c') ?>/js/main.js"></script> -->

    <!-- common js -->
    <script src="<?php echo base_url('assets') ?>/js/common.js"></script>

    <!-- login js -->
    <script src="<?php echo base_url('assets') ?>/js/access/login.js"></script>


</body>

</html>