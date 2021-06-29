<?php
	include_once 'header.html';
?>

<section>
	<div class="container">
		<div class="secondNav mb-4">
			<ul>
				<a href="pms.php">
					<li>Portfolio Management Service</li>
				</a>
				<a href="discretionary.php">
					<li>Discretionary Portfolio Management</li>
				</a>
				<a href="nondiscretionary.php">
					<li>Non-Discretionary Portfolio Management</li>
				</a>
				<a href="pmsfaqs.php">
					<li>FAQ</li>
				</a>
			</ul>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div id="demo" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ul class="carousel-indicators">
						<li data-target="#demo" data-slide-to="0" class="active"></li>
						<li data-target="#demo" data-slide-to="1"></li>
					</ul>
			  		<!-- The slideshow -->
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="Images/pmsservice.jpg" width="1100" height="400">
						</div>
						<div class="carousel-item">
							<img src="Images/pmsservice2.jpg" width="1100" height="400">
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
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 mt-5">
				<h3 class="portfolio">portfolio management services</h3>
				<p class="portfolioText">
					A Customized Solution to Your Investments in Equity and Fixed Income Instruments.
				</p>
				<p class="portfolioText">
					As a licensed portfolio manager, Machhapuchchhre Kriti Capital manages over NPR 570 million of funds of individual and institutional investors who aim to build a diversified portfolio with minimized risk and maximized returns.
				</p>
				<p class="portfolioText">
					<strong>WHAT WE DO?</strong>
				</p>
				<p class="portfolioText">
					We will assist you to identify your needs, determine your risk profile, define your objectives, and finally, set your investment strategy. We work diligently to ensure optimal returns on your investments by building your portfolio from a range of asset classes, such as equity and fixed income instruments. You can choose between the following two unique services that suit to your requirement at best:
				</p>
				<ul class="portfolioText" style="padding-left: 3%;">
					<li>Discretionary Portfolio Management</li>
					<li>Non-Discretionary Portfolio Management</li>
				</ul>
			</div>
		</div>
		<div class="row mt-5">
			<h2 class="serviceBackground" style="font-size: 1.5rem;">Download Form</h2>
		</div>
		<div class="row mt-5">
			<table class="table table-bordered table-fluid text-center">
				<thead class="thead-light">
					<th>Title</th>
					<th>Download
				</thead>
				<tbody>
					<tr>
						<td class="text-secondary">PMS Individual Account Opening</td>
						<td><a href="Files/pmsIndividualAccountForm.pdf" class="btn btn-primary active" role="button" download target="_blank">Download</a></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="row mt-5">
			<h2 class="serviceBackground" style="font-size: 1.5rem;">More Services</h2>
			</div>
		</div>
		<div class="owl-one owl-carousel owl-theme mt-5">
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


<?php
	include_once 'footer.html';
?>