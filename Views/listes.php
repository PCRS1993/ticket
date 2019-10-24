<?php
    include_once('../controleurs/db_connect.php');
          $query = $bdd->query("SELECT r.nom as nomref, s.nom as nomsession, ref.effectif FROM `refeffectif` ref, `session` s,`referentiel` r WHERE ref.id_ref = r.ID AND ref.id_session = s.ID");

         $refeffectifs= $query->fetchAll();
        
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Public/css/listes.css">
    <title>listes</title>
</head>
<body>
<header>
    <div>
<a href="listes-utilisateurs.php">Utilisateurs</a>
<a href="listes-sessions.php">Sessions</a>

</header> 
<center><div class="div1"> 
                        
                                <div  class="div2">               
                                    <h1>Liste Référentiel/Session</h1>
                                        <button><a href="page-utilisateur.php">NOUVEAU</a></button>
                        </div>



        <table border="1">
                <thead>
                <tr>
                    <th>Session</th>
                    <th>Referentiels</th>
                    <th>Effectif</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                    foreach ($refeffectifs as $key => $refeffectif) {
                
                ?>
                    <tr>
                        <td><?php echo $refeffectif['nomsession'];?></td>
                        <td><?php echo $refeffectif['nomref'];?></td>
                        <td><?php echo $refeffectif['effectif'];?></td>
                    </tr>
                <?php

                    }
                ?>
                </tbody>
        </table>
                    <h2>Coding for better Life</h2>
                    
    </div></center>
    <img src="../Public/img/logo.jpg" alt="logo">
    
    </div>
</body>
</html>