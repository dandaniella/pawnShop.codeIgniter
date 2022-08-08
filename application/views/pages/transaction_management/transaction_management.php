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
                            Create Transaction
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

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Latest Transaction</h4>
                                <div class="table-responsive">
                                    <table class="table align-middle table-nowrap mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th style="width: 20px;">
                                                    <div class="form-check font-size-16 align-middle">
                                                        <input class="form-check-input" type="checkbox" id="transactionCheck01">
                                                        <label class="form-check-label" for="transactionCheck01"></label>
                                                    </div>
                                                </th>
                                                <th class="align-middle">Order ID</th>
                                                <th class="align-middle">Billing Name</th>
                                                <th class="align-middle">Date</th>
                                                <th class="align-middle">Total</th>
                                                <th class="align-middle">Payment Status</th>
                                                <th class="align-middle">Payment Method</th>
                                                <th class="align-middle">View Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check font-size-16">
                                                        <input class="form-check-input" type="checkbox" id="transactionCheck02">
                                                        <label class="form-check-label" for="transactionCheck02"></label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2540</a> </td>
                                                <td>Neal Matthews</td>
                                                <td>
                                                    07 Oct, 2019
                                                </td>
                                                <td>
                                                    $400
                                                </td>
                                                <td>
                                                    <span class="badge badge-pill badge-soft-success font-size-11">Paid</span>
                                                </td>
                                                <td>
                                                    <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                                        View Details
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->