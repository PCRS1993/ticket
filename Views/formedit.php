<?php 
require_once('../controleurs/db_connect.php');

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $record = $bdd->query("SELECT * FROM user WHERE ID=$id")-> fetch();

    if (isset($record['ID'])) {

    
      $nom = $record['nom'];
      $prenom = $record['prenom'];
      $profil = $record['profil'];
      $login = $record['login'];
      $password = $record['password'];

      }

      


   
    }

   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/utilisateur.css">
    <meta http-equiv="X-UA-Compatible">

</head>
<title>new utilisateur</title>

<body>
<header>
    <div>
  <a href="listes-utilisateurs.php">Utilisateurs</a>
  <a href="listes-sessions.php">Sessions</a>

  </header>
        <center><div class="div1"> 
                <div  class="div2">
                <h1>Nouvel Utilisateur</h1>
                </div>

                <form action="../controleurs/edit.php" method="post">
                  <input required style="margin-left:200px; margin-bottom: 15px;" type="hidden" name="ID" value="<?php echo $id; ?>"><br>
                  NOM:
                <input required style="margin-left:200px; margin-bottom: 15px;" type="text" name="nom" value="<?php echo $nom; ?>"><br>
                  PRÈNOM:
              <input required style="margin-left:165px; margin-bottom: -4px;" type="text" name="prenom" value="<?php echo $prenom; ?>"><br><br>
              PROFILS:
              <input required style="margin-left:165px; margin-bottom: -4px;" type="text" name="profil" value="<?php echo $profil; ?>"><br><br>
              LOGIN:
              <input required style="margin-left:185px; margin-bottom: -4px;"type="text" name="login" value="<?php echo $login; ?>"><br><br>
              MOT DE PASSE:
            <input required style="margin-left:110px; margin-bottom: -4px;" type="password" name="password" value="<?php echo $password; ?>"><br><br>
             
              
                 <div>

   
      <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
    
      
    
  </div>
                </form>
                
                </center></div>
                <img src="../Public/img/logo.jpg" alt="logo">
                </div>
</body>
</html>