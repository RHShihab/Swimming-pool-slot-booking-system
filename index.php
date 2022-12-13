<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>IUB Swimming Pool Slot Booking System</title>
	<!-- All CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
	<link href="./css/landingPage.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

	<?php include('adminNav.php');?>
    
    <!--IUB Swimming Pool Photos Header starts-->
	<section id="home">
		<div class="carousel-caption">
			<h5>IUB Swimming Pool Slot Booking System</h5>
			<p>An easy way to book your slot online. Completely Hassle Free.</p>
			<p><a class="btn btn-warning mt-3" href="booking.php">Book Your Slot Now</a></p>
		</div>
		<div class="carousel slide" data-bs-ride="true" id="carouselExampleIndicators">
			<div class="carousel-indicators">
				<button aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carouselExampleIndicators" type="button"></button>
					<button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselExampleIndicators" type="button"></button>
				</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img alt="..." class="d-block w-100" src="./img/pic1.jpg">
				</div>
				<div class="carousel-item">
					<img alt="..." class="d-block w-100" src="./img/pic2.jpg">
				</div>
			</div><button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="visually-hidden">Previous</span></button> <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span></button>
		</div>
	</section>
    <!--IUB Swimming Pool Photos Header ends-->
    <!-- about section starts -->
	<section class="about section-padding" id="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-12 col-12">
					<div class="about-img"><img alt="" class="img-fluid" src="img/about.jpg"></div>
				</div>
				<div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
					<div class="about-text">
						<h2>One of the most efficient way to<br>
						Book your Swimming SLots online</h2>
						<p>Automated way to book you slots online. No hassle. Save your time by booking online.</p><a class="btn btn-warning" href="#">Learn More</a>
					</div>
				</div>
			</div>
		</div>
	</section><!-- about section Ends -->
	<!-- Contact Start -->
	<section class="contact section-padding" id="contact">
		<div class="container mt-5 mb-5">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header text-center pb-5 qform">
						<h2>Contact Us</h2>
						<form action="query.php" method="post">
							<div class="qform-group">
								<input type="text" name="name" placeholder="Enter Your Name" required>
							</div>
							<div class="qform-group">
								<input type="email" name="email" placeholder="Enter Your Email" required>
							</div>
							<div class="qform-group">
								<input type="text" name="sub" placeholder="Enter Your Subject" required>
							</div>
							<div class="qform-group">
								<input type="text" name="msg" placeholder="Enter Your Message" required>
							</div>
							<div class="btn">
								<input type="submit" name="submit" value="submit">

							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
    <!-- Contact End -->
    <!-- footer starts -->
	<footer class="bg-dark p-2 text-center">
		<div class="container">
			<p class="text-white">IUB Swimming Pool 2022</p>
		</div>
	</footer>
	<!-- footer ends -->
	<!-- All Js -->
	<script src="js/bootstrap.bundle.min.js"></script> 
</body>
</html>
