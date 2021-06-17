<?php
  function Bdd(){
    try{
        $bdd = new PDO ("mysql:host=localhost;dbname=e_learning_ida", "root", "");
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        $bdd->exec("SET NAMES utf8");
    }
    catch(PDOException $e){
        echo "Echec de la connexion ". $e->getMessage();
    }
    return $bdd;
  }
  setlocale(LC_TIME, 'fr');
?>
