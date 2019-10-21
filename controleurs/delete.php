<?php
require_once('db_connect.php');


if (isset($_GET['del'])) {

	$id = $_GET['del'];
	$bdd->exec ("DELETE FROM `user` WHERE `ID` = $id");
	
	header('location: ../Views/listes-utilisateurs.php');
}

?>