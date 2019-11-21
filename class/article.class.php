<?php

  class article
  {
    private $idarticle;
    private $titre_article;
    private $resume_article;
    private $lien_article;
    private $contenue_article;
    private $conn;


    public function article($idarticle, $titre_article, $resume_article, $lien_article, $contenue_article, $conn)
    {
      $this->idarticle = $idarticle;
      $this->titre_article = $titre_article;
      $this->resume_article  = $resume_article;
      $this->lien_article = $lien_article;
      $this->contenue_article = $contenue_article;
      $this->conn = $conn;
    }
////////////////////////////////////// Le GET
    public function getidarticle()
    {
      return $this->idarticle;
    }

////////////////////////////////////////////// Le SET
    public function setidarticle()
    {
      $this->idarticle = $idarticle;
    }

////////////////////////////////////////// AJOUT
    public function ajoutart($titre_article, $resume_article, $lien_article, $contenue_article, $conn)
    {
      $SQL = "INSERT INTO article (titre_article, resume_article, lien_article, contenue_article, valide_article)
              VALUES ('$titre_article', '$resume_article', '$lien_article', '$contenue_article', 1)";
      $conn->query($SQL);
      header('Location:gestionart.php');
    }
////////////////////////////////////////// SUPPRIMER
    public function suppart($idarticle, $conn)
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
              SET race = '$race' , nomche = '$nomche', ageche = '$ageche', tailleche = '$taille', poids = '$poids', sexeche = '$sexe', imageche = '$image'
              WHERE idche ='$idche'";
      $conn -> query($SQL);
      header("Location:gestionche.php");
    }
////////////////////////////////////////// MODIFIER
    public function affche($idche, $conn)
    {
      $SQL = "SELECT race, nomche, ageche, tailleche, poids, sexeche, imageche
      FROM cheval
      WHERE idche ='$idche'";
      $res = $conn -> query($SQL);
      $ligne = $res -> fetch();
      header("Location:traitadmin.php");
    }

  }


?>
