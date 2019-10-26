<?php
require_once('db_connect.php');
//var_dump($_POST);
//die();

if (isset ($_POST['valider'])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $adresse = $_POST['adresse'];
    $tel = $_POST['tel'];
    $teltuteur = $_POST['teltuteur'];
    $session = $_POST['session'];
    $ref = $_POST['ref'];
    $statut = $_POST['statut'];
    $login = $_POST['login'];
    $pwd = $_POST['pwd'];

    $bdd->exec("INSERT INTO `apprenant` (`ID`, `nom`, `prenom`, `email`, `adresse`, `tel`, `teltuteur`, `session`, `referentiel`, `statut`, `login`, `password`) 
    VALUES (NULL, '$nom', '$prenom', '$email', '$adresse', '$tel', '$teltuteur', '$session', '$ref', '$statut', '$login', '$pwd')");

    header("Location: ../Views/Listedesapprenants.php");
            }

            
?>