<div id="page-wrapper">

	<div class="container-fluid">

		<!-- Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					View/Edit Users
				</h1>
			</div>
		</div>
		<!-- /.row -->

		<div class="row">
			<div class="col-lg-12">
				<div class="table-responsive">
					<a href="<?php echo base_url(); ?>AdminDashboard/addUser" class="btn btn-danger btn-sm page_buttom">Add New User</a>
					<table class="table table-striped table-bordered">

						<tr>
							<td><strong>S.N.</strong></td>
							<td><strong>Name</strong></td>
							<td><strong>Username</strong></td>
							<td><strong>Options</strong></td>
						</tr>

						
						<?php 
						$i=1;
						foreach($users->result() as $user)
						{


							?>
							<tr>
								<td><?php echo $user->id; ?></td>
								<td><?php echo $user->full_name; ?></td>
								<td><?php echo $user->user_name; ?></td>
								<td><a type="button" class="btn btn-sm btn-danger" href="<?php echo base_url().'AdminDashboard/viewUser/'.$user->id ?>"><i class="fa fa-eye"></i> View</a>
									<a type="button" class="btn btn-sm btn-danger" href="<?php echo base_url().'AdminDashboard/UpdateUser/'.$user->id ?>"><i class="fa fa-edit"></i> Edit</a>
								<a type="button" class="btn btn-sm btn-danger" href="<?php echo base_url().'AdminDashboard/deleteUser/'.$user->id ?>"><i class="fa fa-edit"></i> Delete</a></td>

							</tr>
								<?php
							}

							?>


						</table>
					</div>

				</div>
			</div>
			<!-- /.row -->

		</div>
		<!-- /.container-fluid -->

	</div>
        <!-- /#page-wrapper -->
