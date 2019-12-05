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
