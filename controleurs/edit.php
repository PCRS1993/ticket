<?php 
require_once('db_connect.php');


	 if (isset($_POST['update'])) {
    $id = $_POST['ID'];   
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $profil = $_POST['profil'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    
    $bdd->exec("UPDATE `user` SET `nom` = '$nom', `prenom` = '$prenom', `login` = '$login', `password` = '$password', `profil` = '$profil' WHERE `user`.`ID` = $id");

    header('location: ../Views/listes-utilisateurs.php');

  }
?>