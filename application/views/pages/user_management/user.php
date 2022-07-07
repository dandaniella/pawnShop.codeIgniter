<!-- Content Wrapper. Contains page content -->

<body>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Users</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">DataTables</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- /.card -->

                        <div class="card ">
                            <div class="card-header row ">
                                <div class="card-title col-sm-6">
                                    <span>User Account</span>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <button type="button" class="btn btn-primary float-sm-right" data-toggle="modal" data-target="#modal3">
                                        &nbsp &nbsp &nbsp &nbsp Add user &nbsp &nbsp &nbsp &nbsp
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Rendering engine</th>
                                            <th>Browser</th>
                                            <th>Platform(s)</th>
                                            <th>Engine version</th>
                                            <th>CSS grade</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                    <!-- <tfoot>
                                    <tr>

                                    </tr>
                                </tfoot> -->
                                </table>
                                <!-- <select class="js-example-basic-single" name="state">
                                <option value="AL">Alabama</option>
                                ...
                                <option value="WY">Wyoming</option>
                            </select> -->

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

            <!-- modla user credential-->
            <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header align-items-start mb-3 bg-primary">
                            <!-- <span> &nbsp</span>
                        <i class="fa fa-user-circle fa-2x" aria-hidden="true"></i> -->
                            <h5 class="modal-title " id="exampleModalLabel">&nbsp Add User</h5>
                            <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-header align-content-center ">
                            <div class="align-self-center col-12">

                                <div class=" d-flex justify-content-around  mb-3">
                                    <hr class="col-2" style="border-top: 2px dotted #8c8b8b;;">
                                    <i class="fa fa-user-circle fa-2x text-primary" aria-hidden="true"></i>
                                    <hr class="col-2" style="border-top: 2px dotted #8c8b8b;;">
                                    <i class="fa fa-address-card fa-2x text-secondary" aria-hidden="true"></i>
                                    <hr class="col-2" style="border-top: 2px dotted #8c8b8b;;">
                                    <i class="fa fa-map-marker fa-2x text-secondary" aria-hidden="true"></i>
                                    <hr class="col-2" style="border-top: 2px dotted #8c8b8b;;">
                                </div>

                            </div>

                        </div>

                        <!-- modal body  -->
                        <div class="modal-body col-md-9 mb-2 align-self-center">
                            <form class="needs-validation" id="form-id1" enctype="multipart/form-data" novalidate>

                                <div class=" mb-3">
                                    <label for="user_email">email</label>
                                    <div class="input-group mb-3 ">
                                        <input type="email" class="form-control" placeholder="Email" id="user_email" name="user_email">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-envelope"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" mb-3">
                                    <label for="user_password">password</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Password" id="user_password" name="user_password">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-lock"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row  align-items-start">
                                    <div class="input-group col mb-3 col-md-4">
                                        <div class="input-group">
                                            <label for="user_name">username</label>
                                            <input type="text" class="form-control" id="user_name" name="user_name" style="width: 100%;">
                                        </div>
                                    </div>
                                    <div class="input-group mb-3 col col-md-4">
                                        <label for="">user role</label>
                                        <div class="input-group">
                                            <select class="custom-select" id="user_type" name="user_type" required>
                                                <option selected disabled value="">Choose...</option>
                                                <option>Admin</option>
                                                <option>Admin</option>
                                                <option>Admin</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- <div class=" input-group col-md-4 mb-3">
                                    <div class="input-group">
                                        <label>Hired Date:</label>
                                        <div class="input-group date" id="date_1" name="hired_date" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#date_1" id="hired_date" name="hired_date" />
                                            <div class="input-group-append" data-target="#date_1" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                </div>
                                <div class="modal-footer">
                                    <button type="cancel" id="cbt" class="btn btn-secondary" data-dismiss="modal">Discard</button>
                                    <button type="submit" class="btn btn-primary btn-next" id="form-id1-btn">Next</button>
                                </div>
                            </form>
                        </div> <!-- ./modal body  -->
                    </div>
                </div>
            </div>

            <!-- modal user information -->
            <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header align-items-start mb-3 bg-primary">
                            <!-- <span> &nbsp</span>
                        <i class="fa fa-user-circle fa-2x" aria-hidden="true"></i> -->
                            <h5 class="modal-title " id="exampleModalLabel">&nbsp Add User</h5>
                            <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-header align-content-center ">
                            <div class="align-self-center col-12">

                                <div class=" d-flex justify-content-around  mb-3">
                                    <hr class="col-2" style="border-top: 2px dotted #8c8b8b;">
                                    <i class="fa fa-user-circle fa-2x text-secondaru" aria-hidden="true"></i>
                                    <hr class="col-2" style="border-top: 2px dotted #8c8b8b;">
                                    <i class="fa fa-address-card fa-2x text-primary" aria-hidden="true"></i>
                                    <hr class="col-2" style="border-top: 2px dotted #8c8b8b;">
                                    <i class="fa fa-map-marker fa-2x text-secondary" aria-hidden="true"></i>
                                    <hr class="col-2" style="border-top: 2px dotted #8c8b8b;">
                                </div>

                            </div>

                        </div>


                        <!-- modal body  -->
                        <div class="modal-body col-md-10 mb-2 align-self-center">
                            <form class="needs-validation" id="form-id2" novalidate>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="col">
                                            <div class="col-md-12">
                                                <div class="mb-3">

                                                    <img src="https://avatars.dicebear.com/api/bottts/smile.svg" alt="" class="rounded avatar-lg img-thumbnail " style="object-fit:cover;" id="photo_path_placeholder" name="photo_path_placeholder">
                                                </div>
                                            </div>

                                            <div class="input-group mb-3 col-md-12">

                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="profile_pic" name="profile_pic" accept="image/*">
                                                    <label class="custom-file-label" for="inputGroupFile03">Upload profile</label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col  align-items-start col-md-6">
                                        <div class="mb-3"></div>
                                        <div class="input-group col mb-3 ">
                                            <div class="input-group">
                                                <label for="">First name</label>
                                                <input type="text" class="form-control" id="first_name" name="first_name" style="width: 100%;">
                                            </div>
                                        </div>
                                        <div class="input-group col mb-3 ">
                                            <div class="input-group">
                                                <label for="">Middle name</label>
                                                <input type="text" class="form-control" id="mid_name" name="mid_name" style="width: 100%;">
                                            </div>
                                        </div>
                                        <div class="input-group col mb-3 ">
                                            <div class="input-group">
                                                <label for="">Last name</label>
                                                <input type="text" class="form-control" id="last_name" name="last_name" style="width: 100%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row  align-items-start mb-3 col-md-12 align-self-around">
                                    <div class=" input-group col-md-6 mb-10">
                                        <div class="input-group">
                                            <label>Birth date</label>
                                            <div class="input-group date" id="date_2" data-target-input="nearest">
                                                <input type="text" class="form-control datetimepicker-input" data-target="#date_2" id="birth_date" name="birth_date" />
                                                <div class="input-group-append" data-target="#date_2" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3 col col-md-6">
                                        <label for="">Sex</label>
                                        <div class="input-group">
                                            <select class="custom-select select" id="sex" name="sex" required>
                                                <option selected disabled value="">Choose...</option>
                                                <option>Female</option>
                                                <option>Male</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>


                                <div class="row  align-items-start mb-5">
                                    <div class="input-group mb-3 col col-md-6">
                                        <label for="">Civil status</label>
                                        <div class="input-group">
                                            <select class="custom-select" id="civil_status" name="civil_status" required>
                                                <option selected disabled value="">Choose...</option>
                                                <option>Single</option>
                                                <option>Maried</option>
                                                <option>Widowed</option>
                                                <option>Divorced</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class=" input-group col-md-6 mb-10">
                                        <div class="input-group">
                                            <label>Contact no:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                </div>
                                                <input type="text" class="form-control" data-inputmask='"mask": "(+63) 999-9999-999"' data-mask id="contact_no" name="contact_no">
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="submit" id="next_modal" class="btn btn-secondary">next</button>
                                </div>
                            </form>
                        </div> <!-- ./modal body  -->
                    </div>
                </div>
            </div>

        </section>



        <!-- modal user location -->
        <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header align-items-start mb-3 bg-primary">
                        <!-- <span> &nbsp</span>
                        <i class="fa fa-user-circle fa-2x" aria-hidden="true"></i> -->
                        <h5 class="modal-title " id="exampleModalLabel">&nbsp Add User</h5>
                        <button type="button" class="close " data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-header align-content-center ">
                        <div class="align-self-center col-12">

                            <div class=" d-flex justify-content-around  mb-3">
                                <hr class="col-2" style="border-top: 2px dotted #8c8b8b;;">
                                <i class="fa fa-user-circle fa-2x text-secondary" aria-hidden="true"></i>
                                <hr class="col-2" style="border-top: 2px dotted #8c8b8b;;">
                                <i class="fa fa-address-card fa-2x text-secondary" aria-hidden="true"></i>
                                <hr class="col-2" style="border-top: 2px dotted #8c8b8b;;">
                                <i class="fa fa-map-marker fa-2x text-primary" aria-hidden="true"></i>
                                <hr class="col-2" style="border-top: 2px dotted #8c8b8b;;">
                            </div>

                        </div>

                    </div>

                    <!-- modal body  -->
                    <div class="modal-body col-md-10 mb-2 align-self-center">
                        <form class="needs-validation" id="form-id3" enctype="multipart/form-data" novalidate>

                            <div class="row  align-items-start">
                                <div class="input-group col mb-3 col-md-6">
                                    <div class="input-group">
                                        <label for="house_no">House no.</label>
                                        <input type="text" class="form-control" id="house_no" name="house_no" style="width: 100%;">
                                    </div>
                                </div>
                                <div class="input-group mb-3 col col-md-6">
                                    <div class="input-group col mb-3 ">
                                        <div class="input-group">
                                            <label for="street">Street</label>
                                            <input type="text" class="form-control" id="street" name="street" style="width: 100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- cities -->
                            <div>
                                <div class="row  align-items-start">
                                    <div class="input-group mb-5 col col-md-5">
                                        <label for="">City</label>
                                        <div class="input-group">
                                            <select class="form-control select2" id="province" name="province" style="width: 100%;">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3 col col-md-5">
                                        <label for="">Municipality</label>
                                        <div class="input-group">
                                            <select class="form-control select2" id="city" name="city" style="width: 100%;">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3 col col-md-2">
                                        <div class="input-group col mb-3 col-md-12">
                                            <div class="input-group">
                                                <label for="zip_code">Zip code</label>
                                                <input type="text" class="form-control" id="zip_code" name="zip_code" style="width: 100%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" id="prev_modal" class="btn btn-secondary" data-dismiss="modal">Back</button>
                                    <button type="submit" class="btn btn-primary btn-next" id="form-id1-btn">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div> <!-- ./modal body  -->
                </div>
            </div>
        </div>

    </div>
    <!-- /.content-wrapper -->