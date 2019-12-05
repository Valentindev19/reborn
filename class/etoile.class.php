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
      echo $idche;
      echo $idmembre;
      echo $etoile;
      $SQL = "INSERT INTO aime (idche, idmembre, aime)
              VALUES ('$idche', '$idmembre', '$etoile')";
      $conn->query($SQL);
       header('Location:che.php');
    }


          public function affid($conn, $mail, $mdpm)
          {
            $SQL = "SELECT  idmembre
            FROM membre
            WHERE mailm ='$mail'
            AND mdpm='$mdpm'";
            $idmembre = $conn -> query($SQL);
            echo $idmembre;
            die();
            return $idmembre;

          }
      }
?>
