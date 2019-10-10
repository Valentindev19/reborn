<?php
  if (isset($_POST['g-recaptcha-response']))
  {
    require_once 'ReCaptcha/autoload.php';
    $recaptcha = new \ReCaptcha\ReCaptcha('6Lca1qQUAAAAACiM6U4thRyEp1wP9M1Vlidj418N');
    $resp = $recaptcha->verify($_POST['g-recaptcha-response']);
    if ($resp->isSuccess())
    {
      //header("Location:index.html");
      echo "GG";
    }
    else
    {?>
      <html lang="fr" dir="ltr">
      <link href="css/jquery-ui.css" rel="stylesheet">
        <head>
          <meta charset="utf-8">
          <title>Page connexion</title>
          <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        </head>
        <body>
          <link rel="stylesheet" href="css/log.css">
          <div class="login-page">
            <div class="form">
              <form class="login-form" method="post" action="traitlog.php">
                <input type="text" placeholder="mail"/>
                <input type="password" placeholder="mot de passe"/>
                <div class="g-recaptcha" data-sitekey="6Lca1qQUAAAAADWm9IN2V9Em3Vj-CmPdo3LG0U3j"></div>
                <button>Connexion</button>
                <p class="message">Pas inscrit ? <a href="conex.html">Créer un compte</a></p>
              </form>

            </div>
          </div>
          <div class="ui-widget">
             <div class="ui-state-error ui-corner-all" style="padding: 0 .7em;">
                 <p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>
                     <center><strong>Erreur !</strong> Veuillez cocher le Captcha</center></p>
                    </div>
                  </div>
        </body>
      </html>
      <script src="js/jquery.js"></script>
      <script src="jquery-ui.js"></script>

      <?php
      header('Refresh: 3; log.php');
    }

  }
  else
  {
    header("Location:log.php");
  }
