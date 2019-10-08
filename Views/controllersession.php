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
                $nom = $_POST['nom'];
                $annee = $_POST['annee'];
                $datedebut = $_POST['datedebut'];
                $datefin = $_POST['datefin'];
                $effectif = $_POST['effectif'];
                $bdd->exec("INSERT INTO session (`ID`, `nom`, `annee`, `datedebut`, `datefin`, `effectif`) VALUES (NULL, '$nom', '$annee', '$datedebut', '$datefin', '$effectif')");


            }

            header("Location: listes-sessions.php");
             

          
            
?>