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
       <div class="row">
           <img src="../Public/img/logo.jpg" class="img-fluid mw-7" alt="">
       </div>
         <!-- Formulaire -->
       <div class="row">
       <div class="col-3 justify-content-center"></div>
       <div class="col-8">
              <div class="card border border-primary">
                      <div class="card-header bg-primary">
                      <div class= "text-center text-primary font-weight-bold">
                        Ajout Apprenant
                        </div>
                      </div>
                      <div class="card-body">
                      <form action="/action_page.php" class="">
  <div class="form-group">
    <label for="uname">Nom:</label>
    <input type="text" class="form-control" id="uname" placeholder="Entrer nom" name="nom" >
     <br>


  <div class="form-group">
    <label for="uname">Prénom:</label>
    <input type="text" class="form-control" id="uname" placeholder="Entrer prénom" name="prenom" required>
    <div class="valid-feedback">Valid.</div> <br>

<div class="form-group">
    <label for="uname">Email:</label>
    <input type="text" class="form-control" id="uname" placeholder="Entrer email" name="email" required>
    <div class="valid-feedback">Valid.</div>

    <div class="form-group">
    <label for="uname">Adresse:</label>
    <input type="text" class="form-control" id="uname" placeholder="Entrer adresse" name="adresse" required>
    <div class="valid-feedback">Valid.</div>

    <div class="form-group">
    <label for="uname">Téléphone:</label>
    <input type="text" class="form-control" id="uname" placeholder="Entrer téléphone" name="telephone" required>
    <div class="valid-feedback">Valid.</div>  

 <div class="form-group">
    <label for="uname">Téléphone tuteur:</label>
    <input type="text" class="form-control" id="uname" placeholder="Entrer Tél tuteur" name="telephonetuteur" required>
    <div class="valid-feedback">Valid.</div>

<div class="form-group">
<label for="uname">Statut:</label>
 <select name="statut" class="custom-select">
    <option selected></option>
    <option value="">Présent</option>
    <option value="">Abandonné</option>
</select> </div>

<div class="form-group">
<label for="uname">Session:</label>
 <select name="session" class="custom-select">
    <option selected></option>
    <option value="">2020</option>
    <option value="">2021</option>
    <option value="">2022</option>
    <option value="">2023</option>
</select> </div>

  <div class="form-group">
<label for="uname">Référentiel:</label>
 <select name="referentiel" class="custom-select">
    <option selected></option>
    <option value="">Référent digital</option>
    <option value="">Data artisan</option>
    <option value="">Dev Web</option>
</select> </div> 


<div class="form-group">
    <label for="uname">Login:</label>
    <input type="text" class="form-control" id="uname" placeholder="Enter username" name="login" required>
    <div class="valid-feedback">Valid.</div>
  </div>
  
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
    <div class="valid-feedback">Valid.</div>

  </div>
 <div class="row"> 
  <button type="submit">Annuler</button>

  </div> 
  <div class="btn2"> 
  <button type="submit">Valider</button>
  </div> 
  </div> 

</form>
  
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