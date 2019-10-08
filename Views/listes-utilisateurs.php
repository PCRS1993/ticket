<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Public/css/liste-utilisateurs.css">
    <title>listes-utilisateurs</title>
</head>
<body>
<header>
    <div>
  <a href="listes-utilisateurs.php">Utilisateurs</a>
  <a href="listes-sessions.php">Sessions</a>

  </header> 
   <center><div class="div1"> 
                        <div class="div2">
                                <div  class="div2">               
                                <h1>Liste Utilisateurs</h1>        
                                        <button><a href="page-utilisateur.php">NOUVEAU</a></button>
                        </div>
                        <?php
     include_once('../controleurs/db_connect.php');
           $query = $bdd->query("SELECT * FROM `user` ");
           $users= $query->fetchAll();
          // var_dump($users) ;

         ?>


         <table border="1">
                <thead>
                <tr>
                     <th>Nom</th>
                     <th>Prenom</th>
                     <th>Login</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                    foreach ($users as $key => $user) {
                   
                ?>
                    <tr>
                       <td><?php echo $user['nom'];?></td>
                       <td><?php echo $user['prenom'];?></td>
                       <td><?php echo $user['login'];?></td>
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