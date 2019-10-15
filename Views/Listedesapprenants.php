<!doctype html>
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
               <a class="dropdown-item" href="#">Nouveau</a>
               <a class="dropdown-item" href="#">Liste Des Utilisateurs</a>
               
         </div>
             </ul>

             <ul class="navbar-nav">
           
             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Sessions
             </a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
               <a class="dropdown-item" href="#">Promo 3</a>
               <a class="dropdown-item" href="#">Promo 4</a>
               <a class="dropdown-item" href="#">Promo 5</a>
               <a class="dropdown-item" href="#">Promo 6</a>
               <a class="dropdown-item" href="#">Promo 7</a>
               <a class="dropdown-item" href="#">Promo 8</a>

         </div>
             </ul>
             <ul class="navbar-nav">
           
             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Référentiel
             </a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
               <a class="dropdown-item" href="#">Nouveau</a>
               <a class="dropdown-item" href="#">Liste Des Référentiels</a>
               
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
        <option value="1">Référent Digital</option>
        <option value="2">Développement Web</option>
        <option value="3">Data Artisant</option>
      </select>
    </div>
    <div class="col-auto my-5">
      <label class="mr-sm-6 sr-only" for="inlineFormCustomSelect">Session</label>
      <select class="custom-select mr-sm-4" id="inlineFormCustomSelect">Session
        <option selected ></option>
        <option value="1">Promo 1</option>
        <option value="2">Promo 2</option>
        <option value="3">Promo 3</option>
      </select>
      </div>
    </div>
    <div class="col-auto my-1">
      <button type="submit" class="btn btn-success">Rechercher</button>
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
                      <tr>
                        <td>Sarr</td>
                        <td>Papa Cheikh René</td>
                        <td>cheikhrene93@gmail.com</td>
                        <td>Sicap Baobab</td>
                        <td>777056793</td>
                        <td>774565851</td>
                        <td>Présent</td>
                        <td>Promo 2</td>
                        <td>Réf Dig</td>
                        <td>PCRS</td>
                        <td>
        <a href="./formedit.php?edit=<?php echo $user['ID']; ?>">Edit</a>
      </td>
      <td>
                      </tr>      
                      <tr class="table-primary">
                        <td>Bah</td>
                        <td>Ramatoulaye</td>
                        <td>ramaba389@gmail.com</td>
                        <td>Parcelles</td>
                        <td>777056793</td>
                        <td>774565851</td>
                        <td>Présent</td>
                        <td>Promo 2</td>
                        <td>Réf Dig</td>
                        <td>PCRM</td>
                        <td>
        <a href="./formedit.php?edit=<?php echo $user['ID']; ?>">Edit</a>
      </td>
      <td>
                      </tr>
                      <tr class="table-success">
                        <td>Sylla</td>
                        <td>Fanny</td>
                        <td>john@example.com</td>
                        <td>HLM</td>
                        <td>777056793</td>
                        <td>774565851</td>
                        <td>Présent</td>
                        <td>Promo 2</td>
                        <td>Réf Dig</td>
                        <td>PCRS</td>
                        <td>
        <a href="./formedit.php?edit=<?php echo $user['ID']; ?>">Edit</a>
      </td>
      <td>
                      </tr>
                      <tr class="table-danger">
                        <td>Dramé</td>
                        <td>Oumar</td>
                        <td>mary@example.com</td>
                        <td>Sicap Baobab</td>
                        <td>777056793</td>
                        <td>774565851</td>
                        <td>Présent</td>
                        <td>Promo 2</td>
                        <td>Réf Dig</td>
                        <td>Mackenzy</td>
                        <td>
        <a href="./formedit.php?edit=<?php echo $user['ID']; ?>">Edit</a>
      </td>
      <td>
                      </tr>
                      <tr class="table-info">
                        <td>Doumbouya</td>
                        <td>Fatou</td>
                        <td>july@example.com</td>
                        <td>Sicap Baobab</td>
                        <td>777056793</td>
                        <td>774565851</td>
                        <td>Présent</td>
                        <td>Promo 2</td>
                        <td>Réf Dig</td>
                        <td>PCRS</td>
                        <td>
        <a href="./formedit.php?edit=<?php echo $user['ID']; ?>">Edit</a>
      </td>
      <td>
                      </tr>
                      <tr class="table-warning">
                        <td>Warning</td>
                        <td>Refs</td>
                        <td>bo@example.com</td>
                        <td>Sicap Baobab</td>
                        <td>777056793</td>
                        <td>774565851</td>
                        <td>Présent</td>
                        <td>Promo 2</td>
                        <td>Réf Dig</td>
                        <td>PCRS</td>
                        <td>
        <a href="./formedit.php?edit=<?php echo $user['ID']; ?>">Edit</a>
      </td>
      <td>
                      </tr>
                      <tr class="table-active">
                        <td>Active</td>
                        <td>Activeson</td>
                        <td>act@example.com</td>
                        <td>Sicap Baobab</td>
                        <td>777056793</td>
                        <td>774565851</td>
                        <td>Présent</td>
                        <td>Promo 2</td>
                        <td>Réf Dig</td>
                        <td>PCRS</td>
                        <td>
        <a href="./formedit.php?edit=<?php echo $user['ID']; ?>">Edit</a>
      </td>
      <td>
                      </tr>
                      <tr class="table-secondary">
                        <td>Secondary</td>
                        <td>Secondson</td>
                        <td>sec@example.com</td>
                        <td>Sicap Baobab</td>
                        <td>777056793</td>
                        <td>774565851</td>
                        <td>Présent</td>
                        <td>Promo 2</td>
                        <td>Réf Dig</td>
                        <td>PCRS</td>
                        <td>
        <a href="./formedit.php?edit=<?php echo $user['ID']; ?>">Edit</a>
      </td>
      <td>
                      </tr>
                      <tr class="table-light">
                        <td>Light</td>
                        <td>Angie</td>
                        <td>angie@example.com</td>
                        <td>Sicap Baobab</td>
                        <td>777056793</td>
                        <td>774565851</td>
                        <td>Présent</td>
                        <td>Promo 2</td>
                        <td>Réf Dig</td>
                        <td>PCRS</td>
                        <td>
        <a href="./formedit.php?edit=<?php echo $user['ID']; ?>">Edit</a>
      </td>
      <td>
                      </tr>
                      <tr class="table-dark text-dark">
                        <td>Dark</td>
                        <td>Bo</td>
                        <td>bo@example.com</td>
                        <td>Sicap Baobab</td>
                        <td>777056793</td>
                        <td>774565851</td>
                        <td>Présent</td>
                        <td>Promo 2</td>
                        <td>Réf Dig</td>
                        <td>PCRS</td>
                        <td>
        <a href="./formedit.php?edit=<?php echo $user['ID']; ?>">Edit</a>
      </td>
      <td>
                      </tr>
                      <td>
        
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

</style>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>