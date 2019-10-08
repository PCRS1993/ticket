<?php

/* Connexion à une base ODBC avec l'invocation de pilote */
$bdd = 'mysql:dbname=ticket;host=localhost';
$user = 'PCRS';
$password = 'Pcrs15981993*';

  
try {
    $bdd = new PDO($bdd, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

if (isset ($_POST['valider'])){
                $nom=$_POST['nom'];
                $prenom=$_POST['prenom'];
                $login=$_POST['login'];
                $password=$_POST['password'];
                $profil=$_POST['profil'];
                $bdd->exec("INSERT INTO user (`ID`, `nom`, `prenom`, `login`, `password`, `profil`) VALUES (NULL, '$nom', '$prenom', '$login', '$password', '$profil')");
            }

           header("Location: listes-utilisateurs.php");
            
?>