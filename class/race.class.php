<?php
  class race
  {
    private $idrace;
    private $librace;
    private $conn;

    //construct
    public function race($idrace, $librace,  $conn)
    {
      $this->idrace = $idrace;
      $this->librace = $librace;
      $this->conn = $conn;
    }

    //GET
    public function getidgalop(){
    Return $this->idgalop = $idgalop;
    }

    //SET
    public function setidgalop(){
    $this->idgalop = $idgalop;
    }

    //AJOUT
    public function ajoutgalop($datecours, $heuredcours, $desccours, $heurefcours, $conn){
      $SQL = "INSERT INTO cours (datecours, heuredcours, desccours, heurefcours, validecours)
              VALUES ('$datecours', '$heuredcours', '$desccours', '$heurefcours',  1)";
      $conn->query($SQL);
      header('Location:gestioncour.php');
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


        public function affrace($conn)
        {
          $SQL = "SELECT  idrace, librace
          FROM race";
          $req = $conn -> query($SQL);
          return $req;
        }
      }
?>
