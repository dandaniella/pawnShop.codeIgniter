<div class="main-content" style="margin: 10px 20px">

    <div class="page-content" style="background: url(' https://cf.shopee.ph/file/36a846a3e6d10b211425947c6e20ae40') center top / 100% no-repeat;">
        <div class="container-fluid" style="padding: 10px 20px">

            <!-- start page title -->
            <!-- <div class="row">
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
                </div> -->
            <!-- end page title -->

            <div class="row">

                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Validation type</h4>
                            <p class="card-title-desc">Parsley is a javascript form validation
                                library. It helps you provide your users with feedback on their form
                                submission before sending it to your server.</p>

                            <form class="custom-validation" action="#">
                                <div class="mb-3">
                                    <label class="form-label">Required</label>
                                    <input type="text" class="form-control" required placeholder="Type something" />
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Equal To</label>
                                    <div>
                                        <input type="password" id="pass2" class="form-control" required placeholder="Password" />
                                    </div>
                                    <div class="mt-2">
                                        <input type="password" class="form-control" required data-parsley-equalto="#pass2" placeholder="Re-Type Password" />
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">E-Mail</label>
                                    <div>
                                        <input type="email" class="form-control" required parsley-type="email" placeholder="Enter a valid e-mail" />
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">URL</label>
                                    <div>
                                        <input parsley-type="url" type="url" class="form-control" required placeholder="URL" />
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Digits</label>
                                    <div>
                                        <input data-parsley-type="digits" type="text" class="form-control" required placeholder="Enter only digits" />
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Number</label>
                                    <div>
                                        <input data-parsley-type="number" type="text" class="form-control" required placeholder="Enter only numbers" />
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Alphanumeric</label>
                                    <div>
                                        <input data-parsley-type="alphanum" type="text" class="form-control" required placeholder="Enter alphanumeric value" />
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Textarea</label>
                                    <div>
                                        <textarea required class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap gap-2">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-secondary waves-effect">
                                        Cancel
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

                <!-- end row -->


            </div>
        </div><!-- container-fluid -->

    </div> <!-- End Page-content -->

    <!-- end main content-->

</div>