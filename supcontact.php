<?php
include 'class/contact.class.php';
include 'class/bdd.inc.php';
$idcontact = $_GET['id'];
$contact = new contact("","","","","","","");
$contact->suppcon($idcontact,$conn);
header('Location:gestionmess.php');
?>
