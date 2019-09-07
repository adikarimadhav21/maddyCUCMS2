	<!-- /nav -->
	<div id="page-wrapper">

		<div class="container-fluid">

			<!-- Page Heading -->
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">
					<?php echo $users[0]->full_name; ?>
					</h1>
				</div>
			</div>
			<!-- /.row -->

			<div class="row">
				<div class="col-lg-12">

					<div class="row">
						<div class="col-xs-12">
<!--							<img src="--><?php //echo base_url().'/application/assets/uploads/min/'.$users[0]->Image; ?><!--" class="img-responsive" alt="--><?php //echo $users[0]->Image; ?><!--">-->

							<div class="table-responsive">
								<table class="table table-striped">
									<tr>
										<td width="30%"><strong>Address</strong></td>
										<td width="70%"><?php echo $users[0]->address; ?></td>
									</tr>
									<tr>
										<td><strong>Phone</strong></td>
										<td><?php echo $users[0]->phone; ?></td>
									</tr>
									<tr>
										<td><strong>Email</strong></td>
										<td><?php echo $users[0]->email; ?></td>
									</tr>
									<tr>
										<td><strong>UserName</strong></td>
										<td><?php echo $users[0]->user_name; ?></td>
									</tr>

									
							<tr>
								<td>
								<a href="<?php echo base_url().'AdminDashboard/updatePassword/'.$users[0]->id ?>" class="btn btn-danger btn-sm"><i class="fa fa-key"></i> Update Password</a>
								<a href="<?php echo base_url().'AdminDashboard/UpdateUser/'.$users[0]->id ?>" class="btn btn-danger btn-sm"><i class="fa fa-edit"></i> Edit User</a>
									<a href="<?php echo base_url().'AdminDashboard/DeleteUser/'.$users[0]->id ?>" class="btn btn-danger btn-sm"><i class="fa fa-edit"></i>Delete User</a>

								</td>
							</tr>

						</table>
					</div>

				</div>
			</div>

		</div>
	</div>
	<!-- /.row -->

</div>
<!-- /.container-fluid -->

</div>
        <!-- /#page-wrapper -->
