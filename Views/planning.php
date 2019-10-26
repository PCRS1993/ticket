<?php
            include_once('../controleurs/db_connect.php');
            $query = $bdd->query("SELECT * FROM `menu` ");
            $menus= $query->fetchAll();
             //var_dump($plats); die       
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>planning</title>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

</head>
<body>
        <!-- Barre de Navigation -->
        
        <nav class="navbar navbar-expand-sm navbar-success bg-primary">

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
            <div >
            <img src="../Public/img/logo.jpg" class="img-fluid mw-7" alt="">
        </div>
        <div class="container">
            <!-- Formulaire -->
            <div class="row">
                <div class="col-3 justify-content-center"></div>
                <div class="col-6">
                    <div class="card border border-primary">
                        <div class="card-header bg-primary">
                            <div class= "text-center text-primary font-weight-bold">plannifier MENU</div>
                        </div>
                        <div class="card-body">
                            <form action="../controleurs/controlplanning.php" method="POST">
                                <div class="form-row">
                                <div class="form-group col-md-4">
                <label for="inputState">JOUR</label>
                <select id="inputState" class="form-control" name="jour">
                    <option selected></option>
                    <option>Lundi</option>
                    <option>Mardi</option>
                    <option>Mercredi</option>
                    <option>Jeudi</option>
                    <option>Vendredi</option>
                    
                </select>
                </div>
                                </div>
                                <div class="container">
	
                
            <div class="row">
        <?php 
                    foreach ($menus as $key => $menu) {               
                ?>                     
                    <div class="form-check form-check-inline">
                        <label class="form-check-label" for="inlineCheckbox1"><?php echo $menu ['nommenu'];?></label>&nbsp;
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="<?php echo $menu ['ID'];?><?php echo $menu ['nommenu'];?>" name="menu">
                            </div>        
                <?php                    
                    }
                ?> 
                </div>
                <div class="form-row">
                                <div class="form-group col-md-4">
                <label for="inputState">DESSERT</label>
                <select id="inputState" class="form-control" name="dessert">
                    <option selected></option>
                    <option>fruits</option>
                    <option>JUS</option>
                    </select>
                </div>
                                </div>
                <div class="form-row my-3">
                
                                    <div class="form-group col-md-6">
                                        <button type="reset" class="btn btn-primary">Annuler</button>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <button type="submit" class="btn btn-primary" name="valider">Creer</button>
                                    </div>
                        
                        </div>
                                </form>
                                </div>
                                </div>
                                </div>
                    </div>
                </div>
            

            
<style text="text/css">
            section{
                margin : 15px;
            }
            .container-fluid {
                padding-right: 0;
                padding-left: 0;
            }
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

</body>
</html>