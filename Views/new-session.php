<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/new session.css">
    <meta http-equiv="X-UA-Compatible" 

    
</head>
<title>new session</title>

<body>
  <header>
    <div>
  <a href="listes-utilisateurs.php">Utilisateurs</a>
  <a href="listes-sessions.php">Sessions</a>

  </header>
        <center><div class="div1"> 
                <div  class="div2">
                <h1>Nouvelle session</h1>
               
            
                </div>
                

                

               

                <form action="../controleurs/controllersession.php" method="post">
                  NOM:
                <input required style="margin-left:200px; margin-bottom: 10px;" type="text" name="nom" value=""><br>
                  ANNEÉ:
              <input required style="margin-left:180px; margin-bottom: -7px;" type="text" name="annee" value=""><br><br>
              DATE DÉBUT:
              <input required style="margin-left:130px; margin-bottom: -7px;" type="text" name="datedebut" value=""><br><br>
              DATE FIN:
              <input required style="margin-left:160px; margin-bottom: -10px;"type="text" name="datefin" value=""><br><br>
              EFFECTIF:
            <input required style="margin-left:155px; margin-bottom: -7px;" type="text" name="effectif" value=""><br><br>
              
                  <input type="reset" name="" id="">
                  <input type="submit" name="valider" id="">
                </form>
                 
                </center></div>
<img src="../Public/img/logo.jpg" alt="logo">    
                </div>
</body>
</html>