<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles.css">
    <style>

    </style>
    <title>Document</title>
    <!-- bootstrap CSS link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body style="background-color:#f8f9ff;">

    <!-- Header Navbar  -->
    <nav class="navbar sticky-top navbar-expand-lg w-100 navbar-dark" style="background-color:#737CCF">
        <div class="navbar-nav-scroll navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" style="text-align:center;" href="#home">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" style="text-align:center;" href="#itemsaccepted">Items We Accept</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link nav-link active" style="text-align:center;" href="#">Contact Us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link nav-link active" href="Access" style="text-align:center;" role="button">Login</a>
                    <!-- data-bs-target="#LoginModal" data-bs-toggle="modal" -->
                </li>

                <li class="nav-item">
                    <a class="nav-link nav-link active" style="text-align:center;" role="button" data-bs-toggle="modal" data-bs-target="#RegisterModal">Register</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Modals -->
    <!-- Login-Modal -->
    <div class="modal fade" id="LoginModal" name="LoginModal" tabindex="-1" aria-labelledby="LoginModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Login-header  -->
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Login-Form  -->
                <div class="modal-body">
                    <form>
                        <!-- Authentication   -->
                        <!-- Email input -->
                        <div class="form-floating mb-3 ">
                            <input type="email" class="form-control" id="Emailinput" name="EmailInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <!-- Password input -->
                        <div class="form-floating mb-3 ">
                            <input type="email" class="form-control" id="Passwordinput" name="Passwordinput" placeholder="password">
                            <label for="floatingInput">Password</label>
                        </div>

                        <!-- Checkbox and ForgotPassword-->
                        <div class="text-center form input-group row mb-4">
                            <div class="col d-flex justify-content-center">
                                <!-- Checkbox -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="form2Example31" unchecked />
                                    <label class="form-check-label" for="form2Example31"> Remember me </label>
                                </div>
                            </div>
                            <div class="col">
                                <!-- Forgot -->
                                <a href="#!">Forgot password?</a>
                            </div>
                        </div>

                        <!-- Login button -->
                        <div class="row mb-0">
                            <div class="col d-flex justify-content-center">
                                <button type="button" class="btn btn-primary btn-r w-75 mb-4" id="loginbtn">Login</button>
                            </div>
                        </div>

                        <div class="text-center form row mb-0 ">
                            <p>or sign up with:</p>
                        </div>

                        <div class="row mb-0">
                            <div class="col d-flex justify-content-center">
                                <button type="button" class="btn btn-light btn-outline-dark w-75 mb-4" id="googlebtn">
                                    <img src="https://www.freepnglogos.com/uploads/google-logo-png/google-logo-png-suite-everything-you-need-know-about-google-newest-0.png" width="20" />
                                    Google</button>
                            </div>
                        </div>
                </div>
                <!-- Login-footer  -->
                <div class="modal-footer">
                    <!-- Register button -->
                    <div class="text-center form ">
                        <p>Not a member? <a href="#!" role="button" data-bs-toggle="modal" data-bs-target="#RegisterModal">Register here!</a>

                    </div>
                    </form>


                </div>
            </div>
        </div>
    </div>

    <!-- Register-Modal -->
    <div class="modal fade" id="RegisterModal" name="RegisterModal" tabindex="-1" aria-labelledby="RegisterModal" aria-hidden="true">
        <div class="modal-dialog modal-lg ">
            <div class="modal-content">

                <!-- Registration Form Header  -->
                <div class="modal-header text-center">
                    <h3 class="modal-title w-100">Registration Form</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Registration Form Body  -->
                <div class="modal-body">

                    <!-- Form  -->
                    <form>
                        <!-- Name 1st row -->
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="First Name" />
                            <span class="input-group-addon" style="visibility: hidden">---</span>
                            <input type="text" class="form-control" placeholder="Middle Name (Optional)" />
                            <span class="input-group-addon" style="visibility: hidden">---</span>
                            <input type="text" class="form-control" placeholder="Last Name" />
                        </div>

                        <!-- Birthdate, Email, Civil Status Sex 2nd row  -->
                        <div class="input-group mt-3">
                            <h6> Birthdate: </h6>
                            <span class="input-group-addon" style="visibility: hidden">--</span>
                            <input type="date" class="form-control" id="birthday" name="birthday">
                            <span class="input-group-addon" style="visibility: hidden">---</span>
                            <input type="text" class="form-control" placeholder="Email" />
                            <span class="input-group-addon" style="visibility: hidden">---</span>
                            <select name="marital_status" id="marital_status">
                                <option value="" disabled selected>-Select Civil Status-</option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Widowed">Widowed</option>
                                <option value="Separated">Separated</option>
                                <option value="Divorced">Divorced</option>
                            </select>
                            <span class="input-group-addon" style="visibility: hidden">---</span>
                            <label class="radio-inline"><input type="radio" name="sex" value="Male">Male</label>
                            <span class="input-group-addon" style="visibility: hidden">---</span>
                            <label class="radio-inline"><input type="radio" name="sex" value="Female">Female</label>
                        </div>

                        <!-- Address 3rd row  -->
                        <div class="input-group mt-3">
                            <input type="text" class="form-control" placeholder="House No." />
                            <span class="input-group-addon" style="visibility: hidden">---</span>
                            <input type="text" class="form-control" placeholder="Barangay" />
                            <span class="input-group-addon" style="visibility: hidden">---</span>
                            <input type="text" class="form-control" placeholder="Street" />
                            <span class="input-group-addon" style="visibility: hidden">---</span>
                            <input type="text" class="form-control" placeholder="City" />
                        </div>

                        <!-- Country, Zip code, Contact Number 4th row   -->
                        <div class="input-group mt-3">
                            <input type="text" class="form-control" placeholder="Country" />
                            <span class="input-group-addon" style="visibility: hidden">---</span>
                            <input type="text" class="form-control" placeholder="Zip Code" />
                            <span class="input-group-addon" style="visibility: hidden">---</span>
                            <input type="text" class="form-control" placeholder="Contact Number" />
                        </div>

                        <!-- Identification 5th row  -->
                        <div class="input-group mt-3">
                            <select name="marital_status" id="marital_status">
                                <option value="" disabled selected>-I.D Presented-</option>
                                <option value="Postal_ID">Postal ID</option>
                                <option value="GSIS">GSIS</option>
                                <option value="TIN">TIN</option>
                            </select>
                            <span class="input-group-addon" style="visibility: hidden">---</span>
                            <input type="text" class="form-control" placeholder="I.D Number" />
                        </div>
                    </form>

                    <!-- Register Footer  -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="loginbtn">Register</button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Images  -->
    <img id="home" src="https://cdn.shopify.com/s/files/1/0616/9788/4392/products/placeholder_b25c2233-291b-4c14-919a-4e27b09c5c4a_grande.png?v=1645994801" class="img-fluid" style="max-width:100%; margin-left: auto; margin-right: auto; display: block; padding-top: 20px;" alt="...">

    <!-- Text  -->
    <h1 style=" padding-top: 20px; text-align: center;"> Item We Accept</h1>

    <!-- Categories -->
    <div id="itemsaccepted" class="row m-0 w-100 g-3" style="padding-top:10px; padding-left:30px; padding-right:30px; padding-bottom: 20px;">
        <div class="col-md-3">
            <div class="card p-2">
                <div class="d-flex justify-content-between align-items-center p-2">
                    <div class="flex-column lh-1 imagename"> <span>Jewelry</span> </div>
                    <div> <img src="https://www.lehelmatyus.com/wp-content/uploads/woocommerce-placeholder-900x900.png" height="100" width="100" style="padding-left: 30px;" /> </div>
                    <a href="http://127.0.0.1:5500/test.html#" class="stretched-link"></a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-2">
                <div class="d-flex justify-content-between align-items-center p-2">
                    <div class="flex-column lh-1 imagename"> <span>Designer Bags</span> </div>
                    <div> <img src="https://www.lehelmatyus.com/wp-content/uploads/woocommerce-placeholder-900x900.png" height="100" width="100" style="padding-left: 30px;" /> </div>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-2">
                <div class="d-flex justify-content-between align-items-center p-2">
                    <div class="flex-column lh-1 imagename"> <span>Watches</span></div>
                    <div> <img src=https://www.lehelmatyus.com/wp-content/uploads/woocommerce-placeholder-900x900.png" height="100" width="100" style="padding-left: 30px;" /> </div>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-2">
                <div class="d-flex justify-content-between align-items-center p-2">
                    <div class="flex-column lh-1 imagename"> <span> Designer Shoes </span></div>
                    <div> <img src="https://www.lehelmatyus.com/wp-content/uploads/woocommerce-placeholder-900x900.png" height="100" width="100" style="padding-left: 30px;" /> </div>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-2">
                <div class="d-flex justify-content-between align-items-center p-2">
                    <div class="flex-column lh-1 imagename"> <span>Gaming Consoles</span></div>
                    <div> <img src="https://www.lehelmatyus.com/wp-content/uploads/woocommerce-placeholder-900x900.png" height="100" width="100" style="padding-left: 30px;" /> </div>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-2">
                <div class="d-flex justify-content-between align-items-center p-2">
                    <div class="flex-column lh-1 imagename"> <span>Smart Phones</span> </div>
                    <div> <img src="https://www.lehelmatyus.com/wp-content/uploads/woocommerce-placeholder-900x900.png" height="100" width="100" style="padding-left: 30px;" /> </div>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-2">
                <div class="d-flex justify-content-between align-items-center p-2">
                    <div class="flex-column lh-1 imagename"> <span>Television</span> </div>
                    <div> <img src="https://www.lehelmatyus.com/wp-content/uploads/woocommerce-placeholder-900x900.png" height="100" width="100" style="padding-left: 30px;" /> </div>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-2">
                <div class="d-flex justify-content-between align-items-center p-2">
                    <div class="flex-column lh-1 imagename"> <span> Laptops </span> </div>
                    <div> <img src="https://www.lehelmatyus.com/wp-content/uploads/woocommerce-placeholder-900x900.png" height="100" width="100" style="padding-left: 30px;" /> </div>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>
    </div>


    <!-- bootstrap JS link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>