<?php
require_once('db_connect.php');

if (isset ($_POST['valider'])){
    $nom = $_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
    $adresse=$_POST['adresse'];
    $login=$_POST['login'];
    $password=$_POST['password'];
    $profil=$_POST['profil'];
    $confirmer=$_POST['confirmer'];              

    $bdd->exec("INSERT INTO `apprenant` (`ID`, `nom`, `prenom` `email`, `adresse`, `login`, `password`, `profil`, `nom`,) VALUES (NULL, '$nom', '$prenom', '$email', '$adresse', '$login', '$password', '$profil')");

                echo "valider";
            }

            header("Location: ../Views/Listedesapprenants.php");
             
          
?>