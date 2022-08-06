<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Items</h1>
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
                                <!-- <span>Items</span> -->
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <button type="button" class="btn btn-primary float-sm-right" data-toggle="modal" data-target="#exampleModal">
                                   Add an Item
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="adminItems" class="table table-bordered table-hover dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Item Name</th>
                                        <th>Item Type</th>
                                        <th>Item Price</th>
                                        <th>Item Category</th>
                                        <th>Item Image</th>
										<th>Item Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                </tbody>
                              
                            </table>


                           
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
                        <h3 class="modal-title" id="exampleModalLabel">Add an Item</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <!-- modal body  -->
                    <div class="modal-body">
                        <div class="container-fluid col-12">

                            <form method="post" id="form_id" name="form_id">
                                <div class="row">
                                    <div class="form-group col-md-6 mb-4">
										<label for="" class="form-label">Item Name</label>
                                        <input type="text" class="form-control" placeholder="" id="item_name" name="item_name">
                                       
                                    </div>

                                    <div class="input-group col-md-6 mb-4">
										<label for="" class="form-label">Item Type</label>
										<select class="form-select select2" style="width: 100%;">
                                                <option selected="selected">--Item Type--</option>
                                                <option>Pawned Item</option>
                                                <option>Defaulted Item</option>
                                                <option>Sold Item</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-group input-group col-md-4">
                                        <div class="form-group">
                                            <label for="" class="form-label">Item Image</label>
                                            <input type="file" class="form-control" id="username" name="username" style="width: 100%;">
                                        </div>
                                    </div>
                                    <div class=" col-md-4 mb-10">
                                        <div class="form-group">
                                            <label for="" class="form-label">Item Category</label>
                                            <select class="form-control select2" style="width: 100%;">
                                                <option selected="selected">--Item Category--</option>
                                                <option>Shoes</option>
                                                <option>Accessories</option>
                                                <option>Appliances</option>
												<option>Jewelry</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="" class="form-label">Item Price</label>
											<input type="number" class="form-control" id="username" name="username" style="width: 100%;">
                                        </div>
                                    </div>
                                </div>
								<div class="row">
									<div class="col-md-12 ">
                                        <div class="form-group col-md-12">
                                            <label for="" class="form-label">Item Description</label>
                                            <textarea class="form-control" name="" id="" ></textarea>
                                        </div>
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