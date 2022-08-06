<div class="account-pages my-5 pt-sm-5">
    <div class="container">

        <div class="row justify-content-center">
            <!-- title -->
            <div class="mb-5"></div>

            <!-- user name and password -->
            <div class="col-md-8 col-lg-6 col-xl-10">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">My Profile</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="#edit_informatio">Edit Information</a></li>
                                    <li class="breadcrumb-item active"><a href="#change_password">Change Password</a></li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card overflow-hidden" id="edit_information">

                    <div class="card-body pt-0">

                        <div class="p-2">
                            <form class="form-horizontal" id="personal_info" action="">
                                <div class="m-3"></div>
                                <div class="col-12">
                                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                        <h4 class="mb-sm-0 font-size-18">Personal Information</h4>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="cl_firstName" class="form-label">First name</label>
                                    <input type="text" class="form-control" id="cl_firstName" placeholder="Enter first name">
                                </div>
                                <div class="mb-3">
                                    <label for="cl_middleName" class="form-label">Middle name</label>
                                    <input type="text" class="form-control" id="cl_middleName" placeholder="Enter middle name">
                                </div>
                                <div class="mb-3">
                                    <label for="cl_lastName" class="form-label">Last name</label>
                                    <input type="text" class="form-control" id="cl_lastName" placeholder="Enter last name">
                                </div>
                                <div class="row mb-5">
                                    <div class="col">
                                        <label class="form-label">Sex</label>
                                        <select class="form-control select2-search-disable" id=" cl_sex" name=" cl_sex">
                                            <option>choose</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>

                                    </div>
                                    <div class="col">
                                        <label for="cl_civilStatus">Civil status</label>
                                        <select class="form-control select2-search-disable" id=" cl_civilStatus" name=" cl_civilStatus">
                                            <option>choose</option>
                                            <option value="Married">Married</option>
                                            <option value="Single">Single</option>
                                            <option value="Divorced">Divorced</option>
                                            <option value="Widowed">Widowed</option>
                                        </select>
                                    </div>

                                </div>

                                <hr style="border-top: 1px solid red">
                                <!-- contact information  -->
                                <div class="col-12">
                                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                        <h4 class="mb-sm-0 font-size-18"> Contact Information</h4>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="mb-3 col-6">
                                        <!-- select -->
                                        <label for="cl_contactNo" class="form-label"> Contact No.</label>
                                        <input type="text" class="form-control" id="cl_contactNo" placeholder="Enter contact no
                                        " data-parsley-required="true" parsley-type="digits" data-parsley-maxlength="10">
                                    </div>

                                    <div class="mb-3 col-6">
                                        <!-- select -->
                                        <label for="cl_street" class="form-label"> Street</label>
                                        <input type="text" class="form-control" id="cl_street" placeholder="Enter last name">
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="mb-3 col-6">
                                        <label class="form-label">Province</label>
                                        <select class="form-control select2" id="province" name="province" width=50%>

                                        </select>
                                    </div>
                                    <div class="mb-3 col-6">
                                        <label class="form-label">City</label>
                                        <select class="form-control select2" id="city" name="city" width=50%>
                                        </select>
                                    </div>
                                </div>

                                <hr style="border-top: 1px solid red">
                                <!-- ID presented -->
                                <div class="col-12">
                                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                        <h4 class="mb-sm-0 font-size-18"> Presented Valid ID </h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-6">
                                        <!-- select -->
                                        <label for="cl_idPresented" class="form-label"> ID presented</label>
                                        <input type="text" class="form-control" id="cl_idPresented" placeholder="Enter contact no">
                                    </div>
                                    <div class="mb-3 col-6">
                                        <!-- select -->
                                        <label for="cl_idPresentedNo" class="form-label"> ID no.</label>
                                        <input type="text" class="form-control" id="cl_idPresentedNo" placeholder="Enter contact no">
                                    </div>
                                </div>

                                <div class="mt-3 d-grid">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Log In</button>
                                </div>



                                <div class="mt-4 text-center">
                                    <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock me-1"></i> Forgot your password?</a>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>


                <!-- Change password -->
                <div class="card overflow-hidden" id="change_password">

                    <div class="card-body pt-0">

                        <div class="p-2">
                            <form id="contact_info" class="form-horizontal" action="">
                                <div class="mb-4"></div>
                                <div class="col-12">
                                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                        <h4 class="mb-sm-0 font-size-18"> Change Password</h4>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Old Password</label>
                                    <div class="input-group auth-pass-inputgroup">
                                        <input type="password" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                                        <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                    </div>
                                </div>


                                <div class="mb-3">
                                    <label class="form-label">New Password</label>
                                    <div class="input-group auth-pass-inputgroup">
                                        <input type="password" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                                        <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <div class="input-group auth-pass-inputgroup">
                                        <input type="password" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                                        <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                    </div>
                                </div>

                                <div class="mt-3 d-grid">
                                    <button class="btn btn-primary waves-effect waves-light" type="submit">Log In</button>
                                </div>

                                <div class="mt-4 text-center">
                                    <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock me-1"></i> Forgot your password?</a>
                                </div>


                            </form>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>
</div>