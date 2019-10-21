<?php
//Pour se connecter à une BDD
   $bdd = 'mysql:dbname=ticket;host=localhost';
<<<<<<< HEAD
   $user = 'root';
   $password = 'dd';
=======
   $user = 'makenzy';
   $password = '@Makenzy89';
>>>>>>> 2ae1a4fd15d8bc02080650b7bde29f9f770b3295

try {
   $bdd = new PDO($bdd, $user, $password);
    }
    catch (PDOException $e) {

echo 'connexion echouée ' . $e->getMessage();

                            }

         ?>