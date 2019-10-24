<?php
//Pour se connecter à une BDD
   $bdd = 'mysql:dbname=ticket;host=localhost';
<<<<<<< HEAD

   $user = 'root';
   $password = 'dd';


=======
   $user = 'PCRS';
   $password = 'Pcrs15981993*';
>>>>>>> 574ca3c522d2348866c691672fd502998dd19aa5

try {
   $bdd = new PDO($bdd, $user, $password);
    }
    catch (PDOException $e) {

echo 'connexion echouée ' . $e->getMessage();

                            }

         ?>