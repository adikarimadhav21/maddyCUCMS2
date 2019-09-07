<div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Update User
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">

                        <form role="form" action="<?php echo base_url().'AdminDashboard/submitUpdatedUser/'.$userArray[0]->id ?>" method="POST" enctype="multipart/form-data">
                            
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control" name="name" value="<?php echo $userArray[0]->full_name; ?>">
                            </div>
                            
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" name="address" value="<?php echo $userArray[0]->address; ?>">
                            </div>
                            
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" name="phone" value="<?php echo $userArray[0]->phone; ?>">
                            </div>
                                                                                    
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" value="<?php echo $userArray[0]->email; ?>">
                            </div>

                            <div class="form-group">
                                <label>Photo</label>
<!--                                <img src="--><?php //echo base_url().'application/assets/uploads/'.$userArray[0]->Image; ?><!--" class="img-thumbnail thumbnail-img">-->
                                <input type="file" class="form-control" name="photo">
                            </div>

                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" value="<?php echo $userArray[0]->user_name; ?>" disabled>
                            </div>


                            <input type="submit" class="btn btn-default" Value="Submit">
                            <button type="reset" class="btn btn-default">Reset Button</button>

                        </form>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
