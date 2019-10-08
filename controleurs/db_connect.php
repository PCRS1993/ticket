<?php
/* Connexion à une base ODBC avec l'invocation de pilote */
$bdd = 'mysql:dbname=ticket;host=localhost';
$user = 'root';
<<<<<<< HEAD
$password = 'mami93';
=======
$password = 'dd';
>>>>>>> e680c8280019527f2aa136a2752d1a247d81463b

  
try {
    $bdd = new PDO($bdd, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
         

         ?>