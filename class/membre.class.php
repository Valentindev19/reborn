<?php
class membre
{
  private $idp;
  private $desp;
  private $prixp;


  public function produit($idp, $desp, $prixp)
  {
    $this->idp = $idp;
    $this->desp = $desp;
    $this->prixp  = $prixp;
  }

  public function tlproduit($conn)
  {
    $sql = "select * from produit";
    $req = $conn->query($sql);
    return $req;
  }

  public function selectproduit($idp,$conn)
  {
    $sql = "select * from produit where idp = '$idp'";
    $req = $conn->query($sql);
    $res = $req->fetch();
    return $res;
  }

  public function ajoutproduit($des,$t,$conn)
  {
    $sql = "INSERT INTO `produit` (`idp`, `descp`, `prix`) VALUES (NULL, '$des', '$t');";
    $conn->query($sql);
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
