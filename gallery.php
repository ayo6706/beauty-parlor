<?php
include 'admin/db.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>QBSSH Salon | Gallery</title>
		<!-- Loading third party fonts -->
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="fonts/novecento-font/novecento-font.css" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>

		<div id="site-content">
			
			<header class="site-header">
				<div class="container">
					<a href="index.html"> <img src="logo1.jpg" /> </a>
							<small class="site-description">Keep Your Perfect Look Intact</small>
						</div>
					</a> <!-- #branding -->

					
					<!-- Default snippet for navigation -->
					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="index.html">Home</a></li>
							<li class="menu-item"><a href="about.html">About</a></li>
							<li class="menu-item"><a href="service.html">Services</a></li>
							<li class="menu-item current-menu-item"><a href="gallery.html">Gallery</a></li>
							<li class="menu-item"><a href="contact.html">Contact</a></li>
						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>
				</div>
			</header>

			<main class="main-content">
				<div class="page">
					<div class="container">
						<div class="text-center">
							<div class="filter-links filterable-nav">
								<select class="mobile-filter">
									<option value="*">Show all</option>
									<option value=".hair">hair</option>
									<option value=".manicure">manicure</option>
									<option value=".pedicure">pedicure</option>
									<option value=".face">face</option>
								</select>
								<a href="#" class="current wow fadeInRight" data-filter="*">Show all</a>
								<a href="#" class="wow fadeInRight" data-wow-delay=".2s" data-filter=".hair">hair</a>
								<a href="#" class="wow fadeInRight" data-wow-delay=".4s" data-filter=".manicure">manicure</a>
								<a href="#" class="wow fadeInRight" data-wow-delay=".6s" data-filter=".pedicure">pedicure</a>
								<a href="#" class="wow fadeInRight" data-wow-delay=".8s" data-filter=".face">face</a>
						</div>


						                    <?php
        $query = "SELECT * FROM gallery";
            $nos= 1;
			if ($result = mysqli_query($conn, $query)){
			     while ($row=mysqli_fetch_assoc($result)) {
				echo'


						<div class="filterable-items">
							<div class="gallery-item filterable-item  '.$row['class'].'">
								<a href="pictures/'.$row['img'].'">
									<figure class="featured-image">
										<img src="pictures/'.$row['img'].'" alt="">
										<figcaption>
											<h2 class="gallery-title">'.$row['title'].'</h2>
											<p>'.$row['about'].'</p>
										</figcaption>
									</figure>
								</a>
							</div>
							
';}}?>
							
						</div>
					</div>
				</div>
			</main>

			<footer class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="widget contact-widget">
								<h3 class="widget-title">Contact</h3>
								<div class="contact-info">
									<address>
										<img src="images/icon-map-small.png" class="icon">
										<p><strong>Company name</strong> 563 Avenue Street, New York</p>
									</address>
									<a href="mailto:contact@companyname.com" class="mail"><img src="images/icon-envelope-small.png" class="icon">contact@companyname.com</a>
									<a href="tel:(500)942042259" class="phone"><img src="images/icon-phone-small.png" class="icon">(500)942042259</a>
								</div>
							</div>
						</div>
						 
						<div class="col-md-6">
							<div class="widget">
								<h3 class="widget-title">Newsletter</h3>
								<form action="#" class="subscribe-form">
									<input type="email" placeholder="Enter our email...">
									<input type="submit" value="Sign up">
								</form>
							</div>
						</div>
					</div>

					<div class="colophon">
						<p>Copyright 2014 Company name. Designed by Themezy. All rights reserved.</p>
					</div>
				</div>
			</footer>
		</div>
		

		

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>