<?php
  class cours
  {
    private $idcours;
    private $datecours;
    private $heuredcours;
    private $desccours;
    private $heurefcours;
    private $conn;

    //construct
    public function cours ($idcours, $datecours, $heuredcours, $desccours, $heurefcours, $conn)
    {
      $this->idcours = $idcours;
      $this->datecours = $datecours;
      $this->heuredcours = $heuredcours;
      $this->desccours  = $desccours;
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
    public function ajoutcours($datecours, $heuredcours, $desccours, $heurefcours, $conn){
      $SQL = "INSERT INTO cours (datecours, heuredcours, desccours, heurefcours, validecours)
              VALUES ('$datecours', '$heuredcours', '$desccours', '$heurefcours',  1)";
      $conn->query($SQL);
      header('Location:gestioncour.php');
    }

    //DELETE
    public function suppcours($idcours, $conn){
      $SQL = "UPDATE cours
              SET validecours = 0
              WHERE idcours ='$idcours'";
      $conn -> query($SQL);
    }

    //UPDATE
    public function modifcours($idcours, $datecours, $heuredcours, $desccours, $heurefcours, $conn)
    {
      $SQL = "UPDATE cours
              SET datecours = '$datecours', heuredcours = '$heuredcours', desccours = '$desccours', heurefcours = '$heurefcours',
              WHERE idcours ='$idcours'";
      $conn -> query($SQL);
    }

    // AFFICHER
        public function affcours($idcours, $conn){
          $SQL = "SELECT datecours, heuredcours, desccours, heurefcours
          FROM cours
          WHERE idcours ='$idcours'";
          $req = $conn -> query($SQL);
          return $req;
        }

        public function affcours2($conn)
        {
          $SQL = "SELECT  idcours, datecours, heuredcours, desccours, heurefcours
          FROM cours
          WHERE validecours = 1";
          $req = $conn -> query($SQL);
          return $req;
        }
      }
?>
