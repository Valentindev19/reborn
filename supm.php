<?php

include 'class/bdd.inc.php';
  $idmembre= $_GET['id'];
  $SQL = "UPDATE membre
          SET validemembre= 0
          WHERE idmembre='$idmembre'";
  $conn -> query($SQL);
  header("Location:gestionm.php");
?>
