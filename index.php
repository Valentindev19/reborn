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

                  <h2 class="mb-0 site-logo" style="position : relative; left : 50%;"><a href="index.php">Centre Equestre Saint Vitrac</a></h2>

              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                      <li class="active">
                        <a href="index.php">Accueil</a>
                      </li>
                      <li><a href="actualite.php">Actualités</a></li>
                      <li><a href="chevaux.php">Chevaux</a></li>
                      <li><a href="pensions.php">Pension</a></li>
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
                      // On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
                      session_start ();

                      // On récupère nos variables de session
                      if (isset($_SESSION['mailm']) && isset($_SESSION['mdpm'])) {
                        if (isset($_SESSION['mailm']) && isset($_SESSION['mdpm']) && isset($_SESSION['id_typem'])) {
                        ?>
                        <li><a href="admin.php">Page Admin</a><a href="deco.php"><img src="images/deco.PNG" /></a></li>
                      </ul>
                      <?php
                      }
                      else {
                        ?>
                        <li><a href="membre.php">Mon Espace</a><a href="deco.php"><img src="images/deco.PNG" /></a></li>
                        <?php
                      }

                    }
                    else {
                      ?>
                      <li><a href="log.php">Connexion</a></li>
                      <?php
                    }
                    ?>


                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div style="height: 114px;"></div>
    <div class="slide-one-item home-slider owl-carousel">

      <div class="site-blocks-cover" style="background-image: url(images/cheval_top1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1>Rapide <strong>Comme l'éclair</strong></h1>
            </div>
          </div>
        </div>
      </div>

      <div class="site-blocks-cover" style="background-image: url(images/cheval11.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1>Le <strong>Cheval</strong> c'est trop génial</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 mb-5 mb-md-0">

              <div class="img-border">


                  <img src="images/cent.jpg" alt="" class="img-fluid">
                </a>
              </div>

          </div>
          <div class="col-md-5 ml-auto">
            <h2 class="h2 mb-3">A Propos Du Centre</h2>
            <p class="h5 mb-3">Centre Equestre Saint Vitrac</p>
            <p class="mb-4">Grands plateaux sauvages, points de vue époustouflants, forêts étendues, votre dépaysement est total. La Corrèze est un pays vert où le cheval a naturellement trouvé sa place et où des infrastructures de qualité vous réservent le meilleur accueil. Ici, tout est réuni pour vous faire vivre intensément des moments forts préparés par des professionnels passionnés.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section site-block-feature bg-light">
      <div class="container">
        <div class="d-block d-md-flex border-bottom">
          <div class="text-center p-4 item border-right">
            <span class="flaticon-paper-plane display-3 mb-3 d-block text-primary"></span>
            <h2 class="h5 text-uppercase">Nos Missions</h2>
            <p>Nos missions sont de vous accompagnez lors de cours, stages ou promenades et de vous faire profiter de notre passions pour le cheval dans un bon esprit de convivialité.</p>
          </div>
          <div class="text-center p-4 item">
            <!--<span class="flaticon-chat-1 display-3 mb-3 d-block text-primary"></span>-->
            <h2 class="h5 text-uppercase"></h2>
          </div>
        </div>
        <div class="d-block d-md-flex">
          <div class="text-center p-4 item border-right">
            <!--<span class="flaticon-speaker display-3 mb-3 d-block text-primary"></span>-->
            <h2 class="h5 text-uppercase"></h2>
          </div>
          <div class="text-center p-4 item">
            <span class="flaticon-avatar display-3 mb-3 d-block text-primary"></span>
            <h2 class="h5 text-uppercase">Rejoignez Nous</h2>
            <p>Inscrivez vous sur notre site pour pouvoir participer à nos cours, stages et promenades.</p>
            <p><a href="log.php">Connectez vous <span class="icon-arrow-right small"></span></a></p>
          </div>
        </div>
      </div>
    </div>




    <div class="site-section block-15">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2>Galerie Photo</h2>
          </div>
        </div>


        <div class="nonloop-block-15 owl-carousel">


            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                  <img src="images/upload/Cheval_francais1.jpg" alt="" class="img-fluid">
              </div>
            </div>

            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                  <img src="images/upload/Lipizzan1.jpg" alt="" class="img-fluid">
              </div>
            </div>

            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                  <img src="images/upload/Mérens.jpg" alt="" class="img-fluid">
              </div>
            </div>

            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                  <img src="images/upload/Poney_francais2.jpg" alt="" class="img-fluid">
              </div>
            </div>

            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                  <img src="images/upload/Shetland3.jpg" alt="" class="img-fluid">
              </div>
            </div>

            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                  <img src="images/upload/Trotteur.jpg" alt="" class="img-fluid">
              </div>
            </div>



        </div>

        <div class="row">

        </div>
      </div>
    </div>
    <!--Image btn vers le haut-->
    <img id='btn_up' src="images/to_top.png"/>


    <div class="py-5 quick-contact-info">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div>
              <h2><span class="icon-room"></span> Localisation</h2>
              <p class="mb-0">Saint Vitrac - 24200 <br>  10 Allée du Petit Buy </p>
            </div>
          </div>
          <div class="col-md-4">
            <div>
              <h2><span class="icon-clock-o"></span> Heures d'ouvertures </h2>
              <p class="mb-0">Mercredi de 9:30 - 17:30 <br>
              Lundi au Vendredi 9:00 - 17:30 <br>
              Dimanche de  8:00 - 16:30 </p>
            </div>
          </div>
          <div class="col-md-4">
            <h2><span class="icon-comments"></span> Contact</h2>
            <p class="mb-0">Email: centresaintvitrac@gmail.com <br>
            Téléphone: 05-55-55-78-19</p>
            <br>
            <h1><a href="https://facebook.com/"><span class="icon-facebook"></span></a> <a href="https://twitter.com"><span class="icon-twitter"></span></a> <a href="https://twitter.com"><span class="icon-instagram"></span></a></h1>
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


  <script>
      document.addEventListener('DOMContentLoaded', function() {
                var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

                for (var i = 0; i < total; i++) {
                    new MediaElementPlayer(mediaElements[i], {
                        pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                        shimScriptAccess: 'always',
                        success: function () {
                            var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
                            for (var j = 0; j < targetTotal; j++) {
                                target[j].style.visibility = 'visible';
                            }
                  }
                });
                }
            });
    </script>

    <script src="cookie/cookiechoices.js"></script>

  </body>
</html>
