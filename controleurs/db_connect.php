<?php
//Pour se connecter à une BDD
   $bdd = 'mysql:dbname=ticket;host=localhost';
   $user = 'root';
   $password = 'mami93';

try {
   $bdd = new PDO($bdd, $user, $password);
    }
    catch (PDOException $e) {

echo 'connexion echouée ' . $e->getMessage();

                            }

         ?>