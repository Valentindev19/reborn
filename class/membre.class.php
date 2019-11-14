<?php
include("bdd.inc.php");
class membre
{
  private $idm;
  private $nomm;
  private $prenomm;
  private $genrem;
  private $ddn;
  private $mailm;
  private $telephonem;
  private $ruem;
  private $compm;
  private $mdpm;
  private $ville_id;
  private $id_typem;
  private $validemembre;
  private $cle;


  public function membre($idm,$nomm,$prenomm,$genrem,$ddn,$mailm,$telephonem,$ruem,$compm,$mdpm,$ville_id,$id_typem,$validemembre,$cle)
  {
    $this->$idm = $idm;
    $this->$nomm = $nomm;
    $this->$prenomm = $prenomm;
    $this->$genrem = $genrem;
    $this->$ddn = $ddn;
    $this->$mailm = $mailm;
    $this->$telephonem = $telephonem;
    $this->$ruem = $ruem;
    $this->$compm = $compm;
    $this->$mdpm = $mdpm;
    $this->$ville_id = $ville_id;
    $this->$id_typem = $id_typem;
    $this->$validemembre = $validemembre;
    $this->$cle = $cle;
  }

  public function tlproduit($conn)
  {
    $sql = "select * from membre";
    $req = $conn->query($sql);
    return $req;
  }

  public function selectproduit($idp,$conn)
  {
    $sql = "select * from membre where idmembre = '$idm'";
    $req = $conn->query($sql);
    $res = $req->fetch();
    return $res;
  }

  public function ajoutmembre($nomm,$prenomm,$genrem,$ddn,$mailm,$telephonem,$ruem,$compm,$mdpm,$id_ville,$cle)
  {
    $req = "INSERT INTO membre(nomm,prenomm,genrem,ddn,mailm,telephonem,ruem,compm,mdpm,ville_id,id_typem,validemembre,cle)
            VALUES('$nomm','$prenomm','$genrem',$ddn,'$mailm','$telephonem','$ruem','$compm','$mdpm',$id_ville,2,1,'$cle');";
    $conn -> Query($req);
  }

  public function modifproduit($idp,$des,$t,$conn)
  {
    $sql = "UPDATE `produit` SET `descp` = '$des', `prix` = '$t' WHERE `produit`.`idp` = $idp; ";
    $conn->query($sql);
  }

////////////////////////////////////// Le GET
  public function getidp()
  {
    return $this->idp;
  }
  public function getdesp()
  {
    return $this->desp;
  }
  public function getprixp()
  {
    return $this->prixp;
  }

////////////////////////////////////////////// Le SET
  public function setidp()
  {
    $this->idp = $nidp;
  }
  public function setdesp()
  {
    $this->desp = $ndesp;
  }
  public function setprixp()
  {
    $this->prixp = $nprixp;
  }

}


?>
