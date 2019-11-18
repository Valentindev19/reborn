<?php

include 'class/bdd.inc.php';
  $idcontact= $_GET['id'];
  $SQL = "UPDATE contact
          SET validecontact= 0
          WHERE idcontact='$idcontact'";
  $conn -> query($SQL);
  header("Location:gestionmess.php");
?>
