<?php
session_start();
$mail = $_SESSION['mailm'];
$mdp = $_SESSION['mdpm'];
$etoile = $_COOKIE['etoile'];
echo $etoile;
echo $mdp;

?>
