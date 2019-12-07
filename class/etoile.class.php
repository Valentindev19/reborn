<?php
  class etoile
  {
    private $idche;
    private $idmembre;
    private $etoile;
    private $conn;

    //construct
    public function etoile($idche, $idmembre, $etoile, $conn)
    {
      $this->idche = $idche;
      $this->idmembre = $idmembre;
      $this->etoile = $etoile;
      $this->conn = $conn;
    }





    public function ajoutetoile($idche, $idmembre, $etoile,$conn)
    {
      $SQL = "INSERT INTO aime (idche, idmembre, aime)
              VALUES ('$idche', '$idmembre', '$etoile')";
      $conn->query($SQL);
      echo $idmembre;
      header('Location:chevaux .php');
    }
    public function affid($conn, $mail, $mdpm)
    {
      $SQL = "SELECT idmembre
      FROM membre
      WHERE mailm ='$mail'
      AND mdpm='$mdpm'";
      $res = $conn -> query($SQL);
      return $res;

    }
    public function moyaime($conn, $idche)
    {
      $SQL = "SELECT round(avg(aime))
      FROM aime
      WHERE idche ='$idche' ";
      $res = $conn -> query($SQL);
      return $res;

    }


  }
?>
