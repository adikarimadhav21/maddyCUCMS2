        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin Dashboard
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                
                <div class="col-xs-12 col-sm-6 col-lg-3">
                <table class="table table-striped">
                        <tr>
                            <th>Manage Users</th>
                        </tr>
                        <tr>
                            <td scope="row"><a href="<?php echo base_url(); ?>AdminDashboard/addUser">Add User</a></td>
                            </tr>
                            <tr>
                            <td scope="row"><a href="<?php echo base_url(); ?>AdminDashboard/viewAllUsers">View/Update Users</a></td>
                            </tr>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-3">
                <table class="table table-striped">
                        <tr>
                            <th>Manage Pages</th>
                        </tr>
                        <tr>
                        <td scope="row"><a href="<?php echo base_url(); ?>AdminDashboard/addPage">Add Page</a></td>
                            </tr>
                            <tr>
                            <td scope="row"><a href="<?php echo base_url(); ?>AdminDashboard/viewAllPages">View Pages</a></td>
                            </tr>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-3">
                <table class="table table-striped">
                        <tr>
                            <th>Manage Posts</th>
                        </tr>
                        <tr>
                            <td scope="row">Add Post</td>
                            </tr>
                            <tr>
                            <td scope="row">View/Update Posts</td>
                            </tr>
                    </table>
                </div>
                    
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
</div>
