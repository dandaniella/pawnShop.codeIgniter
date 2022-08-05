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


            </div>


            <div class="d-flex ">

                <div class="dropdown d-inline-block" style="margin-right:5vh;">
                    <button type="button" class="btn header-item waves-effect h-100" onclick="window.location='Access'" style="background-color: black;">
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

    <div class="main-content" style="   margin-left: 0px;">

        <div class="page-content" style="background: url(' https://cf.shopee.ph/file/36a846a3e6d10b211425947c6e20ae40') center top / 100% no-repeat;">
            <div class="container-fluid" style="width:70%;">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Products</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                                    <li class="breadcrumb-item active">Products</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <!-- <div class="col-lg-3">
                     <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Filter</h4>

                            <div>
                                <h5 class="font-size-14 mb-3">Clothes</h5>
                                <ul class="list-unstyled product-list">
                                    <li><a href="#"><i class="mdi mdi-chevron-right me-1"></i> T-shirts</a></li>
                                    <li><a href="#"><i class="mdi mdi-chevron-right me-1"></i> Shirts</a></li>
                                    <li><a href="#"><i class="mdi mdi-chevron-right me-1"></i> Jeans</a></li>
                                    <li><a href="#"><i class="mdi mdi-chevron-right me-1"></i> Jackets</a></li>
                                </ul>
                            </div>
                            <div class="mt-4 pt-3">
                                <h5 class="font-size-14 mb-3">Price</h5>
                                <input type="text" id="pricerange">
                            </div>

                            <div class="mt-4 pt-3">
                                <h5 class="font-size-14 mb-3">Discount</h5>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" id="productdiscountCheck1">
                                    <label class="form-check-label" for="productdiscountCheck1">
                                        Less than 10%
                                    </label>
                                </div>

                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" id="productdiscountCheck2">
                                    <label class="form-check-label" for="productdiscountCheck2">
                                        10% or more
                                    </label>
                                </div>

                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" id="productdiscountCheck3" checked>
                                    <label class="form-check-label" for="productdiscountCheck3">
                                        20% or more
                                    </label>
                                </div>

                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" id="productdiscountCheck4">
                                    <label class="form-check-label" for="productdiscountCheck4">
                                        30% or more
                                    </label>
                                </div>

                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" id="productdiscountCheck5">
                                    <label class="form-check-label" for="productdiscountCheck5">
                                        40% or more
                                    </label>
                                </div>

                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" id="productdiscountCheck6">
                                    <label class="form-check-label" for="productdiscountCheck6">
                                        50% or more
                                    </label>
                                </div>

                            </div>

                            <div class="mt-4 pt-3">
                                <h5 class="font-size-14 mb-3">Customer Rating</h5>
                                <div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="productratingCheck1">
                                        <label class="form-check-label" for="productratingCheck1">
                                            4 <i class="bx bxs-star text-warning"></i> & Above
                                        </label>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="productratingCheck2">
                                        <label class="form-check-label" for="productratingCheck2">
                                            3 <i class="bx bxs-star text-warning"></i> & Above
                                        </label>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="productratingCheck3">
                                        <label class="form-check-label" for="productratingCheck3">
                                            2 <i class="bx bxs-star text-warning"></i> & Above
                                        </label>
                                    </div>

                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="productratingCheck4">
                                        <label class="form-check-label" for="productratingCheck4">
                                            1 <i class="bx bxs-star text-warning"></i>
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div> -->
                    <div class="col-lg-12">

                        <div class="row mb-3">
                            <div class="col-xl-4 col-sm-6">
                                <div class="mt-2">
                                    <h5>Clothes</h5>
                                </div>
                            </div>
                            <div class="col-lg-8 col-sm-6">
                                <form class="mt-4 mt-sm-0 float-sm-end d-sm-flex align-items-center">
                                    <div class="search-box me-2">
                                        <div class="position-relative">
                                            <input type="text" class="form-control border-0" placeholder="Search...">
                                            <i class="bx bx-search-alt search-icon"></i>
                                        </div>
                                    </div>
                                    <ul class="nav nav-pills product-view-nav justify-content-end mt-3 mt-sm-0">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#"><i class="bx bx-grid-alt"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"><i class="bx bx-list-ul"></i></a>
                                        </li>
                                    </ul>


                                </form>
                            </div>
                        </div>

                        <!-- product list start -->
                        <div class="row" id="product-list">


                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="product-img position-relative">
                                            <img src="assets/images/product/img-2.png" alt="" class="img-fluid mx-auto d-block">
                                        </div>
                                        <div class="mt-4 text-center">
                                            <h5 class="mb-3 text-truncate"><a href="#" class="text-dark">Light blue T-shirt</a></h5>

                                            <p class="text-muted">
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star"></i>
                                            </p>
                                            <h5 class="my-0"><span class="text-muted me-2"><del>$240</del></span> <b>$225</b></h5>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="product-img position-relative">
                                            <div class="avatar-sm product-ribbon">
                                                <span class="avatar-title rounded-circle  bg-primary">
                                                    - 20 %
                                                </span>
                                            </div>
                                            <img src="assets/images/product/img-3.png" alt="" class="img-fluid mx-auto d-block">
                                        </div>
                                        <div class="mt-4 text-center">
                                            <h5 class="mb-3 text-truncate"><a href="#" class="text-dark">Black Color T-shirt</a></h5>

                                            <p class="text-muted">
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star"></i>
                                            </p>
                                            <h5 class="my-0"><span class="text-muted me-2"><del>$175</del></span> <b>$152</b></h5>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="product-img position-relative">
                                            <img src="assets/images/product/img-4.png" alt="" class="img-fluid mx-auto d-block">
                                        </div>
                                        <div class="mt-4 text-center">
                                            <h5 class="mb-3 text-truncate"><a href="#" class="text-dark">Hoodie (Blue)</a></h5>

                                            <p class="text-muted">
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star"></i>
                                            </p>
                                            <h5 class="my-0"><span class="text-muted me-2"><del>$150</del></span> <b>$145</b></h5>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">

                                        <div class="product-img position-relative">
                                            <div class="avatar-sm product-ribbon">
                                                <span class="avatar-title rounded-circle  bg-primary">
                                                    - 22 %
                                                </span>
                                            </div>
                                            <img src="assets/images/product/img-5.png" alt="" class="img-fluid mx-auto d-block">
                                        </div>
                                        <div class="mt-4 text-center">
                                            <h5 class="mb-3 text-truncate"><a href="#" class="text-dark">Half sleeve T-Shirt</a></h5>

                                            <p class="text-muted">
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star"></i>
                                            </p>
                                            <h5 class="my-0"><span class="text-muted me-2"><del>$145</del></span> <b>$138</b></h5>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="product-img position-relative">
                                            <div class="avatar-sm product-ribbon">
                                                <span class="avatar-title rounded-circle bg-primary">
                                                    - 28 %
                                                </span>
                                            </div>
                                            <img src="assets/images/product/img-6.png" alt="" class="img-fluid mx-auto d-block">
                                        </div>
                                        <div class="mt-4 text-center">
                                            <h5 class="mb-3 text-truncate"><a href="#" class="text-dark">Green color T-shirt</a></h5>

                                            <p class="text-muted">
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star"></i>
                                            </p>
                                            <h5 class="my-0"><span class="text-muted me-2"><del>$138</del></span> <b>$135</b></h5>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="pagination pagination-rounded justify-content-center mt-3 mb-4 pb-1">
                                    <li class="page-item disabled">
                                        <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="#" class="page-link">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">4</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">5</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © Skote.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by Themesbrand
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

    </div>