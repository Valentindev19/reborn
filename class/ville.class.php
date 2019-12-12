<?php
  class ville
  {
    private $idville;
    private $nomville;
    private $cp;
    private $conn;

    //construct
    public function ville($idville, $nomville, $cp,  $conn)
    {
      $this->idville = $idville;
      $this->libville = $nomville;
      $this->cp = $cp;
      $this->conn = $conn;
    }

    // AFFICHER

        public function affville($nomville, $cp, $conn)
        {
          $SQL = "SELECT  ville_id
          FROM villes
          WHERE ville_code_postal = '$cp'
          AND ville_nom_reel = '$nomville'";
          $req = $conn -> query($SQL);
          return $req;
        }

      }
?>
