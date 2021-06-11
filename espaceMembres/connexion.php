<?php
session_start(); 
$bdd = new PDO('mysql:host=127.0.0.1;dbname=admin_tuto', 'root', '');
if (isset($_POST['btnConnexion'])) {
	$loginConnect = htmlspecialchars($_POST['login']);
	$mdpConnect = sha1($_POST['mdp']);
	if (!empty($loginConnect) AND !empty($mdpConnect)) {
		$emailuser = $bdd->prepare('SELECT * FROM pseudo WHERE email = ? AND password = ?');
		$emailuser->execute(array($loginConnect, $mdpConnect));
		$emailexist = $emailuser->rowCount();
		if ($emailexist == 1) {
			$userinfo = $emailuser->fetch();
			$_SESSION['idPseudo'] = $userinfo['idPseudo'];
			$_SESSION['nom'] = $userinfo['nom'];
			$_SESSION['email'] = $userinfo['email'];
			header('location:profil.php?id='.$_SESSION['idPseudo']);
		}else{
			header('location:connexion.php?erreur=Ce compte n\'existe pas !');
		}
	}else{
		header('location:connexion.php?erreur=Veuillez remplir tous les champs svp !');
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Elearn</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Elearn project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../styles/bootstrap4/bootstrap.min.css">
<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/animate.css">
<link href="../plugins/video-js/video-js.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="../styles/responsive.css">
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
									<li><div class="question">Que puisse vous aider svp?</div></li>
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
										<div class="logo_img"><img src="../images/logo.png" alt=""></div>
										<div class="logo_text">Apprendre</div>
									</div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li class="active"><a href="../index.php">Acceuil</a></li>
									<li><a href="../about.html">Apropos de nous</a></li>
									<li><a href="../courses.html">cours</a></li>
									<li><a href="../contact.html">contact</a></li>
								</ul>
								<div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>

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
				<li class="menu_mm"><a href="courses.html">Cours</a></li>
				<li class="menu_mm"><a href="contact.html">Contact</a></li>
			</ul>
		</nav>
		<div class="menu_extra">
	
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
	<!-- formulire de connection -->
	<div class="join" style="margin-top: 5rem;">
		<div class="container" id="form">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="section_title text-center">
						<div align="center">
							<h2>Se connecter ici <span>&#128071;</span></h2>
							<form style="width: 60%;" action="" method="post">
								<div class="input-group">
									<input type="email" name="login" class="form-control" placeholder="Votre adresse email" autofocus>
								</div><br/>
								<div class="input-group">
									<input type="password" name="mdp" class="form-control" placeholder="Votre mot de passe">
								</div><br/>
								<div class="input-group">
									<input style="background: #FF7B07; cursor: pointer;" class="btn btn-lg" type="submit" name="btnConnexion" value="Se connecter">
									<a style="color: #000; float: right; margin-left: 21rem; margin-top: 1.5rem" href="inscription.php">S'inscrire</a>
								</div>
							</form>
							<?php 
								if (isset($_GET['erreur'])) {
									$erreur = $_GET['erreur'];
							?>
							<p style="color: red; margin-top: 1rem"><?= $erreur; ?></p>
							<?php
								}
							 ?>
							 <?php 
								if (isset($_GET['msg'])) {
									$msg = $_GET['msg'];
							?>
							<p style="color: green; margin-top: 1rem"><?= $msg; ?></p>
							<?php
								}


							 ?>
						</div>
					</div>
					<div class="section_subtitle"></div>

				</div>
			</div>
		</div>
		<div class="button join_button"><a href="#">contactez-nous maintenant<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
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
									<div class="logo_img"><img src="../images/logo.png" alt=""></div>
									<div class="logo_text">appendre</div>
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">IDA P6 MBOUR</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					</div>
				</div>

				<div class="col-lg-3 footer_col">
					<div class="footer_links">
						<div class="footer_title"> menu</div>
						<ul class="footer_list">
							<li><a href="index.html">Acceuil</a></li>
							<li><a href="about.html">Apropos de nous</a></li>
							
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
						<div class="footer_title">Contact Nous</div>
						<div class="footer_contact_info">
							<div class="footer_contact_item">
								<div class="footer_contact_title">Address:</div>
								<div class="footer_contact_line">Mbour croissement saly</div>
							</div>
							<div class="footer_contact_item">
								<div class="footer_contact_title">téléphone:</div>
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

<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../styles/bootstrap4/popper.js"></script>
<script src="../styles/bootstrap4/bootstrap.min.js"></script>
<script src="../plugins/greensock/TweenMax.min.js"></script>
<script src="../plugins/greensock/TimelineMax.min.js"></script>
<script src="../plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="../plugins/greensock/animation.gsap.min.js"></script>
<script src="../plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="../plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="../plugins/easing/easing.js"></script>
<script src="../plugins/video-js/video.min.js"></script>
<script src="../plugins/video-js/Youtube.min.js"></script>
<script src="../plugins/parallax-js-master/parallax.min.js"></script>
<script src="../js/custom.js"></script>
</body>
</html>