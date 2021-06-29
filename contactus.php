<?php
	include_once 'header.html';
	// include 'record.php';
?>

<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-sm-12">
				<h3 class="portfolio">Contact Details</h3>
				<ul class="address mb-5">
					<li><i class="fa fa-home"></i>3rd Floor, JDA Complex, Bagh Durbar, Kathmandu</li>
					<li><i class="fa fa-phone"></i>01-4266325, 4249453, 4216343</li>
					<li><i class="fa fa-envelope"></i>mcl@machcapital.com.np</li>
				</ul>

				<h3 class="portfolio">Contact Form</h3>
				<form id="form" method="POST" action="record.php"> <!-- action="<?php $_SERVER['PHP_SELF']; ?>" -->
					<!-- <?php
							if (isset($_GET["error"]))
							{
								if ($_GET["error"] == "emptyfields")
								{
									echo '<p class="verify">Fill All Fields!</p>';
									echo '<style>.form-control{border: 1px solid #ff0000;}</style>';
								}
							}
					?> -->

					<div id="error"></div>
					<div class="form-group row">
						<label for="Name" class="col-sm-2 col-form-label">Name:</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" placeholder="Enter Full Name..." id="name" name="name">
						</div>
					</div>
					<div class="form-group row">
						<label for="email" class="col-sm-2 col-form-label">Email:</label>
						<div class="col-sm-10">
							<input type="email" placeholder="Enter Email..." class="form-control" id="email" name="email">
						</div>
					</div>
					<div class="form-group row">
						<label for="message" class="col-sm-2 col-form-label">Message:</label>
						<div class="col-sm-10">
							<textarea type="text" placeholder="Enter Message..." class="form-control" rows="3" id="message" name="message"></textarea>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-12">
							<button type="submit" class="btn btn-primary active" id="submit" name="submit">Submit</button>
						</div>	
					</div>
				</form>
			</div>			

			<div class="col-lg-7 col-sm-12">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7065.241576133352!2d85.311912!3d27.698113000000003!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x76888f5cff05b015!2sJDA%20Office%20Complex!5e0!3m2!1sen!2snp!4v1611725652945!5m2!1sen!2snp" width="100%" height="400" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
		</div>
	</div>
</section>


<?php
	include_once 'footer.html';
?>