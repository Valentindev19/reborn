<?php
include 'class/bdd.inc.php';
$mailm = $_POST['mailm'];

$mdpm = $_POST['mdpm'];


//  Récupération de l'utilisateur et de son pass hashé
$req = "SELECT mailm, mdpm, id_typem, validemembre FROM membre WHERE mailm = '$mailm' ";
$res=	$conn -> query($req);
$ligne = $res -> fetch();



// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($mdpm, $ligne['mdpm']);

if (!$ligne)
{
    echo 'Mauvais identifiant ou mot de passe !';
    setcookie('erreur',0, time() + 3600);
    header("Location:log.php");
}
else
{
    if ($mdpm == $ligne['mdpm'])
    {
      if ($ligne['validemembre'] == "1")
      {
        if ($ligne['id_typem'] == "1" )
        {
          header("Location:admin.php");
        }
        else
        {
          session_start();

        $_SESSION['mailm'] = $mailm;
        echo 'Vous êtes connecté !';
      }
    }
      else {
        echo 'Compte pas encore activé';
        setcookie('non',0, time() + 3600);
        header("Location:log.php");
      }

    }
   else
    {
        echo 'Mauvais identifiant ou mot de passe !!!';
        setcookie('erreur',0, time() + 3600);
        header("Location:log.php");
    }
}
