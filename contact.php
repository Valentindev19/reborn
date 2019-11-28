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
                      <li class="active"><a href="contact.php">Contact</a></li>
                      </html>
                      <?php
                      // On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
                      session_start ();

                      // On récupère nos variables de session
                      if (isset($_SESSION['mailm']) && isset($_SESSION['mdpm'])) {
                        if (isset($_SESSION['mailm']) && isset($_SESSION['mdpm']) && isset($_SESSION['id_typem'])) {
                        ?>
                        <li><a href="admin.php">Page Admin</a></li>
                      </ul>
                      <?php
                      }
                      else {
                        ?>
                        <li><a href="membre.php">Page Membre</a></li>
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



      <div class="site-blocks-cover" style="background-image: url(images/contact.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1>Contact </h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">

          <div class="col-md-12 col-lg-8 mb-5">



            <form method="post" action="trait_contact.php" id="contact_form" class="p-5 bg-white">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Nom</label>
                  <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom prenom">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Email</label>
                  <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                </div>
              </div>


              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="phone">Téléphone</label>
                  <input type="text" name="phone" id="phone" class="form-control" placeholder="Téléphone">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Message</label>
                  <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Votre message..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <td><input type ="submit" name="btn_contact_form" value="Envoyer" class="btn btn-primary pill px-4 py-2">
                </div>
              </div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16487.670893629707!2d1.2213861096393634!3d44.82721581606987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aca7ec036b85b7%3A0x81d6690adf9d6450!2s24200%20Vitrac!5e0!3m2!1sfr!2sfr!4v1570699872709!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </form>
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

            <script src="cookie/cookiechoices.js"></script>

          </body>
        </html>
