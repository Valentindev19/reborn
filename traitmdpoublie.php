<?php
    // Connexion à la base de données
    include('class/bdd.inc.php');
    include('class/membre.class.php');
    // Récupération des variables nécessaires au mail de récupération
    $mailm = $_POST['mailm'];
    $membre = new membre("","","","","","","","","","","","","","");
    $req = $membre->verifmail($mailm,$conn);
    $ligne = $req -> fetch();
    if ($ligne['mailm'] = $mailm)
    {
      // Préparation du mail contenant le lien d'activation
      $cle = $ligne['cle'];
      $destinataire = $mailm;
      $sujet = "Récupération mot de passe" ;
      $entete = "From: récupération@centresaintvitrac.com" ;

      // Le lien d'activation est composé du mail et de la clé(cle)
      $message = 'Bienvenue sur le centre équestre de saint vitrac,

      Pour récupérer votre mot de passe, veuillez cliquer sur le lien ci dessous
      ou copier/coller dans votre navigateur internet.

      http://localhost/ppe3/reborn/traitmdpoublie.php?log='.urlencode($mailm).'&cle='.urlencode($cle).'


      ---------------
      Ceci est un mail automatique, Merci de ne pas y répondre.';


      //mail($destinataire, $sujet, $message, $entete) ;  Envoi du mail

      // Comme l'envoi de mail ne fonctionne pas en locale
      // J'ouvre la sessions ici

      $membre = new membre("","","","","","","","","","","","","","");
      $req = $membre->affsess2($mailm,$conn);
      $ligne = $req -> fetch();
      session_start();
      $_SESSION['mailm'] = $ligne['mailm'];
      $_SESSION['mdpm'] = $ligne['mdpm'];


      header("Location:forminfom.php");
  }
  else
  {
    setcookie('mdpoublie','Le mail n existe pas.', time() + 3600);
    header('Location:mdpoublie.php');
  }
  // Si lien cliqué dans le mail possibilité de changer le mdp
  if (isset($_GET['cle']))
  {
    $mailm = $_GET['log'];
    $membre = new membre("","","","","","","","","","","","","","");
    $membre->affcle($mailm,$conn);
    $cleverif = $ligne['cle'];
    if ($_GET['cle'] == $cleverif)
    {
      // Initialisation des variables sessions pour rester connecté
      $membre = new membre("","","","","","","","","","","","","","");
      $membre->affsess($mailm,$conn);

      session_start();
      $_SESSION['mailm'] = $ligne['mailm'];
      $_SESSION['mdpm'] = $ligne['mdpm'];

      header("Location:conex.php");
    }
  }

?>
