<?php
session_start();
include 'class/bdd.inc.php';
include 'class/etoile.class.php';
$idche = $_COOKIE['idche'];
$mailm = $_SESSION['mailm'];
$mdpm = $_SESSION['mdpm'];
$etoi = $_COOKIE['etoile'];
setcookie('idche','',-1);
setcookie('etoile','',-1);
$etoile = new etoile("","","","","");
$req = $etoile->affid($conn,$mailm, $mdpm);
$idmembre = $req->fetch();
$idmembre = $idmembre['idmembre'];
$etoile = new etoile("","","","","");
$etoile->ajoutetoile($idche,$idmembre ,$etoi,$conn);
?>