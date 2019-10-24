<?php 
require_once('db_connect.php');


	 if (isset($_POST['update'])) {
    $id = $_POST['ID'];   
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $adresse = $_POST['adresse'];
    $tel = $_POST['tel'];
    $teltuteur = $_POST['teltuteur'];
    $session = $_POST['session'];
    $ref = $_POST['referentiel'];
    $statut = $_POST['statut'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    
    $bdd->exec("UPDATE `apprenant` SET `nom` = '$nom', `prenom` = '$prenom', `email` = '$email', `adresse` = '$adresse', `tel` = '$tel', `teltuteur` = '$teltuteur', `session` = '$session', `referentiel` = '$ref', `statut` = '$statut', `login` = '$login', `password` = '$password' WHERE `apprenant`.`ID` = $id");

    header('location: ../Views/Listedesapprenants.php');

  }
?>