<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();
include 'class/cours.class.php';
include 'class/bdd.inc.php';

// On récupère nos variables de session
if (isset($_SESSION['mailm']) && isset($_SESSION['mdpm']) && isset($_SESSION['id_typem'])) {
?>
<html lang="en">
	  <head>
	    <title>Centre Equestre Saint Vitrac</title>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Work+Sans:300,400,700" rel="stylesheet">
	    <link rel="stylesheet" href="fonts/icomoon/style.css">

	    <link rel="stylesheet" href="css/bootstrap.min.css">
	    <link rel="stylesheet" href="css/magnific-popup.css">
	    <link rel="stylesheet" href="css/jquery-ui.css">
	    <link rel="stylesheet" href="css/owl.carousel.min.css">
	    <link rel="stylesheet" href="css/owl.theme.default.min.css">
	    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
	    <link rel="stylesheet" href="css/animate.css">
	    <link href='css/to-top.css' rel='stylesheet' type='text/css'>
			<link rel="stylesheet" type="text/css" href="css/creative.css">

			<script language="JavaScript" src="https://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript"></script>
			<script language="JavaScript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
			<script language="JavaScript" src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>
			<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

			<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">

	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
	    <!--JS Bouton vers le haut -->
	    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
	    <script src="js/to-top.js"></script>


	    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	    <link rel="stylesheet" href="css/aos.css">

	    <link rel="stylesheet" href="css/style.css">

	  </head>
		<body>

	  <div class="site-wrap">

	    <div class="site-mobile-menu">
	      <div class="site-mobile-menu-header">
	        <div class="site-mobile-menu-close mt-3">
	          <span class="icon-close2 js-menu-toggle"></span>
	        </div>
	      </div>
	      <div class="site-mobile-menu-body"></div>
	    </div> <!-- .site-mobile-menu -->

	    <div class="site-navbar-wrap js-site-navbar bg-white">

	      <div class="container">
	        <div class="site-navbar bg-light">

	          <div class="py-1">

	            <div class="row align-items-center">

	              <div class="col-2">

	                <h2 class="mb-0 site-logo" style="position : relative; left : 50%;"><a href="index.html">Centre Equestre Saint Vitrac</a></h2>

	              </div>
	              <div class="col-10">
	                <nav class="site-navigation text-right" role="navigation">
	                  <div class="container">
	                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

	                    <ul class="site-menu js-clone-nav d-none d-lg-block">
	                      <li>
													<a href="index.php">Accueil</a>
												</li>
												<li>
												<a href="actualite.php">Actualités</a></li>
												<li><a href="chevaux.php">Chevaux</a></li>
												<li><a href="pensions.php">Pensions</a></li>
												<li class="has-children">
													<a href="cours.php">Activités</a>
													<ul class="dropdown arrow-top">
														<li><a href="cours.php">Cours</a></li>
														<li><a href="stage.php">Stage</a></li>
														<li><a href="promenade.php">Promenade</a></li>
														</li>

													</ul>

												</li>
												<li><a href="contact.php">Contact</a></li>
												</html>
												<?php


												// On récupère nos variables de session
												if (isset($_SESSION['mailm']) && isset($_SESSION['mdpm']) && isset($_SESSION['id_typem'])) {
												?>
												 <li class="active"><a href="admin.php">Page Admin</a></li>
											</ul>
											<?php
											}
											else {
											?>
												<li><a href="log.php">Connexion</a></li>
												<?php
											}
											?>

	                    </ul>

	                  </div>
	                </nav>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>

</html>
	</div>
	</div>
</div>

	<a href='gestionactivité.php'><button class="boutonret">Retour</button></a>


  <div class="site-section bg-light">
    <div class="container">
      <div class="row">

        <div class="col-md-12 col-lg-8 mb-5">



          <form method="post" action="traitcours.php" id="contact_form" class="p-5 bg-white">

            <div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="race">Date</label>
                <input type="text" name="date" id="date" class="form-control" placeholder="Donner la date du cours">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold" for="nom">Heure du début de cours</label>
                <input type=text name="hdcours" id="hdcours" class="form-control" placeholder="Donner l'heure du début du cours">
              </div>
            </div>


            <div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="age">Description du cours</label>
                <input type="text" name="desccours" id="desccours" class="form-control" placeholder="Donner la description du cours">
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold" for="taille">Heure de la fin du cours</label>
                <input type=text name="hfcours" id="heurefcours" class="form-control" placeholder="Donner l'heure de la fin du cours">
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <td><input type ="submit" name="btn_ajcours_form" value="Envoyer" class="btn btn-primary pill px-4 py-2">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

		<script>
			$(document).ready(function() {
    	$('#datatable').dataTable();
 			$("[data-toggle=tooltip]").tooltip();
	 		} );
    </script>

</html>
<?php
}
else{
header ('location: log.php');
}
?>
