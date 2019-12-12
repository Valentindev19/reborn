<?php
  class type_pro
  {
    private $id_type_pro;
    private $nom_type_pro;
    private $conn;

    //construct
    public function type_pro($id_type_pro, $nom_type_pro,  $conn)
    {
      $this->id_type_pro = $id_type_pro;
      $this->nom_type_pro = $nom_type_pro;
      $this->conn = $conn;
    }

    //GET
    public function gettypepro(){
    return $this->id_type_pro = $id_type_pro;
    }

    // AFFICHER


        public function afftype_pro($conn)
        {
          $SQL = "SELECT  id_type_pro, nom_type_pro
          FROM type_pro";
          $req = $conn -> query($SQL);
          return $req;
        }
      }
?>
