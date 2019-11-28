<?php

  class contact
  {
    private $idcontact;
    private $nomprecontact;
    private $mailcontact;
    private $phonecontact;
    private $messagecontact;
    private $validecontact;
    private $conn;


    public function contact($idcontact, $nomprecontact, $mailcontact, $phonecontact, $messagecontact, $validecontact, $conn)
    {
      $this->idcontact = $idcontact;
      $this->nomprecontact = $nomprecontact;
      $this->mailcontact  = $mailcontact;
      $this->phonecontact = $phonecontact;
      $this->messagecontact = $messagecontact;
      $this->validecontact = $validecontact;
      $this->conn = $conn;
    }
////////////////////////////////////// Le GET
    public function getid()
    {
      return $this->idcontact;
    }

////////////////////////////////////////// AJOUT
    public function ajoutcon($nomprecontact, $mailcontact, $phonecontact, $messagecontact, $conn)
    {
      $SQL = "INSERT INTO contact (nomprecontact, mailcontact, phonecontact, messagecontact, validecontact)
              VALUES ('$nomprecontact', '$mailcontact', '$phonecontact', '$messagecontact', 1)";
      $conn->query($SQL);
       header('Location:contact.php');
    }
////////////////////////////////////////// SUPPRIMER
    public function suppcon($idcontact, $conn)
    {
      $SQL = "UPDATE contact
              SET validecontact = 0
              WHERE idcontact ='$idcontact'";
      $conn -> query($SQL);
      header("Location:gestionmess.php");
    }

////////////////////////////////////////// AFFICHER
    public function affcon($conn)
    {
      $SQL= "SELECT idcontact,nomprecontact, mailcontact, phonecontact, messagecontact
      		FROM contact
      		WHERE validecontact= 1";
      $req = $conn -> query($SQL);

      return $req;
    }


}

?>
