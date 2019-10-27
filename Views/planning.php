<?php
include_once('../controleurs/db_connect.php');
$query = $bdd->query("SELECT * FROM menu");
$menus= $query->fetchAll(); 
//var_dump($menu) ;
?>

<!doctype html>
<html lang="en">
  <head>
    <title>New planning</title>
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

            <div class="btn-group">
                  <button type="button" class="btn text-primary ">Utilisateurs</button>
                  <button type="button" class="btn  dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="page-utilisateur.php">Nouveau</a>
                    <a class="dropdown-item" href="listes-utilisateurs.php">Liste</a>
                  
                  </div>
            </div>

            <div class="btn-group">
                  <button type="button" class="btn text-primary ">Sessions</button>
                  <button type="button" class="btn  dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="new-session.php">Nouvelle session</a>
                    <a class="dropdown-item" href="listes-sessions.php">Liste</a>
                  
                  </div>
            </div>

            <div class="btn-group">
                  <button type="button" class="btn text-primary ">Référent/Session</button>
                  <button type="button" class="btn  dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="ref-effectif.php">Nouveau</a>
                    <a class="dropdown-item" href="listes.php">Liste</a>
                  
                  </div>
            </div>    
            <div class="btn-group">
                  <button type="button" class="btn text-primary ">Apprenant</button>
                  <button type="button" class="btn  dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="newapprenant.php">Nouveau</a>
                    <a class="dropdown-item" href="Listedesapprenants.php">Liste</a>
                  
                  </div>
            </div> 

        
</nav>      
          <!-- Logo-->
        <div class="row">
            <img src="../Public/img/logo.jpg" class="img-fluid mw-7" alt="">
        </div>
          <!-- Formulaire -->
        <div class="row">
        <div class="col-3 justify-content-center"></div>
        <div class="col-6">
              <div class="card border border-primary">
                      <div class="card-header bg-primary">
                      <div class= "text-center text-primary font-weight-bold">
                        Ajout Planning
                        </div>
                      </div>
                      <div class="card-body">

  <form action="../controleurs/controlplanning.php" method="post">
  <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputState">Jour</label>
                  <select id="inputState" class="form-control" name="jour">
                    <option selected></option>
                    <option>Lundi</option>
                    <option>Mardi</option>
                    <option>Mercredi</option>
                    <option>Jeudi</option>
                    <option>Vendredi</option>
                  </select>
        </div>
          <div class="form-group col-md-6">
                <label for="inputSession">menu 1</label>
                  <select id="inputSession" class="form-control" name="menu1">
                            <option></option>
                            
  <?php 
                    foreach ($menus as $key => $menu) {  
                    ?>
                        <option value="<?php echo $menu['ID'];?>"><?php echo $menu['nommenu'];?></option> 

                        <?php   } ?>
                        
                        </select> 
                  
          </div>
  </div>


  <div class="form-row">
        <div class="form-group col-md-6">
                <label for="inputSession">menu 2</label>
                  <select id="inputSession" class="form-control" name="menu2">
                            <option> </option>
                            
  <?php 
                    foreach ($menus as $key => $menu) {  
                    ?>
                        <option value="<?php echo $menu['ID'];?>"><?php echo $menu['nommenu'];?></option> 

                        <?php   } ?>
                        
                        </select> 
                  
          </div>
    
          <div class="form-group col-md-6">
                <label for="inputSession">menu 3</label>
                  <select id="inputSession" class="form-control" name="menu3">
                            <option> </option>
                            
  <?php 
                    foreach ($menus as $key => $menu) {  
                    ?>
                        <option value="<?php echo $menu['ID'];?>"><?php echo $menu['nommenu'];?></option> 

                        <?php   } ?>
                        
                        </select> 
                  
          </div>
  </div>


  <div class="form-row">
        <div class="form-group col-md-6">
                <label for="inputSession">menu 4</label>
                  <select id="inputSession" class="form-control" name="menu4">
                            <option> </option>
                            
  <?php 
                    foreach ($menus as $key => $menu) {  
                    ?>
                        <option value="<?php echo $menu['ID'];?>"><?php echo $menu['nommenu'];?></option> 

                        <?php   } ?>
                        
                        </select> 
                  
          </div>
    
          <div class="form-group col-md-6">
                <label for="inputSession">menu 5</label>
                  <select id="inputSession" class="form-control" name="menu5">
                            <option> </option>
                            
  <?php 
                    foreach ($menus as $key => $menu) {  
                    ?>
                        <option value="<?php echo $menu['ID'];?>"><?php echo $menu['nommenu'];?></option> 

                        <?php   } ?>
                        
                        </select> 
                  
          </div>

          <div class="form-group col-md-7">
          <label for="inputState">Dessert</label>
                  <select id="inputState" class="form-control" name="dessert">
                    <option selected></option>
                    <option>Fruit</option>
                    <option>Jus</option>
                  </select>
        </div>
  </div>
        

  <div class="form-row">
                <div class="form-group col-md-6">
                <button type="reset" class="btn btn-primary">Annuler</button>
                </div>
                <div class="form-group col-md-6">


                <button type="submit" class="btn btn-primary" name="valider">Sign in</button>

                </div>
  </div>
</form>                


<style text="text/css">
.bg-primary{
  background-color:#068689!important;
}
.btn-primary{
  background-color:#068689!important;
}


.img-fluid {
    max-width: 7%!important;
    height: auto;
}
.border-primary{
  border-color: black!important;
  border-width: 2px !important;

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