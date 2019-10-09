<?php
require_once('db_connect.php');


if (isset($_GET['del'])) {

	$id = $_GET['del'];
	$bdd->exec ("DELETE FROM `referentiel` WHERE `ID` = $id");
	
	header('location: ../Views/listesref.php');
}

?>