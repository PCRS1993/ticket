<?php
require_once('db_connect.php');

// var_dump();
//die();
if (isset ($_POST['valider'])){

    $jour = $_POST['jour'];
    $menu1 = $_POST['menu1'];
    $menu2 = $_POST['menu2'];
    $menu3 = $_POST['menu3'];
    $menu4 = $_POST['menu4'];
    $menu5 = $_POST['menu5'];
    $dessert = $_POST['dessert'];


    
    $bdd->exec("INSERT INTO `plannifier` (`ID`, `jour`, `idmenu1`, `idmenu2`, `idmenu3`, `idmenu4`, `idmenu5`, `dessert`) VALUES (NULL, '$jour', '$menu1', '$menu2', '$menu3', '$menu4', '$menu5', '$dessert')");
    header("Location: ../Views/listeplanning.php");
            }

            
?>