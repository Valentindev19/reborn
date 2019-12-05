<?php
session_start();
include 'class/bdd.inc.php';
include 'class/etoile.class.php';
$idche = $_COOKIE['idche'];
$mail = $_SESSION['mailm'];
$mdpm = $_SESSION['mdpm'];
$etoile = $_COOKIE['etoile'];
setcookie('idche','',-1);
setcookie('etoile','',-1);
$etoile = new etoile("","","","","");
$idmembre =$etoile->affid($conn,$mail, $mdpm);
$etoile = new etoile("","","","","");
$etoile->ajoutetoile($idche,$idmembre ,$etoile,$conn);
?>
