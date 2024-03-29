<!DOCTYPE html>
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

                  <h2 class="mb-0 site-logo"><a href="index.php">Centre Equestre Saint Vitrac</a></h2>

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
                      <li><a href="pensions.php">Pension</a></li>
                      <li class="has-children">
                        <a href="cours.php">Activités</a>
                        <ul class="dropdown arrow-top">
                          <li><a href="cours.php">Cours</a></li>
                          <li><a href="stage.php">Stage</a></li>
                          <li class="active"><a href="promenade.php">Promenade</a></li>
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
    <div class="slide-one-item home-slider owl-carousel">



      <div class="site-blocks-cover" style="background-image: url(images/chevalpro.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1>Nos Promenade</h1>
              <p class="font-weight-normal">Découvrez près de 75 sentiers de petite randonnée protégés avec panneaux de départ, balisage et signalisation. Bonnes balades !</p>
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
                <a href="https://www.youtube.com/watch?v=5x6ODx4iuFY" class="popup-vimeo image-play">
                  <span class="icon-wrap">
                    <span class="icon icon-play"></span>
                  </span>
                  <img src="images/vidy.png" alt="" class="img-fluid">
                </a>
              </div>

          </div>
          <div class="col-md-5 ml-auto">
            <h2 class="h2 mb-3">À Propos de nos balades</h2>
            <p class="h5 mb-3">Nous vous accompagnons presque partout !</p>
            <p class="mb-4">Avec plus de 75 balades différentes dans notre région nous vous accompagnerons sous proposition et accord du centre.</p>
            <p><a href="https://www.youtube.com/watch?v=5x6ODx4iuFY" class="popup-vimeo text-uppercase">Regarder une Vidéo <span class="icon-arrow-right small"></span></a></p>
          </div>
        </div>
      </div>
    </div>



    <div class="site-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-5 mb-5 mb-lg-0 order-1">
            <h2 class="mb-3 text-uppercase">Balade <strong class="text-black font-weight-bold">débutant</strong> 1h</h2>
            <p class="mb-4"> Le plaisir de la découverte de la promenade à cheval. Une très jolie balade de débutants, qui vous permettra de découvrir tranquillement le plaisir de la promenade à cheval.
                             Le centre équestre de Saint Vitrac vous propose de découvrir le plaisir de la promenade à cheval dans les terres. Vous visiterez le marais au pas du cheval, et découvrirez la faune et la flore. Vous profiterai en famille d'une balade dans la nature, au rythme du cheval. Cette promenade est accessible à tous, enfants et adultes, y compris débutants.</p>
              <a href="respro.php?id=1"><button class="btn btn-primary pill px-4" name="promenade">Réserver balade "Débutant"</button></a>
          </div>
          <div class="col-md-12 col-lg-6 mr-auto order-2">
            <img src="images/chevalpro1.jpg" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 mb-5 mb-md-0">
            <img src="images/chevalpro2.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-12 col-lg-5 mb-5 mb-lg-0 order-1">
            <h2 class="mb-3 text-uppercase">Balade <strong class="text-black font-weight-bold">VIP</strong> 2h</h2>
            <p class="mb-4"> Offrez-vous le plaisir d'une balade privée, avec un guide pour vous seuls. Vous pourrez ainsi découvrir la forêt de Jade à votre rythme, vous arrêter pour profiter du paysage, trotter et galoper en toute liberté.</p>
            <a href="respro.php?id=2"><button class="btn btn-primary pill px-4" name="promenade">Réserver balade "VIP"</button></a>
          </div>
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

  </body>
</html>
