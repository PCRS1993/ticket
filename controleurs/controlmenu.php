<?php
require_once('db_connect.php');

if (isset ($_POST['valider'])){
    $nom = $_POST['nommenu'];
    $bdd->exec("INSERT INTO `menu` (`ID`, `nommenu`) VALUES (NULL, '$nom')");

                echo "envoye";
            }

            header("Location: ../Views/listemenu.php");
            
        
?>