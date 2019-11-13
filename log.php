<?php
include 'class/bdd.inc.php';
$mailm = $_POST['mailm'];
$mdpm = $_POST['mdpm'];

//  Récupération de l'utilisateur et de son pass hashé
$sql = "SELECT mailm, mdpm  FROM membre WHERE mailm = $mailm";
$req=	$conn -> query($sql);
$resultat = $req -> fetch();
$mdpm = $resultat['mdpm'];
echo $mdpm;

// Comparaison du pass envoyé via le formulaire avec la base
//$isPasswordCorrect = password_verify($_POST['mdpm'], $resultat['mdpm']);

if (!$result['mdpm'])
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    if ($_POST['mdpm']==$result['mdpm']) {
        session_start();
        $_SESSION['idmembre'] = $resultat['idmembre'];
        $_SESSION['mailm'] = $mailm;
        echo 'Vous êtes connecté !';
    }
    else {
        echo 'Mauvais identifiant ou mot de passe ';
    }
}
