<?php
  class typestage
  {
    private $idtype_stage;
    private $typestage;
    private $conn;

    //construct
    public function typestage($idtype_stage, $typestage,  $conn)
    {
      $this->idtype_stage = $idtype_stage;
      $this->typestage = $typestage;
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


        public function afftype($conn)
        {
          $SQL = "SELECT  idtype_stage, typestage
          FROM type_stage";
          $req = $conn -> query($SQL);
          return $req;
        }
      }
?>
