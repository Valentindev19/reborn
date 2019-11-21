<?php
  include 'class/bdd.inc.php';
  include 'class/membre.class.php';

  if (isset($_GET['supm']))
  {
    $idm = $_GET['id'];
    $membre = new membre("","","","","","","","","","","","","","");
    $membre->suppmem($idm,$conn);
    header('Location:gestionm.php');
  }
?>
