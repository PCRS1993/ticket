<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Liste apprenants</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#">Utilisateurs</a>
    </li>
    <li class="nav-item dropdown active">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Sessions</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Liste session</a>
      <a class="dropdown-item" href="#">Nouvelle session</a>
      
    </div>
  </li>
  <li class="nav-item dropdown active">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Référentiel</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">Liste referentiel</a>
      <a class="dropdown-item" href="#">Nouveau</a>
      
    </div>

    

  </li>
  </ul>


</nav>
</div>
<img src="../Public/img/logo.jpg"  style="width: 10%;" alt="logo.jpg"> 

<div class="col-12 col-md-2 offset-md-2">
  <div class="form-group row">
    <label for="uname" >Référentiel:</label>
 <select name="Ref" class="custom-select">
    <option selected></option>
    <option value="">Ref Dig</option>
    <option value="">Dev Web</option>
    <option value="">Data Artisan</option>
    
    </select> 
    </div>

    <div class="form-group ">
     <label for="uname">Session:</label>
 <select name="cars" class="custom-select">
    <option selected></option>
    <option value="Promo1">Promo 1</option>
    <option value="Promo2">Promo 2</option>
    <option value="Promo3">Promo 3</option>

    </select> 
    </div>

    <div class="form-group row">
    <button type="button" class="btn btn-success">Rechercher</button>
    </div>

</div>
   
<div class="container-fluid" style= "border: solid black 2px;">

<div class="row">
      <div class="col-12 text-center">
      <h2>Liste Apprenants</h2>
      </div>
            
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

  </div>








</body>
</html>