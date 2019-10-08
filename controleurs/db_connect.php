<?php
/* Connexion à une base ODBC avec l'invocation de pilote */
$bdd = 'mysql:dbname=ticket;host=localhost';
$user = 'makenzy';
$password = '@Makenzy89';

  
try {
    $bdd = new PDO($bdd, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
         

         ?>