<?php 
session_start(); 
$bdd = new PDO('mysql:host=127.0.0.1;dbname=admin_tuto', 'root', '');
if (isset($_SESSION['idPseudo']) AND $_SESSION['idPseudo'] > 0) {
	$getId = intval($_SESSION['idPseudo']);
	$requser = $bdd->prepare('SELECT * FROM pseudo WHERE idPseudo = ?');
	$requser->execute(array($getId));
	$userinfo = $requser->fetch();
}

// $bdd = new PDO('mysql:host=127.0.0.1;dbname=elearning', 'root', '');
// if (isset($_SESSION['idAdmin']) AND $_SESSION['idAdmin'] > 0) {
// 	$getId = intval($_SESSION['idAdmin']);
// 	$requser = $bdd->prepare('SELECT * FROM admin WHERE idAdmin = ?');
// 	$requser->execute(array($getId));
// 	$userinfo = $requser->fetch();
// }
?>