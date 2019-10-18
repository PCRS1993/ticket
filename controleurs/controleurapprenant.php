<?php
require_once('db_connect.php');

if (isset ($_POST['valider'])){
    $nom = $_POST['nom'];
    $prenom=$_POST['prenom'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $login=$_POST['login'];
    $password=$_POST['password'];
    $profil=$_POST['profil'];
    $confirmer=$_POST['confirmer'];              

    $bdd->exec("INSERT INTO `apprenant` (`ID`, `nom`, ) VALUES (NULL, '$nom')");

                echo "valider";
            }

            header("Location: ../Views/Listedesapprenants.php");
             
          
?>