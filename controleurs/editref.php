<?php 

require_once('db_connect.php');


	 if (isset($_POST['update'])) {
    $id = $_POST['ID'];   
    $nom = $_POST['nom'];
    
    
    $bdd->exec("UPDATE `referentiel` SET `nom` = '$nom',  WHERE `referentiel`.`ID` = $id");

    header('location: ../Views/listesref.php');

  }
?>