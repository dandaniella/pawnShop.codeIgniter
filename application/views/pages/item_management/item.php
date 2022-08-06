<div class="d-flex">

    <div class="dropdown d-inline-block">
        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <!-- <img class="rounded-circle header-profile-user" src="<?php echo base_url('assets') ?>/images/users/avatar-1.jpg" alt="Header Avatar"> -->
            <i class="fas fa-user-circle"></i>
            <span class="d-none d-xl-inline-block ms-1" key="t-henry">Henry</span>
            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-end">
            <!-- item-->
            <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>
            <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle me-1"></i> <span key="t-my-wallet">My Wallet</span></a>
            <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">11</span><i class="bx bx-wrench font-size-16 align-middle me-1"></i> <span key="t-settings">Settings</span></a>
            <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span key="t-lock-screen">Lock screen</span></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-danger" href="#"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
        </div>
    </div>

    <div class="dropdown d-inline-block">
        <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
            <i class="bx bx-cog bx-spin"></i>
        </button>
    </div>

</div>
</div>
</header>


<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="d-sm-flex flex-wrap mb-4">

                    <h4 class="card-title mb-4">Email Sent</h4>

                    <div class="ms-auto">

                        <!-- Add user modal Button -->
                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Add User Credentials
                        </button>


                        <!-- Modal add user cred -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content ">
                                    <div class="modal-header col bg-primary">
                                        <h5 class="modal-title text-white" id="staticBackdropLabel"><i class="fas fa-user-circle  fa-lg (33% increase) text-white"></i> &nbsp Add User Credential</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form class="form-horizontal" action="index.html" id="login_id" enctype="multipart/form-data">
                                        <div class="modal-body">


                                            <div class="mb-3">
                                                <label for="Email" class="form-label">Email</label>
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

                                            <div class="mb-3">
                                                <label class="form-label">Username</label>
                                                <div class="input-group auth-pass-inputgroup grid">
                                                    <div class="col">
                                                        <input type="text" class="form-control" placeholder="Enter username" aria-label="username" id="user_name" name="user_name" data-parsley-required="true">
                                                    </div>
                                                    <div>
                                                        <button class="btn btn-light " type="button"><i class="mdi mdi-eye-outline"></i></button>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class=" col mb-3">
                                                    <label class=" form-label">Single Select</label>



                                                </div>
                                                <div class="col">
                                                    <select class="form-control select2  ">
                                                        <option> Select asasasasas</option>
                                                        <option value="AK">Alaska</option>
                                                        <option value="HI">Hawaii</option>

                                                    </select>
                                                </div>
                                            </div>




                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Employee</h4>
                                <table id="table1" class="table table-bordered dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
                <!-- end page title -->





            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->