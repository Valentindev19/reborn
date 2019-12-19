<!DOCTYPE html>
<html lang="fr-fr" dir="ltr">
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
    <title>Mot de passe oublié</title>

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
    <link rel="stylesheet" href="css/log.css">
    <div class="login-page">
      <div class="form">
        <form class="login-form" method="post" action="traitmdpoublie.php">
          <input type="text" placeholder="Votre mail" name="mailm"/>
          <button name="form_oublie">Envoyer</button>
          <p class="message">Pas inscrit ? <a href="conex.php">Créer un compte</a></p>
        </form>
      </div>
    </div>
  </body>
  <?php
  if (isset($_COOKIE['mdpoublie']))
  {
    ?>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$( function() {
  $( "#dialog" ).dialog();
} );
</script>
</head>
<body>

<div id="dialog" title="Erreur Connexion">
<p>Ce mail n'existe pas.</p>
</div>
<?php
    setcookie('mdpoublie',0, time() - 3600);
  }
  ?>

</html>
