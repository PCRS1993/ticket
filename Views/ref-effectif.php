<?php

include_once('../controleurs/db_connect.php');
$query = $bdd->query("SELECT * FROM session");
$sessions= $query->fetchAll(); 
$query = $bdd->query("SELECT * FROM referentiel");
$referentiels= $query->fetchAll(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Public/css/ref-effectif.css">
    <title>new referentiel</title>
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
                                <h1>Ref_Effectif</h1> 
                                    
            <form action="../controleurs/refeffectif.php" method="post">
                    <div>
                    <label for="">Sessions</label>   
                            <select class="sessions" name="session" >
                            <option> </option>
                            
   <?php 
                    foreach ($sessions as $key => $session) {  
                    ?>
                        <option value="<?php echo $session['ID'];?>"><?php echo $session['nom'];?></option> 

                        <?php   } ?>
                         
                        </select> 
                </div>
                <div>
                    <label for="">Référentiels</label>   
                    
                    <select class="referentiels" name="referentiel">
                    <option> </option>
                   
                    
                    <?php 
                    foreach ($referentiels as $key => $referentiel) {  
                    ?>
                        <option value="<?php echo $referentiel['ID'];?>"><?php echo $referentiel['nom'];?></option> 
                 <?php   } ?>
                </select> 
                </div>
                <div>
                    <label for=""> Effectif</label> 
                    <input style="margin: 0px" type="text" name="effectif" value=""><br>
                </div>
                <div>
                        <input type="reset" name="" id="">
                        <input type="submit" name="valider" id="">

                </div>
                <?php
                if(isset($_GET['erreur'])){
                echo $_GET['erreur'];}
                ?>
                </form>
    </div></center>
            <img src="../Public/img/logo.jpg" alt="logo">
        </div>
    </body>
</html>