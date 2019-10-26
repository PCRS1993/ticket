<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>liste-menu</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
                    
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
            <div class="btn-group">
                <button type="button" class="btn text-primary ">Menu</button>
                <button type="button" class="btn  dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="ajoutmenu.php">Nouveau Menu</a>
                    <a class="dropdown-item" href="Listemenu.php">Liste des MenuS</a>
                
                </div>
            </div> 

            </nav> 
        <img src="../Public/img/logo.jpg"  style="width: 10%;" alt="logo.jpg">

        <div class="menu">
                            <div class="row">
                                <div class="col-12 text-center">
                                <h2>Liste MENU</h2>
                                </div>
                                <?php
    include_once('../controleurs/db_connect.php');
           $query = $bdd->query("SELECT * FROM `menu` ");
            $menus= $query->fetchAll();
          // var_dump($users) ;

        ?>
                                            <table  class="table col-12 text-center">
                                                <thead>
                                                <tr>
                                                    <th>Nom des MENUS </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php 
                    foreach ($menus as $key => $menu) {
                
                ?>
                    <tr>

                       <td><?php echo $menu['nommenu'];?></td>
                       <td>
                       </tr>
                <?php
                    
                    }
                ?>
                                                    </tbody>
                                                    </table>
                            </div>
                        </div>
        <style text="text/css">
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

            .menu {
                border: solid black 1px;
                width: 50%;
                margin: auto;
            }
            </style>
            </body>
</html>