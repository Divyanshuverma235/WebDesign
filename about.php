<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Education Website Template</title>

	<!-- font Awesome CDN link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

	<!-- External CSS -->
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="about.css">

	<!-- JQuery CDN link -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
	
<?php include 'mainnavbar.php';?>

	<!-- Hero section starts from here -->
	<section id="about-home">
		<h2>
			About Us
		</h2>
	</section>
	<!-- Hero section ends from here -->


	<!-- About section starts from here -->
	<section id="about-container">
		<div class="about-img">
			<img src="img/a.png" alt="">
		</div>
		<div class="about-text">
			<h2>
				Welcome to TechEduca, Enhance your skills with best online courses.
			</h2>
			<p>
				You can start and finish one of these popular courses in under a day - for free! Check out the list below.. Take the course for free.
			</p>

			<div class="about-fe">
				<img src="img/fe1.png" alt="">
				<div class="fe-text">
					<h5>400+ Courses</h5>
					<p>
						You can start and finish one of these popular courses in under our site
					</p>
				</div>
			</div>
			<div class="about-fe">
				<img src="img/fe2.png" alt="">
				<div class="fe-text">
					<h5>Lifetime Access</h5>
					<p>
						You can start and finish one of these popular courses in under our site
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- About section ends from here -->


	<!-- Features section starts from here -->
	<section id="features">
		<h1>Awesome Features</h1>
		<p>Replenish man have thing gathering lights yielding shall you</p>

		<div class="fea-base">
			<div class="fea-box">
				<i class="fas fa-graduation-cap"></i>
				<h3>Scholorship Facility</h3>
				<p>
					One make creepeth, man bearing theira firmament won't great heaven
				</p>
			</div>

			<div class="fea-box">
				<i class="fa-solid fa-book-bookmark"></i>
				<h3>Dell Online Course</h3>
				<p>
					One make creepeth, man bearing theira firmament won't great heaven
				</p>
			</div>

			<div class="fea-box">
				<i class="fas fa-award"></i>
				<h3>Global Certification</h3>
				<p>
					One make creepeth, man bearing theira firmament won't great heaven
				</p>
			</div>
		</div>
	</section>
	<!-- Features section ends from here -->


	<!-- Trust section starts from here -->
	<section id="trust">
		<h1>Trusted By</h1>
		<p>Replenish man have thing gathering lights yielding shall you</p>
		<div class="trust-img">
			<img src="img/trust (1).png" alt="">
			<img src="img/trust (2).png" alt="">
			<img src="img/trust (3).png" alt="">
			<img src="img/trust (4).png" alt="">
			<img src="img/trust (5).png" alt="">
			<img src="img/trust (6).png" alt="">
		</div>
	</section>
	<!-- Trust section ends from here -->


	<!-- Footer section starts from here -->
	<footer>
		<div class="footer-col">
			<h3>Top Products</h3>
			<li>Manage Reputation</li>
			<li>Power Tools</li>
			<li>Managed Website</li>
			<li>Marketing Service</li>
		</div>

		<div class="footer-col">
			<h3>Power Tools</h3>
			<li>Jobs</li>
			<li>Marketing Service</li>
			<li>Top Products</li>
			<li>Manage Reputation</li>
		</div>

		<div class="footer-col">
			<h3>Power Tools</h3>
			<li>Managed Website</li>
			<li>Manage Reputation</li>
			<li>Top Products</li>
			<li>Marketing Service</li>
		</div>

		<div class="footer-col">
			<h3>Guides</h3>
			<li>Research</li>
			<li>Experts</li>
			<li>Managed Website</li>
			<li>Marketing Service</li>
		</div>

		<div class="footer-col">
			<h3>Newsletter</h3>
			<p>You can trust us. we only send promo offers.</p>

			<div class="subscribe">
				<input type="email" placeholder="Your email Address">
				<a href="#" class="yellow">send</a>
			</div>
		</div>

		<div class="copyright">
			<div class="pro-links">
				<i class="fab fa-facebook"></i>
				<i class="fab fa-instagram"></i>
				<i class="fab fa-linkedin-in"></i>
			</div>
		
			</footer>
		</div>
	</footer>
	<!-- Footer section ends from here -->

	<script>
		// Show menu links on burger click
		$('#menu-btn').click(function(){
			$('nav .navigation ul').addClass('active')
		});

		// Hide navbar on click function
		$('#menu-close').click(function(){
			$('nav .navigation ul').removeClass('active')
		});
	</script>
</body>
</html>