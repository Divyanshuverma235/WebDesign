<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact Us</title>

	<!-- font Awesome CDN link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

	<!-- External CSS -->
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="about.css">
	<link rel="stylesheet" href="course-inner.css">
	<link rel="stylesheet" href="contact.css">

	<!-- JQuery CDN link -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
	<!-- Navigation start -->
	<nav>
		<img src="img/logo.svg" class="logo" alt="">

		<div class="navigation">
			<ul>
				<i id="menu-close" class="fas fa-times"></i>
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">About Us</a></li>
				<li><a href="blog.html">Blog</a></li>
				<li><a href="courses.html">Courses</a></li>
				<li><a href="contact.html" class="active">Contact</a></li>
			</ul>

			<img src="img/menu.png" id="menu-btn" alt="">
		</div>
	</nav>
	<?php include 'Localnavbar.php'; ?>



	<!-- Hero section starts from here -->
	<section id="about-home">
		<h2>
			Contact Us
		</h2>
	</section>
	<!-- Hero section ends from here -->


	<section id="contact">
		<div class="getin">
			<h2>Get in touch</h2>
			<p>Looking for help? Fill the form and start a new adventure.</p>

			<div class="getin-details">
				<h3>Headquaters</h3>
				<div>
					<i class="fa-solid fa-map get"></i>
					<p>744 New York Ave, Brooklyn, kings, New York 10224</p>
				</div>

				<h3>Phone</h3>
				<div>
					<i class="fas fa-phone-alt get"></i>
					<p>(+91) 98671 23456 <br> (+91) 98671 23456</p>
				</div>

				<h3>Support</h3>
				<div>
					<i class="fa-solid fa-envelope get"></i>
					<p>tech@educa.com <br> info@educa.com </p>
				</div>

				<h3>Follow Us</h3>
				<div class="pro-links">
					<i class="fab fa-facebook"></i>
					<i class="fab fa-instagram"></i>
					<i class="fab fa-linkedin-in"></i>
					<i class="fab fa-behance"></i>
				</div>
			</div>
		</div>

		<div class="form">
			<h4>Let's Connect</h4>
			<p>Lorem ipsum, dolor sit amet consectetur.</p>
			<form class="" method="post" action="send.php">
        <h1>Contact Us</h1>
        Email: <br> <label><input type="email" name="email" value=""><br><br>
        Subject: <br><input type="text" name="subject"value=""><br><br>
        Message: <br><textarea name="message"value=""></textarea><br><br>
        <button type="submit" name="send">Send</button>
    </form>
		</div>
		</form>
	</section>
	

	<section id="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30711686.029386617!2d64.41853642919325!3d20.009139591170264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1652012148253!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</section>


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
				<a href="#" class="yellow"></a>
			</div>
		</div>

		<div class="copyright">
			
			<div class="pro-links">
				<i class="fab fa-facebook"></i>
				<i class="fab fa-instagram"></i>
				<i class="fab fa-linkedin-in"></i>
			</div>
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