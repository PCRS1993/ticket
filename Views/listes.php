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
                                    
                                        <button><a href="page-utilisateur.php">NOUVEAU</a></button>
                        </div>
                        <?php
    include_once('db_connect.php');
           $query = $pdo->query("SELECT * FROM `liste` ");
        
        $listes= $query->fetchAll();
          // var_dump($listes) ;

        ?>


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
                    foreach ($listes as $key => $liste) {
                
                ?>
                    <tr>
                        <td><?php echo $user['session'];?></td>
                        <td><?php echo $user['referentiels'];?></td>
                        <td><?php echo $user['effectif'];?></td>
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