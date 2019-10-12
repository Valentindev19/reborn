<!DOCTYPE html>
<html lang="fr-fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Page connexion</title>
  </head>
  <body>
    <link rel="stylesheet" href="css/log.css">
    <div class="login-page">
      <div class="form">
        <form class="login-form" method="post" action="traitlog.php">
          <input type="text" placeholder="mail"/>
          <input type="password" placeholder="mot de passe"/>
          <div class="g-recaptcha" style="position:relative; right:15px;" data-sitekey="6Lca1qQUAAAAADWm9IN2V9Em3Vj-CmPdo3LG0U3j"></div>
          <br>
          <button>Connexion</button>
            <p class="message"> <a href="conex.html">Mot de passe oublié</a></p>
          <p class="message">Pas inscrit ? <a href="conex.html">Créer un compte</a></p>
        </form>
      </div>
    </div>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </body>
</html>
