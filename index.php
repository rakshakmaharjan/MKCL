<?php
	include_once 'header.html';
?>

<div id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
				<img src="Images/notice.png" width="100%" height="auto">
			</div>
		</div>
	</div>
</div>
<!-- For multiple above modal set different mymodal div and its script in footer-->

<section>
	<div id="demo" class="carousel slide" data-ride="carousel">

		<!-- Indicators -->
		<ul class="carousel-indicators">
			<li data-target="#demo" data-slide-to="0" class="active"></li>
			<li data-target="#demo" data-slide-to="1"></li>
			<li data-target="#demo" data-slide-to="2"></li>
			<li data-target="#demo" data-slide-to="3"></li>
			<li data-target="#demo" data-slide-to="4"></li>
		</ul>
  
		<!-- The slideshow -->
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="Images/slide1.jpg" width="1100" height="400">
			</div>
			<div class="carousel-item">
				<img src="Images/slide2.jpg" width="1100" height="400">
			</div>
			<div class="carousel-item">
				<img src="Images/slide3.jpg" width="1100" height="400">
			</div>
			<div class="carousel-item">
				<img src="Images/slide4.jpg" width="1100" height="400">
			</div>
			<div class="carousel-item">
				<img src="Images/slide5.jpg" width="1100" height="400">
			</div>
		</div>
  
		<!-- Left and right controls -->
		<a class="carousel-control-prev" href="#demo" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>
		<a class="carousel-control-next" href="#demo" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>
	</div>
</section>

<section>
	<div class="container mt-5">
		<div class="row">
			<h2 class="serviceBackground" style="font-size: 1.8rem;">Our Services</h2>
		</div>

		<div class="owl-one owl-carousel owl-theme mt-5">
			<div class="item">
				<a href="pms.php" style="text-decoration: none; color: #000000;"><div class="serviceItem">
					<span>
						<img class="img-responsive" src="Images/Services/pms.png">
					</span>
				</div>
				<h5 class="serviceTitle">Portfolio Management Services</h5></a>
			</div>
			<div class="item">
				<a href="demat.php" style="text-decoration: none; color: #000000;"><div class="serviceItem">
					<span>
						<img class="img-responsive" src="Images/Services/demat.png">
					</span>
				</div>
				<h5 class="serviceTitle">Depository Participant & DEMAT Services</h5></a>
			</div>
			<div class="item">
				<a href="corporate.php" style="text-decoration: none; color: #000000;"><div class="serviceItem">
					<span>
						<img class="img-responsive" src="Images/Services/corporate.png">
					</span>
				</div>
				<h5 class="serviceTitle">Corporate Advisory & Financial Services</h5></a>
			</div>
			<div class="item">
				<a href="equity.php" style="text-decoration: none; color: #000000;"><div class="serviceItem">
					<span>
						<img class="img-responsive" src="Images/Services/equity.png">
					</span>
				</div>
				<h5 class="serviceTitle">Private Equity & Venture Capatalist Services</h5></a>
			</div>
			<div class="item">
				<a href="research.php" style="text-decoration: none; color: #000000;"><div class="serviceItem">
					<span>
						<img class="img-responsive" src="Images/Services/research.png">
					</span>
				</div>
				<h5 class="serviceTitle">Research</h5></a>
			</div>
			<div class="item">
				<a href="underwriting.php" style="text-decoration: none; color: #000000;"><div class="serviceItem">
					<span>
						<img class="img-responsive" src="Images/Services/underwriting.png">
					</span>
				</div>
				<h5 class="serviceTitle">Underwriting</h5></a>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-6  col-md-6 col-sm-12">
				<img src="Images/IndexAbout.jpg" width="100%" height="100%" style="border-radius: 5px;">
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<h2 class="indexAbout">About Us</h2>
				<p class="portfolioText">
					Machhapuchchhre Kriti Capital Ltd., established in 2011, is one of the pioneer investment banking and investment management service providers of Nepal. Kriti Capital works with the motto of "Creating Growth Opportunities". Upholding its motto, Kriti Capital promotes entrepreneurial initiatives and fosters institutional development by making necessary capital available to committed and dynamic entrepreneurs.
				</p>
				<p class="portfolioText">
					Machhapuchchhre Kriti Capital has been authorized as a public limited company, and also has been licensed by the...
				</p>
				<p class="portfolioText">
					<a href="ourCompany.php">Read More...</a>
				</p>
				<p class="portfolioText">
					<ul class="aboutList">
						<a href="boardOfDirectors.php"><li>Board of Directors</li></a>
						<a href="managementTeam.php"><li>Management Team</li></a>
						<a href="milestone.php"><li>Milestone</li></a>
					</ul>
				</p>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container mt-5">
		<div class="testimonials">
			<div class="row">
				<h2 class="serviceBackground" style="font-size: 1.8rem;">TESTIMONIALS</h2>
			</div>

			<div class="row">
				<div class="owl-two owl-carousel owl-theme mt-4">
					<div class="card">
						<p>
							"When I got introduced to the concept of portfolio management by the Team MKCL, the...
							<span>Shilpa Shrestha</span>
						</p>
					</div>
					<div class="card">
						<p>
							"The question is not about how much money is being managed but in what way is the money is... 
							<span>Mr. Shubhadayak Shah</span>
						</p>
					</div>
					<div class="card">
						<p>
							"We have been working with MKCL for past few years, and... 
							<span>Bir Bahadur Ghale,<br>MD, Hydro Energy Concern</span>
						</p>
					</div>
					<div class="card">
						<p>
							"We are absolutely delighted by the customized services MKCL... 
							<span>Suvekchya International Hospital And Research Center</span>
						</p>
					</div>
					<div class="card">
						<p>
							"I sought financial advisory service from MKCL for my project. The team of hig...
							<span>Nilesh Manandhar</span>
						</p>
					</div>
					<div class="card">
						<p>
							"Thank you MKCL and NICA Bank for helping us establish our printing press."
							<span>CTP Nepal</span>
						</p>
					</div>
					<div class="card">
						<p>
							"Service from Kriti Capital & Investments Ltd is very professional. Their...
							<span>Mr. Abhishek Bir Singh Tuladhar</span>
						</p>
					</div>
				</div>
				<a href="testimonials.php" class="btn btn-primary active" role="button">Read More</a>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container mt-5">
		<div class="row">
			<h2 class="serviceBackground" style="font-size: 1.8rem;">Clientele</h2>
		</div>

		<div class="owl-four owl-carousel owl-theme mt-5">
			<div class="clienteleImage">
				<img class="img-responsive" src="Images/clients/client1.png">
			</div>
			<div class="clienteleImage">
				<img class="img-responsive" src="Images/clients/client2.png">
			</div>
			<div class="clienteleImage">
				<img class="img-responsive" src="Images/clients/client3.png">
			</div>
			<div class="clienteleImage">
				<img class="img-responsive" src="Images/clients/client4.png">
			</div>
			<div class="clienteleImage">
				<img class="img-responsive" src="Images/clients/client5.png">
			</div>
			<div class="clienteleImage">
				<img class="img-responsive" src="Images/clients/client6.png">
			</div>
			<div class="clienteleImage">
				<img class="img-responsive" src="Images/clients/client7.png">
			</div>
			<div class="clienteleImage">
				<img class="img-responsive" src="Images/clients/client8.png">
			</div>
			<div class="clienteleImage">
				<img class="img-responsive" src="Images/clients/client9.png">
			</div>
			<div class="clienteleImage">
				<img class="img-responsive" src="Images/clients/client10.png">
			</div>
			<div class="clienteleImage">
				<img class="img-responsive" src="Images/clients/client11.png">
			</div>
			<div class="clienteleImage">
				<img class="img-responsive" src="Images/clients/client12.png">
			</div>
			<div class="clienteleImage">
				<img class="img-responsive" src="Images/clients/client13.png">
			</div>
			<div class="clienteleImage">
				<img class="img-responsive" src="Images/clients/client14.png">
			</div>
			<div class="clienteleImage">
				<img class="img-responsive" src="Images/clients/client15.png">
			</div>
			<div class="clienteleImage">
				<img class="img-responsive" src="Images/clients/client16.png">
			</div>
			<div class="clienteleImage">
				<img class="img-responsive" src="Images/clients/client17.png">
			</div>
			<div class="clienteleImage">
				<img class="img-responsive" src="Images/clients/client18.png">
			</div>
			<div class="clienteleImage">
				<img class="img-responsive" src="Images/clients/client19.png">
			</div>
			<div class="clienteleImage">
				<img class="img-responsive" src="Images/clients/client20.png">
			</div>
			<div class="clienteleImage">
				<img class="img-responsive" src="Images/clients/client21.png">
			</div>
			<div class="clienteleImage">
				<img class="img-responsive" src="Images/clients/client22.png">
			</div>
		</div>
	</div>
</section>

<?php
	include_once 'footer.html';
?>