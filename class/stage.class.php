<?php
//include'typestage.class.php';
  class stage
  {
    private $idstage;
    private $dated;
    private $datef;
    private $des;
    private $heured;
    private $heuref;
    private $repas;
    private $type;
    private $conn;


    public function stage($idstage, $dated, $datef, $des, $heured, $heuref, $repas, $idtype_stage,$conn)
    {
      $this->idstage = $idstage;
      $this->dated = $dated;
      $this->datef  = $datef;
      $this->des = $des;
      $this->heured = $heured;
      $this->heuref = $heuref;
      $this->repas = $repas;
      $this->type= $idtype_stage;
      $this->conn = $conn;
    }
////////////////////////////////////// Le GET
    public function getid()
    {
      return $this->idstage;
    }



////////////////////////////////////////// AJOUT
    public function ajoutstage($idtype_stage, $dated, $datef, $des, $heured, $heuref, $repas, $conn)
    {
      $SQL = "INSERT INTO stage (idtype_stage, datedstage, datefstage, descstage, heuredstage, heurefstage, repas, validestage)
              VALUES ('$idtype_stage', '$dated', '$datef', '$des', '$heured', '$heuref', '$repas', 1)";
      $conn->query($SQL);
      //header('Location:gestionsta.php');
    }
////////////////////////////////////////// SUPPRIMER
    public function suppstage($idstage, $conn)
    {
      $SQL = "UPDATE stage
              SET validestage = 0
              WHERE idstage ='$idstage'";
      $conn -> query($SQL);

    }
////////////////////////////////////////// MODIFIER
    public function modifstage($idstage,$idtype_stage, $dated, $datef, $des, $heured, $heuref, $repas, $conn)
    {
      $SQL = "UPDATE stage
              SET idtype_stage = '$idtype_stage', datedstage = '$dated', datefstage = '$datef', descstage = '$des', heuredstage = '$heured', heurefstage = '$heuref', repas = '$repas'
              WHERE idstage ='$idstage'";
      $conn -> query($SQL);

    }
////////////////////////////////////////// AFFICHER
    public function affstage1($idstage, $conn)
    {
        $SQL = "SELECT idstage,type_stage.typestage, datedstage, datefstage, descstage, heuredstage, heurefstage, repas
        FROM stage,type_stage
        WHERE stage.idtype_stage = type_stage.idtype_stage
        AND idstage= '$idstage'";

      $res = $conn -> query($SQL);
      return $res;
    }

    public function affstage($conn)
    {
      $SQL = "SELECT idstage,type_stage.typestage, datedstage, datefstage, descstage, heuredstage, heurefstage, repas
      FROM stage,type_stage
      WHERE stage.idtype_stage = type_stage.idtype_stage
      AND validestage= 1";
      $req = $conn -> query($SQL);
      return $req;
    }
    public function afftype($conn)
    {
      $SQL = "SELECT idtype_stage, typestage
      FROM type_stage";
      $res = $conn -> query($SQL);
      return $res;
    }
    public function affstageres($conn,$id)
    {
      $SQL = "SELECT idstage,type_stage.typestage, datedstage, datefstage, descstage, heuredstage, heurefstage, repas
      FROM stage,type_stage
      WHERE stage.idtype_stage = type_stage.idtype_stage
      AND stage.idtype_stage = '$id'
      AND validestage= 1";
      $req = $conn -> query($SQL);
      return $req;
    }
    public function affresstage($id, $conn)
    {
      $SQL = "SELECT  stage.idstage,type_stage.typestage, datedstage, datefstage, descstage, heuredstage, heurefstage, repas
      FROM stage, membre, inscriptions,type_stage
      WHERE stage.idstage = inscriptions.idstage
      AND membre.idmembre = inscriptions.idmembre
      AND type_stage.idtype_stage = stage.idtype_stage
      AND validestage = 1
      AND inscriptions.idmembre = '$id'
      AND valide_stage = 1";
      $req = $conn -> query($SQL);
      return $req;
    }
    public function ajoutress($conn,$id,$idmembre)
    {
      $SQL = "INSERT INTO inscriptions (idstage,idmembre,valide_stage)
              VALUES ('$id','$idmembre','1')";
      $req = $conn -> query($SQL);
      return $req;
    }
    public function affstagem($id, $conn)
    {
      $SQL = "SELECT  stage.datedstage, stage.descstage, membre.nomm, membre.prenomm, membre.telephonem, membre.mailm
      FROM stage, membre, inscriptions
      WHERE stage.idstage = inscriptions.idstage
      AND membre.idmembre = inscriptions.idmembre
      AND validestage = 1
      AND stage.idstage = '$id'
      AND valide_stage = 1";
      $req = $conn -> query($SQL);
      return $req;
    }
}

?>
