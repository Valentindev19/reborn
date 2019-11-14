<?php

  // Connexion à la base de données
  include('class/bdd.inc.php');
  // Vérification des données saisies par l'utilisateur
  if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['DN']) && isset($_POST['sexe']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['CP']) &&
  isset($_POST['ville']) && isset($_POST['adr']) && isset($_POST['comp']))
  {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $dn = $_POST['DN'];
    $sexe = $_POST['sexe'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $cp = $_POST['CP'];
    $ville = $_POST['ville'];
    $adr = $_POST['adr'];
    $comp = $_POST['comp'];
    $mdp = $_POST['mdp'];
    // Récupération de l'id de la ville
    $req = "SELECT ville_id
            FROM villes
            WHERE ville_nom = '$ville'
            AND ville_code_postal = $cp;";
    $res = $conn -> Query($req);
    $ligne = $res -> fetch();
    $id_ville = $ligne['ville_id'];
  }
  // Si lien cliqué dans le mail passage du membre en actif
  if (isset($_GET['cle']))
  {
    $email = $_GET['log'];
    $req = "SELECT cle
            FROM membre
            WHERE mailm = '$email'";
    $res = $conn -> Query($req);
    $ligne = $res -> fetch();
    $cleverif = $ligne['cle'];
    if ($_GET['cle'] == $cleverif)
    {
      $req = "UPDATE membre
              SET cle = $cleverif,
                  validemembre = '1'
              WHERE mailm = '$email'";
      $res = $conn -> Query($req);
      // Initialisation des variables sessions pour rester connecté
      $req = "SELECT mailm, mdpm, id_typem, validemembre FROM membre WHERE mailm = '$mailm' ";
      $res=	$conn -> query($req);
      $ligne = $res -> fetch();

      session_start();
      $_SESSION['mailm'] = $ligne[mailm];
      $_SESSION['mdpm'] = $ligne[mdpm];

      header("membre.php");
    }
  }
  else
  {
    // Récupération des variables nécessaires au mail de confirmation
    $email = $_POST['email'];

    // Génération aléatoire d'une clé
    $cle = md5(microtime(TRUE)*100000);

    // Insertion de la clé et des autres valeurs dans la base de données
    if(isset($_POST['form_conex']))
    {
        $req = "INSERT INTO membre(nomm,prenomm,genrem,ddn,mailm,telephonem,ruem,compm,mdpm,ville_id,id_typem,validemembre,cle)
                VALUES('$nom','$prenom','$sexe',$dn,'$email','$phone','$adr','$comp','$mdp',$id_ville,2,1 /* il est mis en actif ici parceque l envoie de mail ne marche pas en local  */,'$cle');";
        $conn -> Query($req);
        header("Location:membre.php"); // header ici parceque l envoie de mail ne marche pas en local
    }


    // Préparation du mail contenant le lien d'activation
    $destinataire = $email;
    $sujet = "Activer votre compte" ;
    $entete = "From: inscription@centresaintvitrac.com" ;

    // Le lien d'activation est composé du mail et de la clé(cle)
    $message = 'Bienvenue sur le centre équestre de saint vitrac,

    Pour activer votre compte, veuillez cliquer sur le lien ci dessous
    ou copier/coller dans votre navigateur internet.

    http://localhost/ppe3/reborn/validation.php?log='.urlencode($email).'&cle='.urlencode($cle).'


    ---------------
    Ceci est un mail automatique, Merci de ne pas y répondre.';


    //mail($destinataire, $sujet, $message, $entete) ;  Envoi du mail

  }

?>
