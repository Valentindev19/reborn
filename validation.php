<?php
  // Connexion à la base de données
  include('class/bdd.inc.php');
  include('class/membre.class.php');
  // Vérification des données saisies par l'utilisateur
  if ($_POST['nom'] != '' && $_POST['prenom'] != '' && $_POST['DN'] != '' && $_POST['sexe'] != '' && $_POST['email'] != '' && $_POST['phone'] != '' && $_POST['CP'] != '' &&
  $_POST['ville'] != '' && $_POST['adr'] != '')
  {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $dn = $_POST['DN'];
    $sexe = $_POST['sexe'];
    $mailm = $_POST['email'];
    $phone = $_POST['phone'];
    $cp = $_POST['CP'];
    $ville = $_POST['ville'];
    $adr = $_POST['adr'];
    $mdp = $_POST['mdp'];
    $mdp2 = $_POST['mdp2'];
    if ($mdp != $mdp2)
    {
      setcookie('mvmdp','Vos mots de passe ne correspondent pas.', time() + 3600);
      header("Location:conex.php");
    }
    if (isset($_POST['comp']))
    {
      $comp = $_POST['comp'];
    }
    else
    {
      $comp = "";
    }
    // Récupération de l'id de la ville
    $req = "SELECT ville_id
            FROM villes
            WHERE ville_nom = '$ville'
            AND ville_code_postal = $cp;";
    $res = $conn -> Query($req);
    $ligne = $res -> fetch();
    $id_ville = $ligne['ville_id'];

    // Récupération des variables nécessaires au mail de confirmation
    $mailm = $_POST['email'];

    // Génération aléatoire d'une clé
    $cle = md5(microtime(TRUE)*100000);

    // Insertion de la clé et des autres valeurs dans la base de données
    if(isset($_POST['form_conex']))
    {
      $membre = new membre("","","","","","","","","","","","","","");
      $membre->ajoutmembre($nom, $prenom, $sexe, $dn, $mailm, $phone, $adr, $comp, $mdp, $id_ville, $cle, $conn);
      header("Location:log.php"); // header ici parceque l envoie de mail ne marche pas en local
    }


    // Préparation du mail contenant le lien d'activation
    $destinataire = $mailm;
    $sujet = "Activer votre compte" ;
    $entete = "From: inscription@centresaintvitrac.com" ;

    // Le lien d'activation est composé du mail et de la clé(cle)
    $message = 'Bienvenue sur le centre équestre de saint vitrac,

    Pour activer votre compte, veuillez cliquer sur le lien ci dessous
    ou copier/coller dans votre navigateur internet.

    http://localhost/ppe3/reborn/validation.php?log='.urlencode($mailm).'&cle='.urlencode($cle).'


    ---------------
    Ceci est un mail automatique, Merci de ne pas y répondre.';


    //mail($destinataire, $sujet, $message, $entete) ;  Envoi du mail
  }
  else
  {
    header('Location:conex.php');
  }
  // Si lien cliqué dans le mail passage du membre en actif
  if (isset($_GET['cle']))
  {
    $mailm = $_GET['log'];
    $membre = new membre("","","","","","","","","","","","","","");
    $membre->affcle($mailm,$conn);
    $cleverif = $ligne['cle'];
    if ($_GET['cle'] == $cleverif)
    {
      $membre = new membre("","","","","","","","","","","","","","");
      $cheval-> modifvalide($cleverif, $mailm, $conn);
      // Initialisation des variables sessions pour rester connecté
      $membre = new membre("","","","","","","","","","","","","","");
      $membre->affsess($mailm,$conn);

      session_start();
      $_SESSION['mailm'] = $ligne['mailm'];
      $_SESSION['mdpm'] = $ligne['mdpm'];

      header("Location:membre.php");
    }
  }
  else {
    header('Location:membre.php');
  }

?>
