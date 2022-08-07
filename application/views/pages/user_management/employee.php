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


                        <div class="modal fade " id="employeeModal" tabindex="-1" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalScrollableTitle">Add Employee </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body" style="background: #F2F2F2" ;>
                                        <form class="form-horizontal" action="index.html" id="login_id">
                                            <div class="modal-body">

                                                <!-- Cards Start here -->

                                                <div class="card overflow-hidden" id="edit_information">

                                                    <div class="card-body pt-0">

                                                        <div class="p-2">
                                                            <form class="form-horizontal" id="personal_info" action="">

                                                                <div class="m-3"></div>
                                                                <div class="col-12">
                                                                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                                                        <h4 class="mb-sm-0 font-size-18">Employee Information</h4>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="mb-3">
                                                                        <label for="user_name" class="form-label">Username</label>
                                                                        <input type="text" class="form-control" id="user_name" placeholder="Enter first name">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="user_password" class="form-label"> Password</label>
                                                                        <input type="text" class="form-control" id="user_password" placeholder="Enter middle name">
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="mb-3 col-6">
                                                                        <label class="form-label">Employee Role</label>
                                                                        <select class="form-control select2" id="user_type" name="user_type" style="width: 100%;">
                                                                            <option>choose</option>
                                                                            <option value="Admin">Admin</option>
                                                                            <option value="Pawn Broker">Pawn Broker</option>
                                                                            <option value="Manager">Manager</option>
                                                                            <option value="Website">Website</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="mb-3 col-6">
                                                                        <label>Hired Date</label>
                                                                        <div class="input-group" id="em_hiredDate">
                                                                            <input type="text" class="form-control" placeholder="M dd, yyyy" data-date-format="M dd, yyyy" data-date-container='#em_hiredDate' data-provide="datepicker">

                                                                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                                        </div><!-- input-group -->
                                                                    </div>
                                                                </div>


                                                                <div class="mb-5"></div>


                                                                <!-- Personal information -->
                                                                <hr style="border-top: 1px solid red">
                                                                <div class="col-12">
                                                                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                                                        <h4 class="mb-sm-0 font-size-18">Personal Information</h4>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="em_firstName" class="form-label">First name</label>
                                                                    <input type="text" class="form-control" id="em_firstName" placeholder="Enter first name">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="em_middleName" class="form-label">Middle name</label>
                                                                    <input type="text" class="form-control" id="em_middleName" placeholder="Enter middle name">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="em_lastName" class="form-label">Last name</label>
                                                                    <input type="text" class="form-control" id="em_lastName" placeholder="Enter last name">
                                                                </div>


                                                                <div class="row">
                                                                    <div class="col-6  mb-3">
                                                                        <label class="form-label">Sex</label>
                                                                        <select class="form-control select2" id=" em_sex" name=" em_sex" style="width: 100%;">
                                                                            <option>choose</option>
                                                                            <option value="Male">Male</option>
                                                                            <option value="Female">Female</option>
                                                                        </select>

                                                                    </div>
                                                                    <div class="col-6  mb-3">
                                                                        <label>Birth date</label>
                                                                        <div class="input-group" id="em_birthDate">
                                                                            <input type="text" class="form-control" placeholder="M dd, yyyy" data-date-format="M dd, yyyy" data-date-container='#em_birthDate' data-provide="datepicker">

                                                                            <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                                        </div><!-- input-group -->
                                                                    </div>
                                                                </div>


                                                                <div class="mb-5"></div>



                                                                <!-- contact information  -->


                                                                <hr style="border-top: 1px solid red">
                                                                <div class="col-12">
                                                                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                                                        <h4 class="mb-sm-0 font-size-18"> Contact Information</h4>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="mb-3 col-6">
                                                                        <!-- select -->
                                                                        <label for="em_contactNo" class="form-label"> Contact No.</label>
                                                                        <input type="text" class="form-control  input-mask" id="em_contactNo" placeholder="Enter contact no.
                                                                        " data-inputmask="'mask': '+63-999999999'" data-parsley-required="true" parsley-type="digits" data-parsley-maxlength="10">
                                                                    </div>
                                                                    <div class="mb-3 col-6">
                                                                        <!-- select -->
                                                                        <label for="user_email" class="form-label "> email</label>
                                                                        <input type="text" class="form-control input-mask" id="user_email" placeholder="Enter email" data-inputmask="'alias': 'email'">
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-4">
                                                                    <div class="mb-3 col-6">
                                                                        <label class="form-label">Province</label>
                                                                        <select class="form-control select2" id="province" name="province" style="width: 100%;">

                                                                        </select>
                                                                    </div>
                                                                    <div class="mb-3 col-6">
                                                                        <label class="form-label">City</label>
                                                                        <select class="form-control select2" id="city" name="city" style="width: 100%;">
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <div class="mb-3 col-4">
                                                                        <!-- select -->
                                                                        <label for="em_houseNo" class="form-label">House no.</label>
                                                                        <input type="text" class="form-control" id="em_houseNo" placeholder="Enter last name">
                                                                    </div>
                                                                    <div class="mb-3 col-4">
                                                                        <!-- select -->
                                                                        <label for="em_street" class="form-label"> Street / Barangay</label>
                                                                        <input type="text" class="form-control" id="em_street" placeholder="Enter last name">
                                                                    </div>
                                                                    <div class="mb-3 col-4">
                                                                        <!-- select -->
                                                                        <label for="em_zipcode" class="form-label">Zip code</label>
                                                                        <input type="text" class="form-control" id="em_zipcode" placeholder="Enter last name">
                                                                    </div>
                                                                </div>


                                                                <div class="mb-5"></div>

                                                                <hr style="border-top: 1px solid red">


                                                                <!-- <div class="mt-3 d-grid"> -->
                                                                <div class="modal-footer">

                                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                                                    <button type="submit" class="btn btn-primary">Submit</button>

                                                                </div>




                                                            </form>
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

                <!-- start page title -->
                <!-- <div>
                    <div class="col">
                        <button type="button" class="btn btn-primary">Print</button>
                    </div>

                </div>

                <div class="form-check form-switch form-switch-lg mb-3" dir="ltr">
                    <input class="form-check-input" type="checkbox" id="SwitchCheckSizelg" checked>
                    <label class="form-check-label" for="SwitchCheckSizelg">Large Size Switch</label>
                </div> -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Employee</h4>
                                <table id="emp-table" class="table table-bordered dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Full Name</th>
                                            <th>User Role</th>
                                            <th>Hire Date</th>
                                            <th>Action</th>
                                            <th>Active/Deactive</th>



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