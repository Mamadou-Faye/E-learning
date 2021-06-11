<?php require "session.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>About us</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Elearn project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/video-js/video-js.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/about.css">
<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
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
									<li><div class="question">Que puisse vous aider svp ?</div></li>
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
										<div class="logo_text">apprendre</div>
									</div>
								</a>
							</div>
							<nav style="display: flex;" class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li><a href="index.php">acceuil</a></li>
									<li class="active"><a href="about.php">a propos de nous</a></li>
									<li><a href="courses.php">cours</a></li>
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
				<li class="menu_mm"><a href="index.php">acceuil</a></li>
				<li class="menu_mm"><a href="courses.php">Cours</a></li>
				<li class="menu_mm"><a href="instructors.php">Instructeurs</a></li>
				<li class="menu_mm"><a href="#">Evénement</a></li>
				<li class="menu_mm"><a href="blog.php">Blog</a></li>
				<li class="menu_mm"><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
		<div class="menu_extra">
			<div class="menu_phone"><span class="menu_title">téléphone:</span>(+221) 78 475 16 39</div>
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
		<div class="home_background parallax_background parallax-window" data-parallax="scroll" data-image-src="images/about.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title">A propos de nous</div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="index.html">acceuil</a></li>
									<li>A propos de nous</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row about_row row-lg-eq-height">
				<div class="col-lg-6">
					<div class="about_content">
						<div class="about_title">l'objectif général de notre plateforme</div>
						<div class="about_text">
						   <p>Cette plateforme(E-learning)est un dispositif technologique et humain qui intégre des outils
								informalisés à des fins d'enseignement et d'apprentissage.Elle a pour finalité l'accès à distance
								aux contenus pédagogiques,d'individualisation de l'apprentissage et le télétutorat.
							   Ce E-leaning regroupe les outils nécessaires aux<b> trois principaux utilisateurs</b> de la plateforme:
							  <ol>
								<li><i><b>Enseignant/Formateur :</b></i>création des parcours pédagogique,des contenus pédagogiques
								 et suivi de l'activité des apprenants.</li>
								<li><i><b>Apprenant :</b></i>consultation en ligne ou téléchargement des contenus pédagogiques et
								transmission des traveaux à corriger</li>
								<li><i><b>Administrateur :</b></i>Installation et maintenance du système,gestion des accès et création
								 des liens vers d'autres système d'information</li>
							   </ol>
							   Contrairement à une formation présentielle ,la plateforme permet une apprentissage individualisée et
							   personnalisée à distance.Par exemple en proposant des contenus de cours différents ou des cours plus
							   élaborés pour les étudiants qui peuvent avoir des compétences differentes ou qui veulent aller plus
							   loins mais ils ne peuvent pas s'y déplacer pour cause de distance,de guerre ou de maladie.En outre la
							   plateforme permet de capitaliser les contenus pédagogiques c'est à dire leur réutilisation au cours 
							   d'une même année académique(possibilité de relire les cours)ou une année académique sur l'autre.
							   </p>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="about_image"><img src="images/about_1.jpg" alt="https://unsplash.com/@jtylernix"></div>
				</div>
			</div>
			<div class="row about_row row-lg-eq-height">
				<div class="col-lg-6 order-lg-1 order-2">
					<div class="about_image"><img src="images/about_1.jpg" alt=""></div>
				</div>
				<div class="col-lg-6 order-lg-2 order-1">
					<div class="about_content">
						<div class="about_title">La vision d'appendre</div>
						<div class="about_text">
							<p>Mes trés chers étudiants et étudiantes vous les jeunes de votre pays,
							  de votre continent ou du monde, vous etes apellés à être des dirigeants
							  des leaders demain;Maintenant au lieu de penser qu'on vous donne tous,
							  vous devez aller à la quête du du savoir.Comment?En faissant vos propres
							  recherches pour rendre votre vie professionnelle.Vous avez
							  votre destin en main,et celui qui a son destin en main ne doit penser nul part.
							  Utilisez votre propre conscience, vos compétences, vos capacités et votre
							  propre savoir pour atteindre l'objectif visé.Ne soyez pas dépendant,ayez
						      la confience en soit.Pour ullistrez ces propos y'a un adence qui dit:
							  &gt;&lt; Si tu veux ton indépendance,dépasse ton maître et travaille
							  pour toi...&gt;&gt; </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Milestones -->


	<!-- Teachers -->

	<div class="teachers">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="teachers_title text-center">Rencontrez les tuteurs</div>
				</div>
			</div>
			<div class="row teachers_row">
				
				<!-- Teacher -->
				<div class="col-lg-4 col-md-6">
					<div class="teacher">
						<div class="teacher_image"><img src="images/teacher_1.jpg" alt="https://unsplash.com/@nickkarvounis"></div>
						<div class="teacher_body text-center">
							<div class="teacher_title"><a href="#">Jonathan Smith</a></div>
							<div class="teacher_subtitle">Marketing</div>
							<div class="teacher_social">
								<ul>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Teacher -->
				<div class="col-lg-4 col-md-6">
					<div class="teacher">
						<div class="teacher_image"><img src="images/teacher_2.jpg" alt="https://unsplash.com/@rawpixel"></div>
						<div class="teacher_body text-center">
							<div class="teacher_title"><a href="#">Michelle Williams</a></div>
							<div class="teacher_subtitle">Art & Design</div>
							<div class="teacher_social">
								<ul>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Teacher -->
				<div class="col-lg-4 col-md-6">
					<div class="teacher">
						<div class="teacher_image"><img src="images/teacher_3.jpg" alt="https://unsplash.com/@taylor_grote"></div>
						<div class="teacher_body text-center">
							<div class="teacher_title"><a href="#">Jack Gallagan</a></div>
							<div class="teacher_subtitle">Marketing</div>
							<div class="teacher_social">
								<ul>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Teacher -->
				<div class="col-lg-4 col-md-6">
					<div class="teacher">
						<div class="teacher_image"><img src="images/teacher_4.jpg" alt="https://unsplash.com/@benjaminrobyn"></div>
						<div class="teacher_body text-center">
							<div class="teacher_title"><a href="#">Christinne Smith</a></div>
							<div class="teacher_subtitle">Marketing</div>
							<div class="teacher_social">
								<ul>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Teacher -->
				<div class="col-lg-4 col-md-6">
					<div class="teacher">
						<div class="teacher_image"><img src="images/teacher_5.jpg" alt="https://unsplash.com/@christinhumephoto"></div>
						<div class="teacher_body text-center">
							<div class="teacher_title"><a href="#">Michelle Williams</a></div>
							<div class="teacher_subtitle">Art & Design</div>
							<div class="teacher_social">
								<ul>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Teacher -->
				<div class="col-lg-4 col-md-6">
					<div class="teacher">
						<div class="teacher_image"><img src="images/teacher_6.jpg" alt="https://unsplash.com/@rawpixel"></div>
						<div class="teacher_body text-center">
							<div class="teacher_title"><a href="#">Jack Gallagan</a></div>
							<div class="teacher_subtitle">Marketing</div>
							<div class="teacher_social">
								<ul>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="row">
				<div class="col text-center">
					<div class="button teachers_button"><a href="#">voir tout les tuteurs<div class="button_arrow">
						<ul style="margin-left: -1rem; padding: .1rem" class="nav navbar-nav">
				            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-user"></span><!--  Sign Up  --><span class="caret"></span> </a>
				            <ul class="dropdown-menu">
				              <li> <a style="color: #000;" href="#"> Nos membres</a></li>
				              <li> <a style="color: #000;" href="#"> Nos tuteurs</a></li>
				              <li> <a style="color: #000;" href="#"> Nos Administrateurs</a></li>
				            </ul>
				            </li>
				        </ul>
					</div></a></div>
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
						<div class="footer_title">Contactez - nous</div>
						<div class="footer_contact_info">
							<div class="footer_contact_item">
								<div class="footer_contact_title">Addresse:</div>
								<div class="footer_contact_line">Mbour Croisement Saly</div>
							</div>
							<div class="footer_contact_item">
								<div class="footer_contact_title">Téléohone:</div>
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
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/about.js"></script>
</body>
</html>