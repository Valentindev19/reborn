<?php
  include 'class/bdd.inc.php';
  include 'class/contact.class.php';

  if (isset($_POST['btn_contact_form']))
  {

    if(isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message']))
    {
      $nomprecontact = $_POST['nom'];
      $mailcontact = $_POST['email'];
      $phonecontact = $_POST['phone'];
      $messagecontact = $_POST['message'];



      $contact = new contact("","","","","","","");
      $contact->ajoutcon($nomprecontact, $mailcontact, $phonecontact, $messagecontact,$conn);

    }
    else
    {
      header('Location:contact.php');
    }
  }
  if (isset($_GET['sup']))
  {
    $idc = $_GET['id'];
    $contact = new article("","","","","","","");
    $contact->suppart($idcontact,$conn);
    header('Location:gestionmess.php');
  }


    ?>
