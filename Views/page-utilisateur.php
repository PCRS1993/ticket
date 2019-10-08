<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/utilisateur.css">
    <meta http-equiv="X-UA-Compatible" 

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

                <form action="../controleurs/nouveluser.php" method="post">
                  NOM:
                <input required style="margin-left:200px; margin-bottom: 15px;" type="text" name="nom" value=""><br>
                  PRÈNOM:
              <input required style="margin-left:165px; margin-bottom: -4px;" type="text" name="prenom" value=""><br><br>
              PROFILS:
              <input required style="margin-left:165px; margin-bottom: -4px;" type="text" name="profil" value=""><br><br>
              LOGIN:
              <input required style="margin-left:185px; margin-bottom: -4px;"type="text" name="login" value=""><br><br>
              MOT DE PASSE:
            <input required style="margin-left:110px; margin-bottom: -4px;" type="password" name="password" value=""><br><br>
             CONFIRMER MOT DE PASSE:
            <input required style="margin-left:110px; margin-bottom: -4px;" type="password" name="confirmer" value=""><br><br>
              
                  <input type="reset" name="" id="">
                  <input type="submit" name="valider" id="">
                </form>
                
                </center></div>
                <img src="../Public/img/logo.jpg" alt="logo">
                </div>
</body>
</html>