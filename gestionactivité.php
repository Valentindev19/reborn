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

			<div style="height: 113px;"></div>
	    <div class="slide-one-item home-slider owl-carousel"></div>

			<div class="site-section site-block-feature bg-light">
	      <div class="container">
			<div class="d-block d-md-flex">
				<div class="text-center p-4 item border-right">
					<span class="flaticon-chat display-3 mb-3 d-block text-primary"></span>
					<a href="gestioncours.php"><h2 class="h5 text-uppercase">Cours</h2>
					<p>Voir les cours <span class="icon-arrow-right small"></span></a></p>
				</div>

				<div class="text-center p-4 item border-right">
						<span class="display-3 mb-3 d-block text-primary"><img src="images/articles.PNG"></span>
						<a href="gestionpro.php"><h2 class="h5 text-uppercase">Promenades</h2>
						<p>Voir les promenades <span class="icon-arrow-right small"></span></a></p>
					</div>
				<div class="text-center p-4 item">
					<span class="flaticon-chat-1 display-3 mb-3 d-block text-primary"></span>
					<a href="gestionsta.php"><h2 class="h5 text-uppercase">Stages</h2>
					<p>Voir les stages <span class="icon-arrow-right small"></span></a></p>
				</div>
			</div>
		</div>
	</div>

	  <script src="js/jquery-3.3.1.min.js"></script>
	  <script src="js/jquery-migrate-3.0.1.min.js"></script>
	  <script src="js/jquery-ui.js"></script>
	  <script src="js/popper.min.js"></script>
	  <script src="js/bootstrap.min.js"></script>
	  <script src="js/owl.carousel.min.js"></script>
	  <script src="js/jquery.stellar.min.js"></script>
	  <script src="js/jquery.countdown.min.js"></script>
	  <script src="js/jquery.magnific-popup.min.js"></script>
	  <script src="js/bootstrap-datepicker.min.js"></script>
	  <script src="js/aos.js"></script>

	  <script src="js/mediaelement-and-player.min.js"></script>

	  <script src="js/main.js"></script>

	  </body>
</html>

	<?php
	}
	else{
	header ('location: log.php');
	}
?>
