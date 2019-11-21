<?php

  class cheval
  {
    private $idche;
    private $race;
    private $nomche;
    private $ageche;
    private $taille;
    private $poids;
    private $sexe;
    private $image;
    private $conn;


    public function cheval($idche, $race, $nomche, $ageche, $taille, $poids, $sexe, $image, $conn)
    {
      $this->idche = $idche;
      $this->race = $race;
      $this->nomche  = $nomche;
      $this->ageche = $ageche;
      $this->taille = $taille;
      $this->poids = $poids;
      $this->sexe = $sexe;
      $this->image = $image;
      $this->conn = $conn;
    }
////////////////////////////////////// Le GET
    public function getidche()
    {
      return $this->idche;
    }

////////////////////////////////////////////// Le SET
    public function setidche()
    {
      $this->idche = $nidche;
    }

////////////////////////////////////////// AJOUT
    public function ajoutche($race, $nomche, $ageche, $taille, $poids, $sexe, $image, $conn)
    {
      $SQL = "INSERT INTO cheval (race, nomche, ageche, tailleche, poids, sexeche, imageche, valideche)
              VALUES ('$race', '$nomche', $ageche, $taille, $poids, '$sexe', '$image', 1)";
      $conn->query($SQL);
      header('Location:gestionche.php');
    }
////////////////////////////////////////// SUPPRIMER
    public function suppche($idche, $conn)
    {
      $SQL = "UPDATE cheval
              SET valideche = 0
              WHERE idche ='$idche'";
      $conn -> query($SQL);
      header("Location:gestionche.php");
    }
////////////////////////////////////////// MODIFIER
    public function modifche($idche ,$race, $nomche, $ageche, $taille, $poids, $sexe, $image, $conn)
    {
      $SQL = "UPDATE cheval
              SET race = '$race', nomche = '$nomche', ageche = $ageche, tailleche = $taille, poids = $poids, sexeche = '$sexe', imageche = '$image'
              WHERE idche =$idche";
      $conn -> query($SQL);
      header("Location:gestionche.php");
    }
////////////////////////////////////////// AFFICHER
    public function affche($idche, $conn)
    {
      $SQL = "SELECT race, nomche, ageche, tailleche, poids, sexeche, imageche
      FROM cheval
      WHERE idche ='$idche'";
      $res = $conn -> query($SQL);
      $ligne = $res -> fetch();
      return $ligne;
    }

    public function affche2($conn)
    {
      $SQL = "SELECT race, nomche, ageche, tailleche, poids, sexeche, imageche
      FROM cheval";
      $req = $conn -> query($SQL);
      return $req;
    }
}

?>
