<?php
  include'membre.class.php';
  include'poney.class.php';
  $id = $_POST['id'];
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $mail = $_POST['mail'];
  $mdp = $_POST['mdp'];
  $poney = $_POST['poney'];
  $unponey= new poney(1, $poney);
  $unmembre= new membre($id, $nom ,$prenom , $mail , $mdp, $unponey);
  echo $unmembre -> Get_idp();
  ?>
  <html>
    <br>
  </html>
  <?php
  echo $unmembre -> Get_nom();
  echo "&nbsp";
  echo $unmembre -> Get_prenom();
  ?>
  <html>
    <br>
  </html>
  <?php
  echo $unmembre -> Get_mail();
  ?>
  <html>
    <br>
  </html>
  <?php
  echo $unmembre -> Get_mdp();
  ?>
  <html>
    <br>
  </html>
  <?php
  echo $unponey -> Get_nom();

  ?>
