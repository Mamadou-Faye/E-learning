<?php require "session.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Courses</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Elearn project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/video-js/video-js.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/courses.css">
<link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
			
		<!-- Top Bar -->
		<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
								<ul class="top_bar_contact_list">
									<li><div class="question">Que puisse vous aiider svp?</div></li>
									<li>
										<div>(+221) 78 475 16 39</div>
									</li>
									<li>
										<div>line119549@gmail.com</div>
									</li>
								</ul>
								<div class="top_bar_login ml-auto">
									<ul>
										
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="#">
									<div class="logo_content d-flex flex-row align-items-end justify-content-start">
										<div class="logo_img"><img src="images/logo.png" alt=""></div>
										<div class="logo_text">apprenndre</div>
									</div>
								</a>
							</div>
							<nav style="display: flex;" class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li><a href="index.php">acceuil</a></li>
									<li><a href="about.php">a propos de nous</a></li>
									<li class="active"><a href="courses.php">cours</a></li>
									<li><a href="contact.php">contact</a></li>
								</ul>
								<div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>
								<?php 
									if (!isset($_SESSION['idPseudo'])) {
										?>
								<div style="margin-left: 2rem; display: flex;" class="search_button1"><a href="#"><i style="color: #181818;" class="fa fa-user" aria-hidden="true"></i>
									<ul class="nav navbar-nav">
							            <li><a style="color: #181818;" href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><!-- <span class="fa fa-user"></span> --><!--  Sign Up  --><span class="caret"></span> </a>
							            <ul class="dropdown-menu" style="padding-left: 1rem">
							              <li> <a style="color: #000;" href="espaceMembres/connexion.php">membre</a></li>
							              <li> <a style="color: #000;" href="#">tuteur</a></li>
							              <li> <a style="color: #000;" href="espaceAdmin/adminConnexion.php">Admin</a></li>
							            </ul>
							            </li>
							        </ul></a>
								</div>
										<?php
									}else{
										?>
								<div style="margin-left: 2rem" class="search_button"><a href="espaceMembres/profil.php?id=<?= $_SESSION['idPseudo'] ?>"><img style="width: 35px; height: 35px;
								border-radius: 50%" src="espaceMembres/membres/avatars/<?php echo $userinfo['avatar'] ?>"></a></div>
										<?php
									}
								?>

								<!-- Hamburger -->

								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Search Panel -->
		<div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
							<form action="#" class="header_search_form">
								<input type="search" class="search_input" placeholder="Search" required="required">
								<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>			
		</div>			
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="index.html">Acceuil</a></li>
				<li class="menu_mm"><a href="courses.html">Course</a></li>
				<li class="menu_mm"><a href="instructors.html">Instructeurs</a></li>
				<li class="menu_mm"><a href="#">Evénements</a></li>
				<li class="menu_mm"><a href="blog.html">Blog</a></li>
				<li class="menu_mm"><a href="contact.html">Contact</a></li>
			</ul>
		</nav>
		<div class="menu_extra">
			<div class="menu_phone"><span class="menu_title">téléphone:</span>(009) 35475 6688933 32</div>
			<div class="menu_social">
				<span class="menu_title">suivez - nous</span>
				<ul>
					<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<!-- Home -->

	<div class="home">
		<!-- Background image artist https://unsplash.com/@thepootphotographer -->
		<div class="home_background parallax_background parallax-window" data-parallax="scroll" data-image-src="images/courses.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title">A propos de nous</div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="index.html">Acceuil</a></li>
									<li>A propos de nous</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Courses -->

	<div class="courses">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="section_title text-center"><h2>Choisissez votre cours</h2></div>
					<div class="section_subtitle">Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem venenatis in. Aenean id varius quam. Nullam bibendum interdum dui, ac tempor lorem convallis ut</div>
				</div>
			</div>

			<!-- Course Search -->
			<div class="row">
				<div class="col">
					<div class="course_search">
						<form action="#" class="course_search_form d-flex flex-md-row flex-column align-items-start justify-content-between">
							<div><input type="text" class="course_input" placeholder="Course" required="required"></div>
							<div><input type="text" class="course_input" placeholder="Level" required="required"></div>
							<button class="course_button"><span>recherche cours</span><span class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
						</form>
					</div>
				</div>
			</div>

			<!-- Featured Course -->
			<div class="row featured_row">
				<div class="col-lg-6 featured_col">
					<div class="featured_content">
						<div class="featured_header d-flex flex-row align-items-center justify-content-start">
							<div class="featured_tag"><a href="#">Featured</a></div>
							<div class="featured_price ml-auto">Price: <span>$35</span></div>
						</div>
						<div class="featured_title"><h3><a href="courses.html">Online Literature Course</a></h3></div>
						<div class="featured_text">Maecenas rutrum viverra sapien sed fermentum. Morbi tempor odio eget lacus tempus pulvinar. Donec vehicula efficitur nibh, in pretium nulla interdum lacus vehicula efficitur nibh, in pretiumvehicula efficitur nibh, in pretium tempus non.</div>
						<div class="featured_footer d-flex align-items-center justify-content-start">
							<div class="featured_author_image"><img src="images/featured_author.jpg" alt=""></div>
							<div class="featured_author_name">By <a href="#">James S. Morrison</a></div>
							<div class="featured_sales ml-auto"><span>352</span> Sales</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 featured_col">
					<!-- Background image artist https://unsplash.com/@jtylernix -->
					<div class="featured_background" style="background-image:url(images/featured.jpg)"></div>
				</div>
			</div>
			<div class="row courses_row">
				
				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course">
						<div class="course_image"><img src="images/course_1.jpg" alt=""></div>
						<div class="course_body">
							<div class="course_header d-flex flex-row align-items-center justify-content-start">
								<div class="course_tag"><a href="#">Featured</a></div>
								<div class="course_price ml-auto">Price: <span>$35</span></div>
							</div>
							<div class="course_title"><h3><a href="courses.html">Online Literature Course</a></h3></div>
							<div class="course_text">Maecenas rutrum viverra sapien sed ferm entum. Morbi tempor odio eget lacus tempus pulvinar.</div>
							<div class="course_footer d-flex align-items-center justify-content-start">
								<div class="course_author_image"><img src="images/featured_author.jpg" alt="https://unsplash.com/@anthonytran"></div>
								<div class="course_author_name">By <a href="#">James S. Morrison</a></div>
								<div class="course_sales ml-auto"><span>352</span> Sales</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course">
						<div class="course_image"><img src="images/course_2.jpg" alt=""></div>
						<div class="course_body">
							<div class="course_header d-flex flex-row align-items-center justify-content-start">
								<div class="course_tag"><a href="#">New</a></div>
								<div class="course_price ml-auto">Price: <span>$35</span></div>
							</div>
							<div class="course_title"><h3><a href="courses.html">Social Media Course</a></h3></div>
							<div class="course_text">Maecenas rutrum viverra sapien sed ferm entum. Morbi tempor odio eget lacus tempus pulvinar.</div>
							<div class="course_footer d-flex align-items-center justify-content-start">
								<div class="course_author_image"><img src="images/course_author_2.jpg" alt="https://unsplash.com/@anthonytran"></div>
								<div class="course_author_name">By <a href="#">Mark Smith</a></div>
								<div class="course_sales ml-auto"><span>352</span> Sales</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course">
						<div class="course_image"><img src="images/course_3.jpg" alt=""></div>
						<div class="course_body">
							<div class="course_header d-flex flex-row align-items-center justify-content-start">
								<div class="course_tag"><a href="#">Featured</a></div>
								<div class="course_price ml-auto">Price: <span>$35</span></div>
							</div>
							<div class="course_title"><h3><a href="courses.html">Online Marketing Course</a></h3></div>
							<div class="course_text">Maecenas rutrum viverra sapien sed ferm entum. Morbi tempor odio eget lacus tempus pulvinar.</div>
							<div class="course_footer d-flex align-items-center justify-content-start">
								<div class="course_author_image"><img src="images/course_author_3.jpg" alt="https://unsplash.com/@anthonytran"></div>
								<div class="course_author_name">By <a href="#">Julia Williams</a></div>
								<div class="course_sales ml-auto"><span>352</span> Sales</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course">
						<div class="course_image"><img src="images/course_4.jpg" alt=""></div>
						<div class="course_body">
							<div class="course_header d-flex flex-row align-items-center justify-content-start">
								<div class="course_tag"><a href="#">Featured</a></div>
								<div class="course_price ml-auto">Price: <span>$35</span></div>
							</div>
							<div class="course_title"><h3><a href="courses.html">Online Literature Course</a></h3></div>
							<div class="course_text">Maecenas rutrum viverra sapien sed ferm entum. Morbi tempor odio eget lacus tempus pulvinar.</div>
							<div class="course_footer d-flex align-items-center justify-content-start">
								<div class="course_author_image"><img src="images/featured_author.jpg" alt="https://unsplash.com/@anthonytran"></div>
								<div class="course_author_name">By <a href="#">James S. Morrison</a></div>
								<div class="course_sales ml-auto"><span>352</span> Sales</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course">
						<div class="course_image"><img src="images/course_5.jpg" alt=""></div>
						<div class="course_body">
							<div class="course_header d-flex flex-row align-items-center justify-content-start">
								<div class="course_tag"><a href="#">New</a></div>
								<div class="course_price ml-auto">Price: <span>$35</span></div>
							</div>
							<div class="course_title"><h3><a href="courses.html">Social Media Course</a></h3></div>
							<div class="course_text">Maecenas rutrum viverra sapien sed ferm entum. Morbi tempor odio eget lacus tempus pulvinar.</div>
							<div class="course_footer d-flex align-items-center justify-content-start">
								<div class="course_author_image"><img src="images/course_author_2.jpg" alt="https://unsplash.com/@anthonytran"></div>
								<div class="course_author_name">By <a href="#">Mark Smith</a></div>
								<div class="course_sales ml-auto"><span>352</span> Sales</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course">
						<div class="course_image"><img src="images/course_6.jpg" alt=""></div>
						<div class="course_body">
							<div class="course_header d-flex flex-row align-items-center justify-content-start">
								<div class="course_tag"><a href="#">Featured</a></div>
								<div class="course_price ml-auto">Price: <span>$35</span></div>
							</div>
							<div class="course_title"><h3><a href="courses.html">Online Marketing Course</a></h3></div>
							<div class="course_text">Maecenas rutrum viverra sapien sed ferm entum. Morbi tempor odio eget lacus tempus pulvinar.</div>
							<div class="course_footer d-flex align-items-center justify-content-start">
								<div class="course_author_image"><img src="images/course_author_3.jpg" alt="https://unsplash.com/@anthonytran"></div>
								<div class="course_author_name">By <a href="#">Julia Williams</a></div>
								<div class="course_sales ml-auto"><span>352</span> Sales</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course">
						<div class="course_image"><img src="images/course_7.jpg" alt=""></div>
						<div class="course_body">
							<div class="course_header d-flex flex-row align-items-center justify-content-start">
								<div class="course_tag"><a href="#">Featured</a></div>
								<div class="course_price ml-auto">Price: <span>$35</span></div>
							</div>
							<div class="course_title"><h3><a href="courses.html">Online Literature Course</a></h3></div>
							<div class="course_text">Maecenas rutrum viverra sapien sed ferm entum. Morbi tempor odio eget lacus tempus pulvinar.</div>
							<div class="course_footer d-flex align-items-center justify-content-start">
								<div class="course_author_image"><img src="images/featured_author.jpg" alt="https://unsplash.com/@anthonytran"></div>
								<div class="course_author_name">By <a href="#">James S. Morrison</a></div>
								<div class="course_sales ml-auto"><span>352</span> Sales</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course">

						<div class="course_image"><a href="contenus/travail.html"><img src="images/course_8.jpg" alt=""></a></div>
						<div class="course_body">
							<div class="course_header d-flex flex-row align-items-center justify-content-start">
								<div class="course_tag"><a href="contenus/travail.html">XML</a></div>
								<div class="course_price ml-auto">Price: <span>$35</span></div>
							</div>
							<div class="course_title"><h3><a href="courses.html">Social Media Course</a></h3></div>
							<div class="course_text">Maecenas rutrum viverra sapien sed ferm entum. Morbi tempor odio eget lacus tempus pulvinar.</div>
							<div class="course_footer d-flex align-items-center justify-content-start">
								<div class="course_author_image"><img src="images/Faye.jpg" alt="https://unsplash.com/@anthonytran"></div>
								<div class="course_author_name">By <a href="#">Mamadou Faye</a></div>
								<div class="course_sales ml-auto"><span>352</span> Sales</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Course -->
				<div class="col-lg-4 col-md-6">
					<div class="course">
						<div class="course_image"><a href="contenus/programme.html"><img src="images/course_9.jpg" alt=""></a></div>
						<div class="course_body">
							<div class="course_header d-flex flex-row align-items-center justify-content-start">
								<div class="course_tag"><a href="contenus/programme.html">Langage C</a></div>
								<div class="course_price ml-auto">Price: <span>$35</span></div>
							</div>
							<div class="course_title"><h3><a href="courses.html">Online Marketing Course</a></h3></div>
							<div class="course_text">Maecenas rutrum viverra sapien sed ferm entum. Morbi tempor odio eget lacus tempus pulvinar.</div>
							<div class="course_footer d-flex align-items-center justify-content-start">
								<div class="course_author_image"><img src="images/course_author_3.jpg" alt="https://unsplash.com/@anthonytran"></div>
								<div class="course_author_name">By <a href="#">Julia Williams</a></div>
								<div class="course_sales ml-auto"><span>352</span> Sales</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<!-- Pagination -->
			<div class="row">
				<div class="col">
					<div class="courses_paginations">
						<ul>
							<li class="active"><a href="#">01</a></li>
							<li><a href="#">02</a></li>
							<li><a href="#">03</a></li>
							<li><a href="#">04</a></li>
							<li><a href="#">05</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- About -->
				<div class="col-lg-3 footer_col">
					<div class="footer_about">
						<div class="logo_container">
							<a href="#">
								<div class="logo_content d-flex flex-row align-items-end justify-content-start">
									<div class="logo_img"><img src="images/logo.png" alt=""></div>
									<div class="logo_text">learn</div>
								</div>
							</a>
						</div>
						<div class="footer_about_text">
							<p>Maecenas rutrum viverra sapien sed fermentum. Morbi tempor odio eget lacus tempus pulvinar.</p>
						</div>
						<div class="footer_social">
							<ul>
								<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					</div>
				</div>

				<div class="col-lg-3 footer_col">
					<div class="footer_links">
						<div class="footer_title"> menu</div>
						<ul class="footer_list">
							<li><a href="index.html">acceuil</a></li>
							<li><a href="about.html"> a propos de nous</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-3 footer_col">
					<div class="footer_links">
						<div class="footer_title">Autres liens</div>
						<ul class="footer_list">
							<li><a href="courses.html">Cours</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-3 footer_col">
					<div class="footer_contact">
						<div class="footer_title">Contactez - nous</div>
						<div class="footer_contact_info">
							<div class="footer_contact_item">
								<div class="footer_contact_title">Addresse:</div>
								<div class="footer_contact_line">Mbour croisement saly</div>
							</div>
							<div class="footer_contact_item">
								<div class="footer_contact_title">Téléphone:</div>
								<div class="footer_contact_line">+21 78 475 16 39</div>
							</div>
							<div class="footer_contact_item">
								<div class="footer_contact_title">Email:</div>
								<div class="footer_contact_line">line119549@gmail.com</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/courses.js"></script>
</body>
</html>