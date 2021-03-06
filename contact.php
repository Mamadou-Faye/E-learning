<?php require "session.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Elearn project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/video-js/video-js.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
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
									<li><div class="question">Que puis-je fire pour vous ?</div></li>
									<li>
										<div>(221) 78 155 64 94</div>
									</li>
									<li>
										<div>assaneka1997@gmail.com</div>
									</li>
								</ul>
								<div class="top_bar_login ml-auto">
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
										<div class="logo_text">Apprendre</div>
									</div>
								</a>
							</div>
							<nav style="display: flex;" class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li><a href="index.php">acceuil</a></li>
									<li><a href="about.php">a props de nous</a></li>
									<li><a href="courses.php">cours</a></li>
									<li class="active"><a href="contact.php">contact</a></li>
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
				<li class="menu_mm"><a href="index.html">acceuil</a></li>
				<li class="menu_mm"><a href="courses.html">Cours</a></li>
				<li class="menu_mm"><a href="instructors.html">Instructeurs</a></li>
				<li class="menu_mm"><a href="#">Ev??nements</a></li>
				<li class="menu_mm"><a href="blog.html">Blog</a></li>
				<li class="menu_mm"><a href="contact.html">Contact</a></li>
			</ul>
		</nav>
		<div class="menu_extra">
			<div class="menu_phone"><span class="menu_title">t??l??phone:</span>(221) 78 155 64 94</div>
			<div class="menu_social">
				<span class="menu_title">suivez-nous</span>
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
		<div class="home_background parallax_background parallax-window" data-parallax="scroll" data-image-src="images/contact.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title">Contact</div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="index.html">acceuil</a></li>
									<li>Contact</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container-fluid">
			<div class="row row-xl-eq-height">
				<!-- Contact Content -->
				<div class="col-xl-6">
					<div class="contact_content">
						<div class="row">
							<div class="col-xl-6">
								<div class="contact_about">
									<div class="logo_container">
										<a href="#">
											<div class="logo_content d-flex flex-row align-items-end justify-content-start">
												<div class="logo_img"><img src="images/logo.png" alt=""></div>
												<div class="logo_text">apprendre</div>
											</div>
										</a>
									</div>
									<div class="contact_about_text">
										<p>Pour plus de renseignements veuillez nous contectez sur lemail et les numeros ci-dessous,
											sinon trouvez-nous ?? notre r??sidence Espace Numerique Ouvert de Mbour(Eno).Il se trouve ?? Saly
											A??rodrom ?? trentes m??tres du croisement de la route nationale n?? 1 sur la route  du quartier
											Cit??-enseignant. </p>
									</div>
								</div>
							</div>
						</div>
						<div class="contact_form_container">
							<form action="#" id="contact_form" class="contact_form">
								<div>
									<div class="row">
										<div class="col-lg-6 contact_name_col">
											<input type="text" class="contact_input" placeholder="Nom" required="required">
										</div>
										<div class="col-lg-6">
											<input type="email" class="contact_input" placeholder="E-mail" required="required">
										</div>
									</div>
								</div>
								<div><input type="text" class="contact_input" placeholder="Sujet" required="required"></div>
								<div><textarea class="contact_input contact_textarea" placeholder="Message"></textarea></div>
								<button class="contact_button"><span>envoyer message</span><span class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
							</form>
						</div>
					</div>
				</div>

				<!-- Contact Map -->
				<div class="col-xl-6 map_col">
					<div class="contact_map">

						<!-- Google Map -->
						<div id="google_map" class="google_map">
							<div class="map_container">
								<div id="map"></div>
							</div>
						</div>

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
									<div class="logo_text">apprendre</div>
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">IDA P6 MBOUR</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					</div>
				</div>

				<div class="col-lg-3 footer_col">
					<div class="footer_links">
						<div class="footer_title">menu</div>
						<ul class="footer_list">
							<li><a href="index.html">acceuil</a></li>
							<li><a href="about.html">a propos de nous</a></li>
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
						<div class="footer_title">Contactez-nous</div>
						<div class="footer_contact_info">
							<div class="footer_contact_item">
								<div class="footer_contact_title">Adresse:</div>
								<div class="footer_contact_line">Croisement Saly</div>
							</div>
							<div class="footer_contact_item">
								<div class="footer_contact_title">t??l??phone:</div>
								<div class="footer_contact_line">+221 78 475 16 39</div>
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
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact.js"></script>
</body>
</html>