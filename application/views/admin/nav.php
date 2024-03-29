<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo base_url(); ?>AdminDashboard/">Madhav Adhikari | Content Management System</a>
		</div>
		<!-- Top Menu Items -->
		<ul class="nav navbar-right top-nav">
			
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $CurrentUserInfo[0]-> full_name; ?> <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li>
						<a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
					</li>
					<li class="divider"></li>
					<li>
						<a href="<?php echo base_url(); ?>AdminDashboard/Logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
					</li>
				</ul>
			</li>
		</ul>
		<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="<?php echo base_url(); ?>AdminDashboard"> Dashboard</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#user"> Manage User <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="user" class="collapse">
                            <li>
                                <a href="<?php echo base_url(); ?>AdminDashboard/addUser">Add User</a>
                            </li>
                            <li>
							<a href="<?php echo base_url(); ?>AdminDashboard/viewAllUsers">View/Update User</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#page"> Manage Page <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="page" class="collapse">
                            <li>
                                <a href="<?php echo base_url(); ?>AdminDashboard/addPage">Add Page</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>AdminDashboard/viewAllPages">View/Update Page</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
	</nav>
	<!-- /nav -->
