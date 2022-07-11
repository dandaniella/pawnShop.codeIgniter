<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Transactions</h1>
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
                       
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th> ID</th>
                                        <th>Category</th>
                                        <th>Date</th>
                                        <th>Starting Date</th>
                                        <th>Maturity Date</th>
										<th>Expiry Date</th>
										<th>Status</th>
										<th>Created by</th>
										<th>Updated by</th>
									
										
                                    </tr>
                                </thead>
                                <tbody>
								
                                    <tr>
                                        <td></td>
										<td></td>
                                        <td>Win 95+</td>
                                        <td> 4</td>
                                        <td>X</td>
										<td></td>
										<td></td>
										<td></td>
                                        <td>Win 95+</td>
                                       
                                    </tr>
								
                            </table>


                            <select class="js-example-basic-single" name="state">
                                <option value="AL">Alabama</option>
                                ...
                                <option value="WY">Wyoming</option>
                            </select>
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
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Add User</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <!-- modal body  -->
                    <div class="modal-body">
                        <div class="container-fluid col-12">

                            <form method="post" id="form_id" name="form_id">
                                <div class="row">
                                    <div class="input-group col-md-6 mb-4">
                                        <input type="email" class="form-control" placeholder="Email" id="username" name="username">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-envelope"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-group col-md-6 mb-4">
                                        <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-lock"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-group input-group col-md-4">
                                        <div class="form-group">
                                            <label for="">username</label>
                                            <input type="email" class="form-control" id="username" name="username" style="width: 100%;">
                                        </div>
                                    </div>
                                    <div class=" col-md-4 mb-10">
                                        <div class="form-group">
                                            <label for="sex">user role</label>
                                            <select class="form-control select2" style="width: 100%;">
                                                <option selected="selected">--user role--</option>
                                                <option>Pawn Broker</option>
                                                <option>Website Manager</option>
                                                <option>Mangager</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="sex">sex</label>
                                            <select class="form-control select2" style="width: 100%;">
                                                <option selected="selected">-- sex --</option>
                                                <option>Pawn Broker</option>
                                                <option>Website Manager</option>
                                                <option>Mangager</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-group input-group col-md-4 mb-4">
                                        <div class="form-group ">
                                            <label for="validationServer01">Given name</label>
                                            <input type="email" class="form-control" id="username" name="username">
                                        </div>
                                    </div>
                                    <div class="input-group input-group col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="validationServer01">Middle name</label>
                                            <input type="email" class="form-control" id="username" name="username">
                                        </div>
                                    </div>
                                    <div class="input-group input-group col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="validationServer01">Surname</label>
                                            <input type="email" class="form-control" id="username" name="username">
                                        </div>
                                    </div>



                            </form>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="cancel" class="btn btn-secondary" data-dismiss="modal">Discard</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                    <!-- ./modal body  -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
