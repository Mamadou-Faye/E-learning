<?php
session_start();
require_once "fonction/bdd.php";
// require_once "fonction/Requete.php";
$bdd = bdd();
if (isset($_POST["btnConnected"])) {
    $email = htmlspecialchars($_POST["email"]);
	$password = htmlspecialchars(sha1($_POST["password"]));
	
	if (isset($email) && !empty($email) && isset($password) && !empty($password)) {
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$reqSelected = $bdd->prepare("SELECT * FROM admin WHERE email = ? AND password = ?");
			$reqSelected->execute(array($email, $password));
			$CountRow = $reqSelected->rowCount();
			if ($CountRow == 1) {
				$adminInfo = $reqSelected->fetch();
				$_SESSION['idUser'] = $adminInfo["id"];
				$_SESSION['pseudoUser'] = $adminInfo["prenom"]." ".$adminInfo["nom"];
				$_SESSION['emailUser'] = $adminInfo["email"];
				header("location:espace_admin/index.php");
			} else {
				$erreur = "Email ou mot de passe incorrect";
			}
		} else {
			$erreur = "L'email n'est pas valide !!";
		}
		
	} else {
		$erreur = "Veillez remplir toutes les champs !!";
	}
}
	
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Connexion</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Elearn project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/video-js/video-js.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/search.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<?php require_once "include/header.php"; ?>

    <!-- Menu -->

	<?php require_once "include/headerMobile.php"; ?>
    
    <!-- Home -->

	<div class="home">
		<!-- Background image artist https://unsplash.com/@thepootphotographer -->
		<div class="home_background parallax_background parallax-window" data-parallax="scroll" data-image-src="images/contact.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title">Se connecter</div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="index.php">Home</a></li>
									<li>Se connecter</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div><br>
    
   <div id="result_search"></div>
    
    <?php if (isset($_GET['searchAll']) && !empty($_GET['searchAll'])) { 
        echo "<br><br>";
		require_once "include/recherche.php";
    }
    ?>
    
	<!-- Contact -->

	<div class="contact">
		<div class="container-fluid">
			<div class="row row-xl-eq-height">
                <!-- Contact Content -->
                <div class="col-xl-3"></div>
				<div class="col-xl-6">
					<div class="contact_content">
						<div class="contact_form_container">
							<div class="title-admin"><h2>Se connecter</h2></div>
								<?php  if (isset($erreur)) { ?>
									<br><div class="alert alert-danger alert-dismissible" role="alert"><!--show fade-->
										<strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Attention!! </strong> <?php echo $erreur; ?>
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
								<?php  } ?>
								<?php  if (isset($succes)) { ?>
									<br><div class="alert alert-success alert-dismissible" role="alert">
										<strong><i class="fa fa-check" aria-hidden="true"></i> Bravo!! </strong> <?php echo $succes; ?>
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
								<?php  } ?>
							<form action="" method="POST" id="contact_form" class="contact_form">
                                <div><input type="email" name="email" value="<?php if(isset($email)){ echo $email; } ?>" class="contact_input" placeholder="E-mail" required="required"></div>
								<div><input type="password" name="password" class="contact_input" placeholder="Mot de passe" required="required"></div>
								<button class="contact_button" name="btnConnected"><span>Se connecter</span><span class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
							</form>
						</div>
					</div>
                </div>
                <div class="col-xl-3"></div>
			</div>
				
		</div>
	</div>

	<!-- Footer -->

	<?php require_once "include/footer.php"; ?>
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