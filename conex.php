<?php
  ini_set('display_errors', 0); // fait disparaitre les erreurs php
  $error = $_COOKIE['mvmdp'];
  setcookie('mvmdp',NULL,-1);
  ?>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" href="css/style.css" />


    <!-- Title Page-->
    <title>Inscription</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link rel="stylesheet" href="css/jquery-ui-1.12.1.css">
    <link rel="stylesheet" href="/resources/demos/style.css">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
  <form id="conex_form" method="post" action="validation.php">
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Inscription :</h2>
                    <form method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nom de famille</label>
                                    <input class="input--style-4" type="text" name="nom">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Prénom</label>
                                    <input class="input--style-4" type="text" name="prenom">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Date de naissance</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="DN" id="datepicker">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Sexe</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Masculin
                                            <input type="radio" checked="checked" name="sexe" value="Homme" >
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Féminin
                                            <input type="radio" name="sexe" value="Femme">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Autres
                                            <input type="radio" name="sexe" value="Autre">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Numéro de téléphone</label>
                                    <input class="input--style-4" type="text" name="phone">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Code Postal</label>
                                    <input  class="input--style-4" type="text" id="nom_id" onkeyup="autocomplet()" name="CP">
                                    <ul id="nom_list_id"></ul>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Ville</label>
                                    <input  class="input--style-4" type="text" id="nom2_id" name="ville">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Adresse</label>
                                    <input class="input--style-4" type="text" name="adr">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Compléménent d'adresse</label>
                                    <input class="input--style-4" type="text" name="comp">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Mot de passe</label>
                                    <input class="input--style-4" type="password" name="mdp">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Mot de passe de vérification</label>
                                    <input class="input--style-4" type="password" name="mdp2">
                                </div>
                            </div>
                      </div>


                    <div id="dialog" title="Erreur Inscription" >
                    <h4><p style="color : red;"><?php if ($error != '') {
                      echo $error;
                    } ?></p></h4>
                    </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="form_conex">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </form>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/datepicker/jquery-1.12.4.js"></script>
    <script src="vendor/datepicker/jquery-ui-1.12.1.js"></script>
    <script>
    $( function() {
      $( "#datepicker" ).datepicker();
    } );
    </script>

    <!-- Main JS-->
    <script src="js/global.js"></script>


</body>

</html>
<!-- end document-->
