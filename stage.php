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

                  <h2 class="mb-0 site-logo"><a href="index.html">Centre Equestre Saint Vitrac</a></h2>

              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                      <li>
                        <a href="index.php">Accueil</a>
                      </li>
                      <li class="active">
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
                      // On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
                      session_start ();

                      // On récupère nos variables de session
                      if (isset($_SESSION['mailm']) && isset($_SESSION['mdpm'])) {
                      ?>
                      <li><a href="membre.php">Page Membre</a></li>
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
    <div class="slide-one-item home-slider owl-carousel">



      <div class="site-blocks-cover" style="background-image: url(images/stage1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1>Nos Stages</h1>
              <p class="font-weight-normal">Vous recherchez un séjour cheval et nature pour vos enfants à partir de 7 ans.
Le centre équestre Saint Vitrac vous propose plus de 4 heures équestres par jour.</p>
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
              <a href="https://www.youtube.com/watch?v=UnK2GOhNTb8" class="popup-vimeo image-play">
                <span class="icon-wrap">
                  <span class="icon icon-play"></span>
                </span>
                <img src="images/stage.jpg" alt="" class="img-fluid">
              </a>
            </div>

        </div>
        <div class="col-md-5 ml-auto">
          <h2 class="h2 mb-3">À Propos de nos stages</h2>
          <p class="h5 mb-3">Nos stages pour tous !</p>
          <p class="mb-4">Nous proposons différents type de stages.</p>
          <p><a href="https://www.youtube.com/watch?v=UnK2GOhNTb8" class="popup-vimeo text-uppercase">Regarder une Vidéo <span class="icon-arrow-right small"></span></a></p>
        </div>
      </div>
    </div>
  </div>



    <div class="site-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-5 mb-5 mb-lg-0 order-1">
            <h2 class="mb-3 text-uppercase">Stage<strong class="text-black font-weight-bold"> de découverte </strong></h2>

            <p class="mb-4">Les stages de "découverte" sont des stages d’équitation ludiques adaptés au tout petit avec des bons moments de contact avec l’animal agrémenté d’exercices de psychomotricité et des jeux à poney.

L’enfant apprend à brosser son poney, le respecter, le préparer pour la séance, l’emmener en main au manège pour enfin découvrir des petits jeux en groupe. Une activité ludique ou l’enfant s’amuse avec d’autres cavaliers à dos de poney.

L’équitation permet à l’enfant de développer son équilibre, sa confiance en soi, son sens de la responsabilité en s’occupant du poney, sa socialisation…</p>
            <p><a href="#" class="btn btn-primary pill px-4">En savoir plus</a></p> <!-- lien vers connex.html si client non connecté et si il est connecté liens vers les horraires et autres du cours -->
          </div>
          <div class="col-md-12 col-lg-6 mr-auto order-2">
            <img src="images/stageini.jpeg" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 mb-5 mb-md-0">
            <img src="images/stageado.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-12 col-lg-5 mb-5 mb-lg-0 order-1">
            <h2 class="mb-3 text-uppercase">Stage <strong class="text-black font-weight-bold"> d'apprentissage</strong></h2>
            <p class="mb-4">Les débutants et cavaliers de petits niveaux sont encadrés lors de la préparation jusqu’à totale autonomie. Les cavaliers confirmés sont laissés en autonomie mais toujours avec possibilité d’être aidés et secondés en cas de besoin.

Les cours sont adaptés au niveau des cavaliers et à leurs préférences: Initiation,   dressage et d'obstacle en alternance ou  cours specifiques tels que dressage,  compétition,  voltige cosaque, attelage, pleine nature.</p>
            <form method="post" action="log.php">
              <button class="btn btn-primary pill px-4" name="promenade">En savoir plus</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-5 mb-5 mb-lg-0 order-1">
            <h2 class="mb-3 text-uppercase">Stage <strong class="text-black font-weight-bold"> de perfectionnement</strong></h2>
            <p class="mb-4"> Stage de perfectionnement </p>
            <form method="post" action="log.php">
              <button class="btn btn-primary pill px-4" name="promenade">En savoir plus</button>
            </form>
          </div>
          <div class="col-md-12 col-lg-6 mr-auto order-2">
            <img src="images/stageadulte.jpg" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-6" data-aos="fade" >
            <h2>Questions fréquentes</h2>
          </div>
        </div>


        <div class="row justify-content-center" data-aos="fade" data-aos-delay="100">
          <div class="col-md-8">
            <div class="accordion unit-8" id="accordion">
            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">A partir de quel age?<span class="icon"></span></a>
              </h3>
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p> Les enfants sont autorisés à partir de l'age de 6 ans. Ils pourront participer à des cours de Baby Poney.</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">Peut on préparer son pasage de galop?<span class="icon"></span></a>
              </h3>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Le centre propose des cours théoriques et pratiques aux membres du centre pour le passage de galop (1 à 5).</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">Avoir des cours individuel?<span class="icon"></span></a>
              </h3>
              <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Le centre propose des cours individuel à ses membres. Pour réserver un cours veuillez contacter le centre via mail ou téléphone.</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

          </div>
          </div>
        </div>

      </div>
    </div>

    <!--Image btn vers le haut-->
    <img id='btn_up' src="images/to_top.png"/></div>



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
