
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

                      <li><a href="index.php">Accueil</a>
                    </li>
                    <li>
                    <a href="actualite.php">Actualités</a></li>
                    <li class="active"><a href="chevaux.php">Chevaux</a></li>
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



      <div class="site-blocks-cover inner-page" style="background-image: url(images/noschevaux.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1>Nos chevaux</h1>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!--Cheval Anglais-->
    <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="#">
                  <img src="images/Chevaux/Cheval_anglais1.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Diablo</a></h2>
              <span class="mb-3 d-block post-date">Cheval Anglais &bullet; <a href="#">Mâle</a></span>
              <p>7 ans &bullet; 152cm &bullet; 450 kg </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-7 mb-lg-0">
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="#">
                  <img src="images/Chevaux/Cheval_anglais2.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Kaya</a></h2>
              <span class="mb-3 d-block post-date">Cheval Anglais &bullet; <a href="#">Femelle</a></span>
              <p>15 ans &bullet; 165cm  &bullet; 504 kg</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="#">
                  <img src="images/Chevaux/Cheval_anglais3.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Ombre</a></h2>
              <span class="mb-3 d-block post-date">Cheval Anglais &bullet;<a href="#">Male</a></span>
              <p>20 ans &bullet; 170cm &bullet; 515 kg</p>
            </div>
          </div>


          <!--Cheval Français-->
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="#">
                  <img src="images/Chevaux/Cheval_francais1.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Foudre</a></h2>
              <span class="mb-3 d-block post-date">Cheval Français &bullet; <a href="#">Femelle</a></span>
              <p>12 ans &bullet; 165cm &bullet; 505 kg </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="#">
                  <img src="images/Chevaux/Cheval_francais2.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Elvis</a></h2>
              <span class="mb-3 d-block post-date">Cheval Français &bullet; <a href="#">Male</a></span>
              <p>22 ans &bullet; 173cm &bullet; 530 kg </p>
            </div>
          </div>

          <!--Cheval Lipizzan-->
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="#">
                  <img src="images/Chevaux/Lipizzan2.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Flamme</a></h2>
              <span class="mb-3 d-block post-date">Lipizzan &bullet; <a href="#">Femelle</a></span>
              <p>14 ans &bullet; 160cm &bullet; 503 kg</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="#">
                  <img src="images/Chevaux/Lipizzan1.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Nell</a></h2>
              <span class="mb-3 d-block post-date">Lipizzan &bullet; <a href="#">Male</a></span>
              <p>12 ans &bullet; 155cm &bullet; 496 kg </p>
            </div>
          </div>

          <!--Cheval Mérens-->
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="#">
                  <img src="images/Chevaux/Mérens.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Simba</a></h2>
              <span class="mb-3 d-block post-date">Lipizzan &bullet; <a href="#">Male</a></span>
              <p>13 ans &bullet; 150cm &bullet; 439 kg </p>
            </div>
          </div>

          <!--Poney Français-->
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="#">
                  <img src="images/Chevaux/Poney_francais3.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Eclaireuse</a></h2>
              <span class="mb-3 d-block post-date">Poney Français &bullet; <a href="#">Femelle</a></span>
              <p>13 ans &bullet; 145cm &bullet; 130 kg  </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="#">
                  <img src="images/Chevaux/Poney_francais2.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Histoire</a></h2>
              <span class="mb-3 d-block post-date">Poney Français &bullet; <a href="#">Femelle</a></span>
              <p>10 ans &bullet; 136cm &bullet; 121 kg  </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="#">
                  <img src="images/Chevaux/Poney_francais1.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Jupiter</a></h2>
              <span class="mb-3 d-block post-date">Poney Français &bullet; <a href="#">Male</a></span>
              <p>8 ans &bullet; 130cm &bullet; 114 kg  </p>
            </div>
          </div>

          <!--Shetland-->
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="#">
                  <img src="images/Chevaux/Shetland1.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Hip-Hop</a></h2>
              <span class="mb-3 d-block post-date">Shetland &bullet; <a href="#">Male</a></span>
              <p>10 ans &bullet; 94 &bullet; 154 kg </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="#">
                  <img src="images/Chevaux/Shetland3.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Hold-Up</a></h2>
              <span class="mb-3 d-block post-date">Shetland &bullet; <a href="#">Male</a></span>
              <p>5 ans &bullet; 85cm &bullet; 139 kg </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="#">
                  <img src="images/Chevaux/Shetland2.jpg " alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Melba</a></h2>
              <span class="mb-3 d-block post-date">Shetland &bullet; <a href="#">Femelle</a></span>
              <p>15 ans &bullet; 104cm &bullet; 179 kg </p>
            </div>
          </div>

          <!--Trotteur-->
          <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <div class="media-with-text">
              <div class="img-border-sm mb-4">
                <a href="#">
                  <img src="images/Chevaux/Trotteur.jpg" alt="" class="img-fluid">
                </a>
              </div>
              <h2 class="heading mb-0"><a href="#">Johnny</a></h2>
              <span class="mb-3 d-block post-date">Trotteur &bullet; <a href="#">Male</a></span>
              <p>18 ans &bullet; 167cm &bullet; 595 kg </p>
            </div>
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
            Dimanche de  8H:00 - 16:30 </p>
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
