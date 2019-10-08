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
                        </div>             
            <form action="../controleurs/newreferentiel.php" method="post">
                Sessions
                <input style="margin-left:230px; margin-bottom: 25px;" type="text" name="nom" value=""><br>
                    <option value="promo 1">
                    <option value="promo 2">
                    <option value="promo 3">
                Référentiels
                <input style="margin-left:160px; margin-bottom: -50px;" type="text" name="datecreation" value=""><br><br>
                    <option value="ref-dig">
                    <option value="dev-web">
                    <option value="data-artisan">
                Effectif
                <input style="margin-left:160px; margin-bottom: -50px;" type="text" name="datecreation" value=""><br><br>
                <input type="reset" name="" id="">
                <input type="submit" name="valider" id="">
                </form>
    </div></center>
            <img src="../Public/img/logo.jpg" alt="logo">
        </div>
    </body>
</html>