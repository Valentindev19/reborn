<?php
  //Connexion a la Base de Donnée
  include("class/bdd.inc.php");

  //preparation de la requete d'insertion

    $n = $_POST['nom'];
    $e = $_POST['email'];
    $p = $_POST['phone'];
    $m = $_POST['message'];
    $sql = "INSERT INTO contact  VALUES (NULL,'$n','$e','$p','$m',1)";
    $conn -> query($sql);
    setcookie('mail',0, time() + 3600);

  header('Location: contact.php');
  //edee


  //Liaison des marqueurs avec les valeurs


      //$nompre = filter_input(INPUT_POST, 'nompre', FILTER_SANITIZE_STRING);
      //$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
      //$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
      //$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
      //$captcha = filter_input(INPUT_POST, 'token', FILTER_SANITIZE_STRING);

      //if(isset($nompre) && isset($email) && isset($phone) && isset($message))
      //{
      //$req = "INSERT INTO contact(nomprecontact,mailcontact,phonecontact,messagecontact)
      //        VALUES('$nompre','$email','$phone','$message')";
      //$conn -> Query($req);
      //header('Location:index.php');
      //}
?>
