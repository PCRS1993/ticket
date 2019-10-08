<?php
require_once('db_connect.php');

if (isset ($_POST['valider'])){
                $nom=$_POST['nom'];
                $prenom=$_POST['prenom'];
                $login=$_POST['login'];
                $password=$_POST['password'];
                $profil=$_POST['profil'];
                $confirmer=$_POST['confirmer']; 

                if ($password != $confirmer) {

                    header("location: ../Views/page-utilisateur.php");
                }else {
                    $bdd->exec("INSERT INTO user (`ID`, `nom`, `prenom`, `login`, `password`, `profil`) VALUES (NULL, '$nom', '$prenom', '$login', '$password', '$profil')");
                    header("location: ../Views/listes-utilisateurs.php");
                }
               
            }

        //   
            
?>