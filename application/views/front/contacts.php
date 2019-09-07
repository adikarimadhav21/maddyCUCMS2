<section class ="conatct-content">
	<div class="container">
		<div class ="row">
			<div class="col-xs-12 col-sm-12 col-lg-4">
				<h1>My Address</h1>

				<img src="images/myLogo.png" class="img-fluid"/>

				<address class="contact-address">
					<span>Madhav Adhikari</span> <br />
					<i class="fa fa-map-marker-alt"></i> Mulpani, Kathmandu, Nepal <br /> <!-- https://fontawesome.com/cheatsheet -->
					<i class="fa fa-phone-square-alt"></i> +977-9846782604 <br />
					<i class="fa fa-envelope-open"></i> <a href="mailto:adhikarimadhav21@gmail.com" class ="color-blue">adhikarimadhav21@gmail.com</a> <br />
					<i class="fab fa-facebook-square fa-2x m-1"></i>
					<i class="fab fa-twitter-square fa-2x m-1"></i>
					<i class="fab fa-instagram fa-2x m-1"></i>
					<i class="fab fa-linkedin fa-2x m-1"></i>
				</address>

				<h1>Find me on Google!!</h1>
				<div class="map-place">
					<a href="https://www.google.com/maps/place/SunCity+Apartments/@27.6962199,85.369398,17z/data=!4m5!3m4!1s0x39eb1a3983853ffb:0xcd261f2c806ed267!8m2!3d27.6928099!4d85.3709096"><img src="images/map.png" class="img-fluid"></a>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-lg-8">
				<div>
					<h1>Contact Me !</h1>
				</div>
				<form role="form" method="post" action="<?php echo base_url(); ?>Contacts/sendMail" enctype="multipart/form-data">
					<div class="form-group">
						<label for="FullName">FullName</label>
						<input type="text" class="form-control" name="FullName" >
					</div>
					<div class="form-group">
						<label for="address">Address</label>
						<input type="text" class="form-control" name="address">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">E-mail</label>
						<input type="email" class="form-control" name="email">
					</div>
					<div class="form-group">
						<label for="message">Message</label>
						<textarea class="form-control" name="message" rows="3"></textarea>
					</div>
					<input type="submit" class="btn btn-primary" value="Submit">
				</form>
			</div>
		</div>
	</div>
</section>
