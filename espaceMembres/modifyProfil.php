<?php
session_start();
$bdd = new PDO('mysql:host=127.0.0.1;dbname=admin_tuto', 'root', '');
if (isset($_SESSION['idPseudo'])) {
	$userProfil = $bdd->prepare('SELECT * FROM pseudo WHERE idPseudo = ?');
	$userProfil->execute(array($_SESSION['idPseudo']));
	$userinfo = $userProfil->fetch();

	if (isset($_POST['pseudo']) AND !empty($_POST['pseudo']) AND $_POST['pseudo'] == $userinfo['nom']) {
		$pseudoModify = htmlspecialchars($_POST['pseudo']);
		$updatePseudo = $bdd->prepare('UPDATE pseudo SET nom = ? WHERE idPseudo = ?');
		$updatePseudo->execute(array($pseudoModify, $_SESSION['idPseudo']));
		header('location:profil.php?id='.$_SESSION['idPseudo']);
	}

	if (isset($_POST['email']) AND !empty($_POST['email']) AND $_POST['email'] == $userinfo['email']) {
		$emailModify = htmlspecialchars($_POST['email']);
		$updateEmail = $bdd->prepare('UPDATE pseudo SET email = ? WHERE idPseudo = ?');
		$updateEmail->execute(array($emailModify, $_SESSION['idPseudo']));
		header('location:profil.php?id='.$_SESSION['idPseudo']);
	}

	if (isset($_POST['mdp']) AND !empty($_POST['mdp']) AND $_POST['mdp'] == $userinfo['password']) {
		$mdpModify1 = sha1($_POST['mdp']);
		$mdpModify2 = sha1($_POST['mdp2']);
		$updateMdp = $bdd->prepare('UPDATE pseudo SET password = ? WHERE idPseudo = ?');
		$updateMdp->execute(array($mdpModify1, $_SESSION['idPseudo']));
		header('location:profil.php?id='.$_SESSION['idPseudo']);
	}
}
	if (isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name'])) {
		$tailleMax = 2097152;
		$extensionsValides = array('jpg', 'jpeg', 'gif', 'png');
		if ($_FILES['avatar']['size'] <= $tailleMax) {
			$extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
			if (in_array($extensionUpload, $extensionsValides)) {
				$cheminAvatar = "membres/avatars/".$_SESSION['idPseudo'].".".$extensionUpload;
				$resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $cheminAvatar);
				if ($resultat) {
					$updateAvatar = $bdd->prepare('UPDATE pseudo SET avatar = :avatar WHERE idPseudo = :idPseudo');
					$updateAvatar->execute(array(
						'avatar' => $_SESSION['idPseudo'].".".$extensionUpload,
						'idPseudo' => $_SESSION['idPseudo']
					));
					header('location:profil.php?id='.$_SESSION['idPseudo']);
				}else{
					header('location:modifyProfil.php?erreur=Erreur durant l\'importation de votre photo de profil');
				}
			}else{
				header('location:modifyProfil.php?erreur=Votre photo de profil doit être au format jpg, jpeg, gif ou png');
			}
		}else{
			header('location:modifyProfil.php?erreur=Votre photo de profil ne doit pas dépasser 2MO');
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
				<input type="text" name="pseudo" class="form-control" placeholder="Nom d'utilisation" autofocus value="<?= $userinfo['nom']; ?>">
			</div><br/>
			<div class="input-group">
				<input type="email" name="email" class="form-control" placeholder="Votre email" value="<?= $userinfo['email']; ?>">
			</div><br/>
			<div class="input-group">
				<input type="password" name="mdp" class="form-control" placeholder="Votre mot de passe">
			</div><br/>
			<div class="input-group">
				<input type="password" name="mdp2" class="form-control" placeholder="Confirmation-mot-de-passe">
			</div><br/>
			<div class="input-group">
				<input type="file" name="avatar">
			</div><br/>
			<div class="input-group">
				<input style="background: #FF7B07; cursor: pointer; outline: none;" class="btn btn-primary btn-lg" type="submit" name="btnSubmit" value="Envoyer">
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