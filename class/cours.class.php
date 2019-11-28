<?php
  class cours
  {
    private $idcours;
    private $datecours;
    private $heuredcours;
    private $deccours;
    private $heurefcours;
    private $conn;

    //construct
    public function cours ($idcours, $datecours, $deccours, $heuredcours, $heurefcours, $conn)
    {
      $this->idcours = $idcours;
      $this->datecours = $datecours;
      $this->deccours  = $deccours;
      $this->heuredcours = $heuredcours;
      $this->heurefcours = $heurefcours;
      $this->conn = $conn;
    }

    //GET
    public function getidcours(){
    Return $this->idcours = $idcours;
    }

    //SET
    public function setidcours(){
    $this->idcours = $idcours;
    }

    //AJOUT
    public function ajoutcours ($datecours, $deccours, $heuredcours, $heurefcours, $conn)
    {
      $SQL = "INSERT INTO cours (datecours, deccours, heuredcours, heurefcours, validecours)
              VALUES ('$datecours', '$deccours', '$heuredcours', '$heurefcours',  1)";
      $conn->query($SQL);
      header('Location:gestionart.php');
    }
?>
