<?php
  class type_cours
  {
    private $id_type_cours;
    private $nom_type_cours;
    private $conn;

    //construct
    public function type_cours($id_type_cours, $nom_type_cours,  $conn)
    {
      $this->id_type_cours = $id_type_cours;
      $this->nom_type_cours = $nom_type_cours;
      $this->conn = $conn;
    }

    //GET
    public function gettypecours(){
    return $this->id_type_cours = $id_type_cours;
    }

    // AFFICHER

        public function afftype_cours($conn)
        {
          $SQL = "SELECT  id_type_cours, nom_type_cours
          FROM type_cours";
          $req = $conn -> query($SQL);
          return $req;
        }
      }
?>
