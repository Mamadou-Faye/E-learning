<?php
session_start();
$bdd = new PDO('mysql:host=127.0.0.1;dbname=elearning', 'root', '');
if (isset($_SESSION['idAdmin'])) {
	$userProfil = $bdd->prepare('SELECT * FROM admin WHERE idAdmin = ?');
	$userProfil->execute(array($_SESSION['idAdmin']));
	$userinfo = $userProfil->fetch();

	if (isset($_POST['pseudo']) AND !empty($_POST['pseudo']) AND $_POST['pseudo'] == $userinfo['name']) {
		$pseudoModify = htmlspecialchars($_POST['pseudo']);
		$updatePseudo = $bdd->prepare('UPDATE admin SET name = ? WHERE idAdmin = ?');
		$updatePseudo->execute(array($pseudoModify, $_SESSION['idAdmin']));
		header('location:adminProfil.php?id='.$_SESSION['idAdmin']);
	}

	if (isset($_POST['email']) AND !empty($_POST['email']) AND $_POST['email'] == $userinfo['email']) {
		$emailModify = htmlspecialchars($_POST['email']);
		$updateEmail = $bdd->prepare('UPDATE admin SET email = ? WHERE idAdmin = ?');
		$updateEmail->execute(array($emailModify, $_SESSION['idAdmin']));
		header('location:adminProfil.php?id='.$_SESSION['idAdmin']);
	}

	if (isset($_POST['numberAdmin']) AND !empty($_POST['numberAdmin']) AND $_POST['numberAdmin'] == $userinfo['numAdmin']) {
		$numAdmin = htmlspecialchars($_POST['numberAdmin']);
		$updateNumber = $bdd->prepare('UPDATE admin SET numAdmin = ? AND idAdmin = ?');
		$updateNumber->execute(array($numAdmin, $_SESSION['idAdmin']));
		header('location:adminConnexion.php?id='.$_SESSION['idAdmin']);
	}

	if (isset($_POST['mdp']) AND !empty($_POST['mdp']) AND $_POST['mdp'] == $userinfo['password']) {
		$mdpModify1 = sha1($_POST['mdp']);
		$mdpModify2 = sha1($_POST['mdp2']);
		$updateMdp = $bdd->prepare('UPDATE admin SET password = ? WHERE idAdmin = ?');
		$updateMdp->execute(array($mdpModify1, $_SESSION['idAdmin']));
		header('location:adminProfil.php?id='.$_SESSION['idAdmin']);
	}
}
	if (isset($_FILES['avatarAdmin']) AND !empty($_FILES['avatarAdmin']['name'])) {
		$tailleMax = 2097152;
		$extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
		if ($_FILES['avatarAdmin']['size'] <= $tailleMax) {
			$extensionUpload = strtolower(substr(strrchr($_FILES['avatarAdmin']['name'], '.'), 1));
			if (in_array($extensionUpload, $extensionsValides)) {
				$cheminAvatar = "admins/avatars/".$_SESSION['idAdmin'].".".$extensionUpload;
				$resultat = move_uploaded_file($_FILES['avatarAdmin']['tmp_name'], $cheminAvatar);
				if ($resultat) {
					$updateAvatar = $bdd->prepare('UPDATE admin SET avatarAdmin = :avatarAdmin WHERE idAdmin = :idAdmin');
					$updateAvatar->execute(array(
						'avatarAdmin' => $_SESSION['idAdmin'].".".$extensionUpload,
						'idAdmin' => $_SESSION['idAdmin']
					));
					header('location:adminProfil.php?id='.$_SESSION['idAdmin']);
				}else{
					header('location:modifyProfilAdmin.php?erreur=Erreur durant l\'importation de votre photo de profil');
				}
			}else{
				header('location:modifyProfilAdmin.php?erreur=Votre photo de profil doit être au format jpg, jpeg, gif ou png');
			}
		}else{
			header('location:modifyProfilAdmin.php?erreur=Votre photo de profil ne doit pas dépasser 2MO');
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

	<div align="center">
		<h1>Mise à jour Profil</h1>
		<form style="width: 60%;" action="" method="post" enctype="multipart/form-data">
			<div class="input-group">
				<input type="text" name="pseudo" class="form-control" placeholder="Nom d'utilisation" autofocus value="<?= $userinfo['name']; ?>">
			</div><br/>
			<div class="input-group">
				<input type="email" name="email" class="form-control" placeholder="Votre email" value="<?= $userinfo['email']; ?>">
			</div><br/>
			<div class="input-group">
				<input type="number" name="numberAdmin" class="form-control" placeholder="Votre numéro" value="<?= $userinfo['numAdmin']; ?>">
			</div><br/>
			<div class="input-group">
				<input type="password" name="mdp" class="form-control" placeholder="Votre mot de passe">
			</div><br/>
			<div class="input-group">
				<input type="password" name="mdp2" class="form-control" placeholder="Confirmation-mot-de-passe">
			</div><br/>
			<div class="input-group">
				<input type="file" name="avatarAdmin">
			</div><br/>
			<div class="input-group">
				<input style="background: #FF7B07; cursor: pointer; outline: none;" class="btn btn-lg" type="submit" name="btnSubmit" value="Envoyer">
			</div>
		</form>
		<?php 
			if (isset($_GET['erreur'])) {
				$erreur = $_GET['erreur'];
				?>
				<p style="color: red"><?= $erreur; ?></p>
				<?php
			}
		?>
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