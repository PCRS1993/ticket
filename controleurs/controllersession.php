<?php
require_once('db_connect.php');

if (isset ($_POST['valider'])){
                $nom = $_POST['nom'];
                $annee = $_POST['annee'];
                $datedebut = $_POST['datedebut'];
                $datefin = $_POST['datefin'];
                $effectif = $_POST['effectif'];
                $bdd->exec("INSERT INTO session (`ID`, `nom`, `annee`, `datedebut`, `datefin`, `effectif`) VALUES (NULL, '$nom', '$annee', '$datedebut', '$datefin', '$effectif')");


            }

            header("Location: ../Views/listes-sessions.php");
             

          
            
?>