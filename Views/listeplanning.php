<?php

     include_once('../controleurs/db_connect.php');

    $query = $bdd->query("SELECT plannifier.jour as pj,idmenu1,nommenu,dessert FROM plannifier, menu WHERE plannifier.idmenu1 = menu.ID");
    $menus1 = $query->fetchAll(); 

    $query = $bdd->query("SELECT plannifier.jour as pj,idmenu2,nommenu,dessert FROM plannifier, menu WHERE plannifier.idmenu2 = menu.ID");
    $menus2 = $query->fetchAll(); 

    $query = $bdd->query("SELECT plannifier.jour as pj,idmenu3,nommenu,dessert FROM plannifier, menu WHERE plannifier.idmenu3 = menu.ID");
    $menus3 = $query->fetchAll(); 

    $query = $bdd->query("SELECT plannifier.jour as pj,idmenu4,nommenu,dessert FROM plannifier, menu WHERE plannifier.idmenu4 = menu.ID");
    $menus4 = $query->fetchAll(); 

    $query = $bdd->query("SELECT plannifier.jour as pj,idmenu5,nommenu,dessert FROM plannifier, menu WHERE plannifier.idmenu5 = menu.ID");
    $menus5 = $query->fetchAll(); 

        //var_dump($plannifiers) ;die();

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Liste des Planning</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

      <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
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
      <button type="submit" class="btn btn-success" onclick="window.print();"><a href="./Listedesapprenant.php">Imprimer la liste</a></button>
      </div>
      <div class="col-auto my-5">
      <button type="submit" class="btn btn-success"> <a href="./newapprenant.php"> Nouveau Planning</a></button>
      </div>
    </div>
  </form>
  </div>
</div>
       <div class="row">
       <div class="col-6"></div>
       <div class="col">
              <div class="card border border-primary">
                      <div class="card-header bg-primary">
                        <div class="col-12 text-center">
                        Liste Planning
                      </div>
                      </div>

                      
                      <div class="card-body">

                       
                        <table class="table w-100" id="plannifier" >
                    <thead>
                      <tr>
                        <th>Jour</th>
                        <th>Menu 1</th>
                        <th>Menu 2</th>
                        <th>Menu 3</th>
                        <th>Menu 4</th>
                        <th>Menu 5</th>
                        <th>Dessert</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php 
                      $i = 0;

                    foreach ($menus1 as $key => $menu1) {
                
                ?>
                    <tr>

                       <td class="table-primary"><?php echo $menu1['pj'];?></td>
                       <td class="table-secondary"><?php echo $menu1['nommenu'];?></td>
                       <td class="table-secondary"><?php echo $menus2[$i]['nommenu'];?></td>
                       <td class="table-primary"><?php echo $menus3[$i]['nommenu'];?></td>
                       <td class="table-secondary"><?php echo $menus4[$i]['nommenu'];?></td>
                       <td class="table-secondary"><?php echo $menus5[$i]['nommenu'];?></td>
                       <td class="table-secondary"><?php echo $menu1['dessert'];?></td>
                       
                       
                       <td class="table-dark">

        <a href="./formmodifapprenant.php?edit=<?php echo $apprenant['ID']; ?>"><i class="fa fa-edit"></i>Edit</a>
      </td>
      <td class="table-dark">
        <a href="../controleurs/deleteapprenant.php?del=<?php echo $apprenant['ID']; ?>" onclick="return confirm('voulez-vous Supprimer?')"><i class="fa fa-trash"></i>delete</a>
      </td>


                    </tr>
                <?php
                    $i++;
                    }
                ?>
                </tbody>
        
                   
                        
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

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script>
$(document).ready(function() {
    $('#plannifier').DataTable();
} );
</script>


  </body>
</html>
