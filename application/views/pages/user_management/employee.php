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

                        <!-- Add  modal Button -->
                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#employeeModal">
                            Add Employee
                        </button>


                        <div class="modal fade " id="employeeModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalScrollableTitle">Add Employee </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onClick="return formReset('hide');"></button>
                                    </div>
                                    <div class="modal-body" style="background: #F2F2F2" ;>
                                        <form class="form-horizontal form-id" id="emp-form" enctype="multipart/form-data">
                                            <div class="modal-body">

                                                <!-- Cards Start here -->

                                                <div class="card overflow-hidden form-id" id="edit_information">

                                                    <div class="card-body pt-0">

                                                        <div class="p-2">

                                                            <input type="hidden" name="uuid" id="uuid" value=" ">
                                                            <div class="m-3"></div>
                                                            <div class="col-12">
                                                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                                                    <h4 class="mb-sm-0 font-size-18">Employee User Information</h4>
                                                                </div>
                                                            </div>


                                                            <div class="col">
                                                                <div class="mb-3">
                                                                    <label for="user_name" class="form-label">Username</label>
                                                                    <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Enter first name" data-parsley-required="true" value="">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="user_password" class="form-label"> Password</label>
                                                                    <input type="text" class="form-control" id="user_password" name="user_password" value="" placeholder="Enter middle name" data-parsley-required="true" type="password">
                                                                </div>
                                                            </div>


                                                            <div class="mb-3 ">
                                                                <label class="form-label">Employee Role</label>
                                                                <select class="form-control select2" id="user_type" name="user_type" style="width: 100%;" data-parsley-required="true" data-parsley-required-message="You must select at least one option.">
                                                                    <option selected disabled value="">choose</option>
                                                                    <option value="Admin">Admin</option>
                                                                    <option value="Pawn Broker">Pawn Broker</option>
                                                                    <option value="Manager">Manager</option>
                                                                    <option value="Website">Website</option>
                                                                </select>
                                                            </div>





                                                            <div class="mb-3 ">
                                                                <!-- select -->
                                                                <label for="user_email" class="form-label "> email</label>
                                                                <input type="text" class="form-control input-mask" id="user_email" placeholder="Enter email" data-inputmask="'alias': 'email'" data-parsley-required="true" parsley-type="email" value="">
                                                            </div>



                                                            <div class="mb-5"></div>

                                                            <hr style="border-top: 1px solid red">


                                                            <!-- <div class="mt-3 d-grid"> -->
                                                            <div class="modal-footer">

                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal" onClick="return formReset('hide');">Cancel</button>
                                                                <button type="submit" class="btn btn-primary submit">Submit</button>

                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>



                                            </div>
                                            <div class="modal-footer">
                                                <!-- <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-primary">Submit</button> -->
                                            </div>
                                        </form>

                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                        </div>


                    </div>


                </div>


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Employee</h4>
                                <table id="emp-table" class="table table-bordered dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>User Name</th>
                                            <th>User Email</th>
                                            <th>User Role</th>
                                            <th>Active / Deactivate</th>
                                            <th>Actions</th>



                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <!-- hidden table for print d-none-->
                <!-- <div class="row ">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Employee</h4>
                                <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Status</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!--end row -->



                <!-- end page title -->





            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->