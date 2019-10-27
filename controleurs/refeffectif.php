<?php
require_once('db_connect.php');

if (isset ($_POST['valider'])){
    $sessions = $_POST['session'];
    $referentiel = $_POST['referentiel'];
    $effectif = $_POST['effectif'];
    
    $bdd->exec("INSERT INTO `refeffectif` (`ID`, `id_ref`, `id_session`, `effectif`) VALUES (NULL, '$referentiel', '$sessions', '$effectif')");

    header("Location: ../Views/listes.php");
            }

            
?>