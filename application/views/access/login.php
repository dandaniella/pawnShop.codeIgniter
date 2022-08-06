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
    <!-- <script src=”https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.0/anime.min.js”></script> -->


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

</head>

<body style="  background-image: url('<?php echo base_url('assets') ?>/images/banner1.jpg');
    background-repeat: no-repeat;
	background-position: center 10%;
	background-size: cover; 
    backdrop-filter: blur(10px);">
    <div class="account-pages ">
        <div class="">
            <div class="row" id="card">
                <!-- <div class="col "> </div> -->

                <!-- <div class="col "> </div> -->
                <!-- ito yun  -->
                <div class="col-md-12 col-lg-12 col-xl-12" style="padding:0; margin:0;">
                    <div class="card col-md-9" id="card" style="margin:0 auto; top:-200;">
                        <div class="row g-0">

                            <div class="col-xl-8">
                                <div class=" auth-full-bg pt-lg-5 p-4" style="max-height:80vh; 
                                background-image: url('<?php echo base_url('assets') ?>/images/banner3.jpg'); background-repeat: no-repeat;
	                    background-position: center 30%;
	                    background-size: cover; ">
                                    <div class="w-100">
                                        <!-- <div class="bg-overlay"></div> -->
                                        <div class="d-flex h-100 flex-column">

                                            <div class="p-4 mt-auto">
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-7">
                                                        <div class="text-center">

                                                            <!-- <h4 class="mb-3"><i class="bx bxs-quote-alt-left text-primary h1 align-middle me-3"></i><span class="text-primary">5k</span>+ Satisfied clients</h4> -->

                                                            <div dir="ltr">
                                                                <div class="owl-carousel owl-theme auth-review-carousel" id="auth-review-carousel">
                                                                    <!-- <div class="item">
                                                                        <div class="py-3">
                                                                            <p class="font-size-16 mb-4">" Fantastic theme with a ton of options. If you just want the HTML to integrate with your project, then this is the package. You can find the files in the 'dist' folder...no need to install git and all the other stuff the documentation talks about. "</p>

                                                                            <div>
                                                                                <h4 class="font-size-16 text-primary"></h4>
                                                                                <p class="font-size-14 mb-0"></p>
                                                                            </div>
                                                                        </div>

                                                                    </div> -->

                                                                    <div class="item">
                                                                        <div class="py-3">
                                                                            <!-- <p class="font-size-16 mb-4">" If Every Vendor on Envato are as supportive as Themesbrand, Development with be a nice experience. You guys are Wonderful. Keep us the good work. "</p> -->

                                                                            <div>
                                                                                <h4 class="font-size-16 text-primary"> </h4>
                                                                                <h4 class="font-size-16 text-primary mb-5"> </h4>
                                                                                <p class="font-size-14 mb-0">ePawn shop Phlippines</p>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-xl-4">
                                <div class=" container p-md-5 p-4" style="height:80vh;">
                                    <div class="w-100">

                                        <div class="d-flex flex-column h-100">
                                            <div class="mb-4 mb-md-5">
                                                <a href="index.html" class="">
                                                    <!-- <img src="assets/images/loggo1.jpg" alt="" height="30" class="auth-logo-dark"> -->
                                                    <img src="<?php echo base_url('assets') ?>/images/epawn.png" alt="" height="30" class="">
                                                </a>
                                            </div>
                                            <div class="my-auto">

                                                <div>
                                                    <h5 class="text-primary">Welcome Back !</h5>
                                                    <p class="text-muted">Sign in to continue.</p>
                                                </div>

                                                <div class="mt-4">
                                                    <form method="get" id="login_id" name="login_id" action="" action="">

                                                        <div class="mb-3">
                                                            <label for="username" class="form-label">Username</label>
                                                            <input type="text" class="form-control" id="user_email" name="user_email" placeholder="Enter email" data-parsley-required="true" parsley-type="email">
                                                        </div>

                                                        <div class="mb-3">
                                                            <div class="float-end">
                                                                <a href="auth-recoverpw-2.html" class="text-muted">Forgot password?</a>
                                                            </div>

                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="form-label">Password</label>
                                                            <div class="input-group auth-pass-inputgroup grid">
                                                                <div class="col">
                                                                    <input type="password" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon" id="user_password" name="user_password" data-parsley-required="true">
                                                                </div>
                                                                <div>
                                                                    <button class="btn btn-light far fa-eye" type="button" id="togglePassword" style="height:38px;"></button>
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

                                                    </form>
                                                    <div class="mt-5 text-center">
                                                        <p>Don't have an account ? <a href="auth-register-2.html" class="fw-medium text-primary"> Signup now </a> </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-4 mt-md-5 text-center">
                                                <p class="mb-0">© <script>
                                                        document.write(new Date().getFullYear())
                                                    </script> ePawn. Crafted by <i class="mdi mdi-heart text-danger"></i> Group 5</p>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
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
    <script src="<?php echo base_url('assets') ?>/js/anime.min.js"></script>
    <!-- parsley -->
    <script src="<?php echo base_url('assets') ?>/libs/parsleyjs/parsley.min.js"></script>


    <!-- toastr plugin -->
    <script src="<?php echo base_url('assets') ?>/libs/toastr/build/toastr.min.js"></script>
    <!-- <script src="<?php echo base_url('assets_c') ?>/js/plugins.js"></script> -->
    <!-- <script src="<?php echo base_url('assets_c') ?>/js/main.js"></script> -->

    <!-- common js -->
    <script src="<?php echo base_url('assets') ?>/js/common.js"></script>

    <!-- login js -->
    <script src="<?php echo base_url('assets') ?>/js/access/login.js"></script>
    <script>
        var animation = anime.timeline({});
        var animation2 = anime.timeline({});

        animation
            .add({
                targets: "#card",
                top: "100px",
                duration: 500,
                easing: 'spring(1, 80, 10, 0)'
            });


        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#user_password');

        togglePassword.addEventListener('click', function(e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye slash icon
            this.classList.toggle('fa-eye-slash');
        });
    </script>

</body>

</html>