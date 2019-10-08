<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/connexion.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>page connexion</title>
</head>
<body>
<header></header>
 <div>     
     <center><div class="div1"> 
          <div class="div2">
          <H1>
            CONNEXION
          </H1>
          
    </div>  
    <?php 
        if(isset($_GET['erreur'])){
             echo $_GET['erreur'];

         }
         
?>
 <form action="../controleurs/connexion1.php" method="post">
      LOGIN:
      <input style="margin-left:95px;" type="text" name="login" id=""><br>
      MOT DE PASSE:
  <input type="text" name="password" id=""><br><br>
     
      <input style= "float: left; margin-left: 140px; width: 80px;" type="reset" name="" id="">
      <input style= "float: left; margin-left: 120px; width: 80px;" type="submit" name="" id="">
    </form>
    <h2>Coding for better Life</h2>
    


        </div></center>
<img src="../Public/img/logo.jpg" alt="logo">
        </div> 

</body>

</html>