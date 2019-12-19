<?php
  session_start();
  if (isset($_SESSION['mailm']) && isset($_SESSION['mdpm']))
  {
    ini_set('display_errors', 0); // fait disparaitre les erreurs php
    $error = $_COOKIE['mvmdp'];
    setcookie('mvmdp',NULL,-1);
    $mailm = $_SESSION['mailm'];
    $mdpm = $_SESSION['mdpm'];
    include 'class/bdd.inc.php';
    include 'class/membre.class.php';
    $membre = new membre("","","","","","","","","","","","","","");
    $req = $membre->affinfom($mailm, $mdpm, $conn);
    $ligne = $req -> fetch();
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
    <title>Modification</title>

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
  <form id="conex_form" method="post" action="traitmembre.php">
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Modification :</h2>
                    <form method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nom de famille</label>
                                    <input class="input--style-4" type="text" name="nom" value="<?php echo $ligne['nomm']; ?>">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Prénom</label>
                                    <input class="input--style-4" type="text" name="prenom" value="<?php echo $ligne['prenomm']; ?>">
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
                                            <input type="radio" <?php if ($ligne['genrem'] == 'Homme' ) {?>
                                              checked="checked" <?php } ?> name="sexe" value="Homme" >
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Féminin
                                            <input type="radio" <?php if ($ligne['genrem'] == 'Femme' ) {?>
                                              checked="checked" <?php } ?> name="sexe" value="Femme">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Autres
                                            <input type="radio" <?php if ($ligne['genrem'] == 'Autre' ) {?>
                                              checked="checked" <?php } ?> name="sexe" value="Autre">
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
                                    <input class="input--style-4" type="email" name="email" value="<?php echo $ligne['mailm']; ?>">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Numéro de téléphone</label>
                                    <input class="input--style-4" type="text" name="phone" value="<?php echo $ligne['telephonem']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Code Postal</label>
                                    <input  class="input--style-4" type="text" id="nom_id" onkeyup="autocomplet()" name="CP" value="<?php echo $ligne['ville_code_postal']; ?>">
                                    <ul id="nom_list_id"></ul>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Ville</label>
                                    <input  class="input--style-4" type="text" id="nom2_id" name="ville" value="<?php echo $ligne['ville_nom_reel']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Adresse</label>
                                    <input class="input--style-4" type="text" name="adr" value="<?php echo $ligne['ruem']; ?>">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Compléménent d'adresse</label>
                                    <input class="input--style-4" type="text" name="comp" value="<?php echo $ligne['compm']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Mot de passe</label>
                                    <input class="input--style-4" type="password" name="mdp" value="<?php echo $ligne['mdpm']; ?>">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Mot de passe de vérification</label>
                                    <input class="input--style-4" type="password" name="mdp2" value="<?php echo $ligne['mdpm']; ?>">
                                </div>
                            </div>
                      </div>


                    <div id="dialog" title="Erreur Inscription" >
                    <h4><p style="color : red;"><?php if ($error != '') {
                      echo $error;
                    } ?></p></h4>
                    </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="form_mod_m">Envoyer</button>
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
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    $( function() {
  $( "#datepicker" ).datepicker({
    yearRange: "c-40:c",
    firstDay: 1,
    dateFormat: "yy/mm/dd",
    monthNamesShort: [ "Jan", "Fev", "Mars", "Avril", "Mai", "Juin", "Juil", "Août", "Sep", "Oct", "Nov", "Dec" ],
    dayNamesMin: [ "Dim", "Lun", "Mar", "Mer", "Jeu", "Ven", "Sam" ],
    changeMonth: true,
    changeYear: true
  });
} );
    </script>

    <!-- Main JS-->
    <script src="js/global.js"></script>


</body>

</html>
<?php
}
else {
  header('Location:log.php');
}
?>
<!-- end document-->
