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
         

         ?>