<?php 
require_once('../controleurs/db_connect.php');

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $record = $bdd->query("SELECT * FROM referentiel WHERE ID=$id")-> fetch();

    if (isset($record['ID'])) {

      $nom = $record['nom'];
      
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
<title>Modifier référentiel</title>

<body>
<header>
    <div>
  <a href="listes-utilisateurs.php">Utilisateurs</a>
  <a href="listes-sessions.php">Sessions</a>

  </header>
        <center><div class="div1"> 
                <div  class="div2">
                <h1>Modifier référentiel</h1>
                </div>

                <form action="../controleurs/editref.php" method="post">
                  <input required style="margin-left:200px; margin-bottom: 15px;" type="hidden" name="ID" value="<?php echo $id; ?>"><br>
                  NOM:
                <input required style="margin-left:200px; margin-bottom: 15px;" type="text" name="nom" value="<?php echo $nom; ?>"><br>
                 
                 <div>

   
      <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
    
      
    
  </div>
                </form>
                
                </center></div>
                <img src="../Public/img/logo.jpg" alt="logo">
                </div>
</body>
</html>