<section class="main-content">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6">
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<div class="about-image">
							<img src="images/madhav_adhikari.jpg" class=" img-thumbnail img-fluid" />
						</div>
					</div>
					<div class="col-xs-12 col-sm-6">
						<div class="about-content">
							<p>
								<strong>Name:</strong> Madhav Adhikari <br />
								<strong>Profile:</strong> Software Engineer <br />
								<strong>E-mail:</strong> adhikarimadhav21@gmail.com <br />
								<strong>Phone:</strong> +977-9841135812
							</p>
						</div>
					</div>
				</div>
				<h1 class="heading"> Skill</h1>
				<div class="content">
					<span>HTML</span>
					<span class ="float-right">5%</span>
					<div class="progress">
						<div class="progress-bar" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<span>CSS</span>
					<span class ="float-right">25%</span>
					<div class="progress">
						<div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<span>JavaScript</span>
					<span class ="float-right">50%</span>
					<div class="progress">
						<div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<span>Jquery</span>
					<span class ="float-right">75%</span>
					<div class="progress">
						<div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<span>Bootstrap</span>
					<span class ="float-right">100%</span>
					<div class="progress">
						<div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="heading">
					<h1><?php echo $getPageInfoById[0]->title; ?></h1>
				</div>
				<div class="content">
					<p>
						<?php echo $getPageInfoById[0]->page_content;?>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
