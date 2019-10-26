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
    <title>Liste des Apprenants</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
     <div class="container-fluid px-0">
     <!-- Barre de Navigation -->
      
       
       
     <nav class="navbar navbar-expand-lg navbar-success bg-primary">
       
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarNavDropdown">
         <ul class="navbar-nav">
           
             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Utilisateurs
             </a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
               <a class="dropdown-item" href="page-utilisateur.php">Nouveau</a>
               <a class="dropdown-item" href="listes-utilisateurs.php">Liste Des Utilisateurs</a>
               
         </div>
             </ul>

             <ul class="navbar-nav">
           
             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Sessions
             </a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
               <a class="dropdown-item" href="new-session.php">Nouveau</a>
               <a class="dropdown-item" href="listes-sessions.php">Liste Des Sessions</a>
               
         </div>
             </ul>
             <ul class="navbar-nav">
           
             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Référentiel
             </a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
               <a class="dropdown-item" href="new-referentiel.php">Nouveau</a>
               <a class="dropdown-item" href="listesref.php">Liste Des Référentiels</a>
               
         </div>
             </ul>
             
             
       </div>
</nav>      
       
         <!-- Logo-->
       <div class="row">
         <div class="col-4">
           <img src="../Public/img/logo.jpg" class="img-fluid mw-7" alt="">
         </div>
        
           <div class="col"> 
       
         <!-- Formulaire -->
         <form class="form-inline ">
  <div class="form-row align-items-center">
    <div class="col-auto my-5">
      <label class="mr-sm-6 sr-only" for="inlineFormCustomSelect">Référentiel</label>
      <select class="custom-select mr-sm-4" id="inlineFormCustomSelect">Référentiel
        <option selected></option>
        <?php 
                    foreach ($referentiels as $key => $referentiel) {  
                    ?>
                        <option value="<?php echo $referentiel['nom'];?>"><?php echo $referentiel['nom'];?></option> 
                 <?php   } ?>
      </select>
    </div>
    <div class="col-auto my-5">
      <label class="mr-sm-6 sr-only" for="inlineFormCustomSelect">Session</label>
      <select class="custom-select mr-sm-4" id="inlineFormCustomSelect">Session
        <option selected ></option>
        <?php 
                    foreach ($sessions as $key => $session) {  
                    ?>
                        <option value="<?php echo $session['nom'];?>"><?php echo $session['nom'];?></option> 

                        <?php   } ?>
      </select>
      </div>
    </div>
    <div class="col-auto my-1">
      <button type="submit" class="btn btn-success">Rechercher</button>
      </div>
      <div class="col-auto my-1">
      <button type="submit" class="btn btn-success" onclick="window.print();"><a href="./Listedesapprenant.php">Imprimer la liste</a></button>
      </div>
      <div class="col-auto my-1">
      <button type="submit" class="btn btn-success"> <a href="./newapprenant.php"> Nouvel Apprenant</a></button>
      </div>
    </div>
  </form>
  </div>
</div>
       <div class="row">
       <div class="col-3"></div>
       <div class="col">
              <div class="card border border-primary">
                      <div class="card-header bg-primary">
                        <div class="col-12 text-center">
                        Ajout Apprenant
                      </div>
                      </div>

                      
                      <div class="card-body">

                        <?php
          include_once('../controleurs/db_connect.php');
          $query = $bdd->query("SELECT * FROM `apprenant`");
          $apprenants= $query->fetchAll();

                    ?>

                        <table class="table">
                    <thead>
                      <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Adresse</th>
                        <th>Téléphone</th>
                        <th>Téléphone tuteur</th>
                        <th>Statut</th>
                        <th>Session</th>
                        <th>Référentiel</th>
                        <th>Login</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php 
                    foreach ($apprenants as $key => $apprenant) {
                
                ?>
                    <tr>

                       <td class="table-primary"><?php echo $apprenant['nom'];?></td>
                       <td class="table-secondary"><?php echo $apprenant['prenom'];?></td>
                       <td class="table-light"><?php echo $apprenant['email'];?></td>
                       <td class="table-success"><?php echo $apprenant['adresse'];?></td>
                       <td class="table-danger"><?php echo $apprenant['tel'];?></td>
                       <td class="table-info"><?php echo $apprenant['teltuteur'];?></td>
                       <td class="table-muted"><?php echo $apprenant['statut'];?></td>
                       <td class="table-dark"><?php echo $apprenant['session'];?></td>
                       <td class="table-warning"><?php echo $apprenant['referentiel'];?></td>
                       <td class="table-white"><?php echo $apprenant['login'];?></td>
                       <td class="table-dark">
        <a href="./formmodifapprenant.php?edit=<?php echo $apprenant['ID']; ?>">Edit</a>

      </td>
      <td class="table-dark">
        <a href="../controleurs/deleteapprenant.php?del=<?php echo $apprenant['ID']; ?>" onclick="return confirm('voulez-vous Supprimer?')">delete</a>
      </td>


                    </tr>
                <?php
                    
                    }
                ?>
                </tbody>
        
                    </tbody>
                  </table>
                        
                      </div>
              </div>
       
       </div>
       <div class="col-3"></div>
       
       </div>
     </div> 

<style text="text/css">
.bg-primary{
  background-color:#068689!important;
}
.img-fluid {
    max-width: 30% !important;
    height: auto;
}
.border-primary{
  border-color: black!important;
  border-width: 2px !important;
}
a{
  text-decoration: none;
  color: white;
}
button{
  background-color:#068689!important;

}
.text-primary{
  color: white!important;
}

</style>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  </body>
</html>
