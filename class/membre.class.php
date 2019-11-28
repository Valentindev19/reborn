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

  //////////////////////////////////////////// AFFICHAGE
  public function affcle($mailm, $conn)
  {
    $req = "SELECT cle
            FROM membre
            WHERE mailm = '$mailm'";
    $res = $conn -> Query($req);
    $ligne = $res -> fetch();
    return $ligne;
  }

  public function affsess($mailm, $conn)
  {
    $req = "SELECT mailm, mdpm, id_typem, validemembre FROM membre WHERE mailm = '$mailm' ";
    $res=	$conn -> query($req);
    $ligne = $res -> fetch();
    return $ligne;
  }

  //////////////////////////////////////////// UPDATE
  public function modifvalide($cleverif, $mailm, $conn)
  {
    $req = "UPDATE membre
            SET cle = $cleverif,
                validemembre = '1'
            WHERE mailm = '$mailm'";
    $res = $conn -> Query($req);
  }

  /////////////////////////////////////////// AJOUT
  public function ajoutmembre($nom, $prenom, $sexe, $dn, $mailm, $phone, $adr, $comp, $mdp, $id_ville, $cle, $conn)
  {
    $req = "INSERT INTO membre(nomm,prenomm,genrem,ddn,mailm,telephonem,ruem,compm,mdpm,ville_id,id_typem,validemembre,cle)
            VALUES('$nom','$prenom','$sexe',$dn,'$mailm','$phone','$adr','$comp','$mdp',$id_ville,2,1 /* il est mis en actif ici parceque l envoie de mail ne marche pas en local  */,'$cle');";
    $conn -> Query($req);
    header("Location:membre.php");
  }

  ////////////////////////////////////////// SUPPRIMER
    public function suppmem($idm, $conn)
    {
      $SQL = "UPDATE membre
              SET validemembre = 0
              WHERE idmembre ='$idm'";
      $conn -> query($SQL);
      header("Location:gestionm.php");
      }
      public function affmembre($mailm, $conn)
      {
        $req = "SELECT nomm, prenomm, genrem, ddn, mailm, telephonem, ruem, FROM membre WHERE mailm = '$mailm' ";
        $res=	$conn -> query($req);
        $ligne = $res -> fetch();
        return $ligne;
      }
      public function affmembre($mailm, $conn)
      {
        $req = "SELECT nomm, prenomm, genrem, ddn, mailm, telephonem, ruem, FROM membre WHERE mailm = '$mailm' ";
        $res=	$conn -> query($req);
        $ligne = $res -> fetch();
        return $ligne;
      }

}


?>
