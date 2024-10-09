<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Blogs</title>

	<!-- font Awesome CDN link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

	<!-- External CSS -->
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="about.css">
	<link rel="stylesheet" href="blog.css">
	<link rel="stylesheet" href="course-inner.php">

	<!-- JQuery CDN link -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
	<!-- Navigation start -->
	<?php include 'mainnavbar.php';?>
	<!-- navigation end -->


		

	<!-- Hero section starts from here -->
	<section id="about-home">
		<h2>
			Blogs.
		</h2>
	</section>
	<!-- Hero section ends from here -->


	<!-- Blog container starts from here -->
	<section id="blog-container">
		<div class="blogs">
			<div class="post">
				<img src="img/b1.jpg" alt="">
				<h3>Learn Web Development in the easiest way</h3>
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing, elit. Optio enim, rerum voluptas non dolorem architecto libero, tempora laborum fugiat, deleniti, iusto maxime rem similique laudantium nostrum ad quod esse ullam modi illo?
				</p>
				<a href="post.html">Read More</a>
			</div>

			<div class="post">
				<img src="img/b2.jpg" alt="">
				<h3>Learn Web Development in the easiest way</h3>
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing, elit. Optio enim, rerum voluptas non dolorem architecto libero, tempora laborum fugiat, deleniti, iusto maxime rem similique laudantium nostrum ad quod esse ullam modi illo?
				</p>
				<a href="post.html">Read More</a>
			</div>

			<div class="post">
				<img src="img/b3.jpg" alt="">
				<h3>Learn Web Development in the easiest way</h3>
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing, elit. Optio enim, rerum voluptas non dolorem architecto libero, tempora laborum fugiat, deleniti, iusto maxime rem similique laudantium nostrum ad quod esse ullam modi illo?
				</p>
				<a href="post.html">Read More</a>
			</div>

			<div class="post">
				<img src="img/b1.jpg" alt="">
				<h3>Learn Web Development in the easiest way</h3>
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing, elit. Optio enim, rerum voluptas non dolorem architecto libero, tempora laborum fugiat, deleniti, iusto maxime rem similique laudantium nostrum ad quod esse ullam modi illo?
				</p>
				<a href="post.html">Read More</a>
			</div>

			<div class="post">
				<img src="img/b2.jpg" alt="">
				<h3>Learn Web Development in the easiest way</h3>
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing, elit. Optio enim, rerum voluptas non dolorem architecto libero, tempora laborum fugiat, deleniti, iusto maxime rem similique laudantium nostrum ad quod esse ullam modi illo?
				</p>
				<a href="post.html">Read More</a>
			</div>
		</div>
		<div class="cate">
			<h2>Categories</h2>
			<hr>
			<a href="#">Web Development</a>
			<hr>
			<a href="#">Web Design</a>
			<hr>
			<a href="#">App Development</a>
			<hr>
			<a href="#">Frontend Web</a>
			<hr>
			<a href="#">Python Programming</a>
			<hr>
			<a href="#">Javascript hacks</a>
		</div>
	</section>
	<!-- Blog container ends from here -->


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
				<a href="#" class="yellow">Send</a>
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