<?php 
require_once('../controleurs/db_connect.php');

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $record = $bdd->query("SELECT * FROM apprenant WHERE ID=$id")-> fetch();

    if (isset($record['ID'])) {
      $nom = $record['nom'];
      $prenom = $record['prenom'];
      $email = $record['email'];
      $adresse = $record['adresse'];
      $tel = $record['tel'];
      $teltuteur = $record['teltuteur'];
      $statut = $record['statut'];
      $session = $record['session'];
      $referentiel = $record['referentiel'];
      $login = $record['login'];
      $password = $record['password'];

      }

    }
?>


<!doctype html>
<html lang="en">
  <head>
    <title>New Apprenant</title>
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
      < class="row">
          <img src="../Public/img/logo.jpg" class="img-fluid mw-7" alt="">
       </ div>
         <!-- Formulaire -->
       <div class="row">
       <div class="col-3 justify-content-center"></div>
       <div class="col-6">
              <div class="card border border-primary">
                      <div class="card-header bg-primary">
                      <div class= "text-center text-primary font-weight-bold">
                        Ajout Apprenant
                        </div>
                      </div>
                      <div class="card-body">

  <form action="../controleurs/editapprenant.php" method="post">
  <div class="form-row">
    
          <input type="hidden" class="form-control" id="uname" placeholder="Entrer nom" name="ID" value="<?php echo $id; ?>">
        <div class="form-group col-md-6">
          <label for="uname">Nom:</label>
          <input type="text" class="form-control" id="uname" placeholder="Entrer nom" name="nom" value="<?php echo $nom; ?>">
        </div>
          <div class="form-group col-md-6">
                <label for="uname">Prénom:</label>
                <input type="text" class="form-control" id="uname" placeholder="Entrer prénom" name="prenom" value="<?php echo $prenom; ?>">
          </div>
  </div>
  <div class="form-row"> 
            <div class="form-group col-md-6">
                  <label for="inputEmail4">Email</label>
                  <input type="email" class="form-control" id="inputEmail4" placeholder="Entrer email" name="email" value="<?php echo $email; ?>">
                </div>

              <div class="form-group col-md-6">
                  <label for="inputAddress">Adresse</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="Veuillez saisir votre adresse" name="adresse" value="<?php echo $adresse; ?>">
                </div>
  </div>

  <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputtelephone">Téléphone</label>
                <input type="text" class="form-control" id="inputtelephone" placeholder="+221" name="tel" value="<?php echo $tel; ?>">
              </div>
              <div class="form-group col-md-6">
                <label for="inputtelephonetuteur">Téléphone tuteur</label>
                <input type="text" class="form-control" id="inputtelephone" placeholder="+221" name="teltuteur" value="<?php echo $teltuteur; ?>">
              </div>
  </div>
  <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputtelephone">Session</label>
                <input type="text" class="form-control" id="inputtelephone" placeholder="session" name="session" value="<?php echo $session; ?>">
              </div>
              <div class="form-group col-md-6">
                <label for="inputtelephonetuteur">Référentiel</label>
                <input type="text" class="form-control" id="inputtelephone" placeholder="référentiel" name="referentiel" value="<?php echo $referentiel; ?>">
              </div>
  </div>

  

  <div class="form-row">             
                <div class="form-group col-md-4">
                <label for="inputtelephone">Statut</label>
                <input type="text" class="form-control" id="inputtelephone" placeholder="Entrer login" name="statut" value="<?php echo $statut; ?>">
                </div>
                
                <div class="form-group col-md-4">
                <label for="inputtelephone">Login</label>
                <input type="text" class="form-control" id="inputtelephone" placeholder="Entrer login" name="login" value="<?php echo $login; ?>">
              </div>
              <div class="form-group col-md-4">
              <label for="inputPassword4">Password</label>
              <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password" value="<?php echo $password; ?>">
            </div>
  </div>        

    
  <div class="form-row">
                <div class="form-group col-md-6">
                <button type="reset" class="btn btn-primary">Annuler</button>
                </div>
                <div class="form-group col-md-6">
                <button type="submit" name="update" class="btn btn-primary">Modifier</button>
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