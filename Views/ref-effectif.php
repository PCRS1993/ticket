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
                        </>             
            <form action="../controleurs/newreferentiel.php" method="post">
                    <div>
                    <label for="">Sessions</label>  
                            <select class="sessions">
                            <option>promo 1</option>
                            <option>promo 2</option>
                            <option>promo 3</option>
                            </select> 
                </div>
                <div>
                    <label for="">Référentiels</label>   
                    
                    <select class="referentiels">
                    <option>ref-dig</option>
                    <option>dev-web</option>
                    <option>data-artisan</option>
                    </select> 
                </div>
                <div>
                    <label for=""> Effectif</label> 
                    <input style="margin: 20px" type="text" name="nom" value=""><br>
                </div>
                <div>
                        <input type="reset" name="" id="">
                        <input type="submit" name="valider" id="">

                </div>
                </form>
    </div></center>
            <img src="../Public/img/logo.jpg" alt="logo">
        </div>
    </body>
</html>