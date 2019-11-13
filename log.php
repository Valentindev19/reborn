<?php
include 'class/bdd.inc.php';
$mailm = $_POST['mailm'];

$mdpm = $_POST['mdpm'];


//  Récupération de l'utilisateur et de son pass hashé
$req = "SELECT mailm, mdpm FROM membre WHERE mailm = '$mailm' ";
$res=	$conn -> query($req);
$ligne = $res -> fetch();



// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($mdpm, $ligne['mdpm']);

if (!$ligne)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    if ($mdpm == $ligne['mdpm']) {
        session_start();

        $_SESSION['mailm'] = $mailm;
        echo 'Vous êtes connecté !';
    }
    else {
        echo 'Mauvais identifiant ou mot de passe !!!';
    }
}
