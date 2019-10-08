<?php
require_once('db_connect.php');

if (isset ($_POST['valider'])){
    $nom = $_POST['nom'];
    $bdd->exec("INSERT INTO `referentiel` (`ID`, `nom`) VALUES (NULL, '$nom')");

                echo "envoye";
            }

            //header("Location: ../Views/listesref.php");
             
          
?>