<body><!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../Public/css/listesref.css">
        <title>listesref</title>
    </head>
    <body>
    <header>
    <a href="listes-utilisateurs.php">Utilisateurs</a>
    <a href="listes-sessions.php">Sessions</a>
    
    </header> 
    <center><div class="div1"> 
                            
                                    <div  class="div2">               
                                    <h1>Liste des Référentiels</h1>   
                                            
                            </div>
                            <button><a href="new-referentiel.php">NOUVEAU</a></button>
                            <?php
     include_once('../controleurs/db_connect.php');
           $query = $bdd->query("SELECT * FROM `referentiel` ");
           $referentiels= $query->fetchAll();
          // var_dump($users) ;

         ?>


         <table border="1">
                <thead>
                <tr>
                     <th>Nom</th>
                     <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                    foreach ($referentiels as $key => $referentiel) {
                   
                ?>
                    <tr>
                       <td><?php echo $referentiel['nom'];?></td>
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
