<?php 
session_start();
$_SESSION = array();
session_destroy();
header('location:connexion.php?msg=Vous êtes déconnecté. Veuillez vous reconnecter !');
?>