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

      header('Location:che.php?id='.urlencode($idche));
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
    public function vote($conn, $idche, $idmembre)
    {
      $SQL = "SELECT aime FROM aime WHERE idmembre = '$idmembre' AND idche ='$idche' ";
      $aime = $conn -> query($SQL);
      return $aime;

    }
    public function update($conn, $idche, $idmembre, $etoi)
    {
      $SQL = " UPDATE aime
                SET aime = '$etoi'
                WHERE idmembre = '$idmembre'
                AND idche ='$idche'";
      $aime = $conn -> query($SQL);

      header('Location:che.php?id='.urlencode($idche));

    }


  }
?>
