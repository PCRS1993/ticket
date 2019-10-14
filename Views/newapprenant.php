<!DOCTYPE html>
<html lang="fr">
<head>
  <title>nouveau apprenant</title>
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

<div class="container" style= "border: solid black 1px;height: 1050px;">

<div class="row">
<div class="col-12 text-center">
<h2>Ajout Apprenant</h2>
</div>
<div class="col-12 col-md-4 offset-md-4">
    <hr class="text-success">
</div>
    <div class="col-12 col-md-6 offset-md-3">
    <form action="/action_page.php" class="was-validated">
  <div class="form-group">
    <label for="uname">Nom:</label>
    <input type="text" class="form-control" id="uname" placeholder="Entrer nom" name="uname" required>
    <div class="valid-feedback">Valid.</div>


  <div class="form-group">
    <label for="uname">Prénom:</label>
    <input type="text" class="form-control" id="uname" placeholder="Entrer prénom" name="uname" required>
    <div class="valid-feedback">Valid.</div>

<div class="form-group">
    <label for="uname">Email:</label>
    <input type="text" class="form-control" id="uname" placeholder="Entrer email" name="uname" required>
    <div class="valid-feedback">Valid.</div>

    <div class="form-group">
    <label for="uname">Adresse:</label>
    <input type="text" class="form-control" id="uname" placeholder="Enntrer adresse" name="uname" required>
    <div class="valid-feedback">Valid.</div>

    <div class="form-group">
    <label for="uname">Téléphone:</label>
    <input type="text" class="form-control" id="uname" placeholder="Entrer téléphone" name="uname" required>
    <div class="valid-feedback">Valid.</div>  

 <div class="form-group">
    <label for="uname">Téléphone tuteur:</label>
    <input type="text" class="form-control" id="uname" placeholder="Entrer Tél tuteur" name="uname" required>
    <div class="valid-feedback">Valid.</div>
<div class="form-group">
<label for="uname">Statut:</label>
 <select name="cars" class="custom-select">
    <option selected></option>
    <option value="volvo">Présent</option>
    <option value="fiat">Abandonné</option>

  </select> </div>

  <div class="form-group">
<label for="uname">Session:</label>
 <select name="cars" class="custom-select">
    <option selected></option>
    <option value="volvo">2020</option>
    <option value="fiat">2021</option>
    <option value="volvo">2022</option>
    <option value="fiat">2023</option>

  </select> </div>

  <div class="form-group">
<label for="uname">Référentiel:</label>
 <select name="cars" class="custom-select">
    <option selected></option>
    <option value="volvo">Référent digital</option>
    <option value="fiat">Data artisan</option>
    <option value="volvo">Dev Web</option>


  </select> </div> 


  <div class="form-group">
    <label for="uname">Login:</label>
    <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
    <div class="valid-feedback">Valid.</div>
  </div>
  
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
    <div class="valid-feedback">Valid.</div>

  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Check this checkbox to continue.</div>
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

    </div>
</div>



  </div>
</div>








</body>
</html>