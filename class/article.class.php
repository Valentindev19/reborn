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
      $SQL = "UPDATE article
              SET valide_article = 0
              WHERE idarticle ='$idarticle'";
      $conn -> query($SQL);

    }
////////////////////////////////////////// MODIFIER
    public function modifart($idarticle, $titre_article, $resume_article, $lien_article, $contenue_article, $conn)
    {
      $SQL = "UPDATE article
              SET titre_article = '$titre_article' , resume_article = '$resume_article', lien_article = '$lien_article', contenue_article = '$contenue_article'
              WHERE idarticle ='$idarticle'";
      $conn -> query($SQL);

    }
////////////////////////////////////////// AFFICHER
    public function affart($idarticle, $conn)
    {
      $SQL = "SELECT titre_article, resume_article, lien_article, contenue_article
      FROM article
      WHERE idarticle ='$idarticle'";
      $req = $conn -> query($SQL);
      return $req;

    }
    ////////////////////////////////////////// AFFICHER
        public function affart2($conn)
        {
          $SQL = "SELECT  idarticle, titre_article, resume_article, lien_article, contenue_article
          FROM article
          WHERE valide_article = 1";
          $req = $conn -> query($SQL);
          return $req;

        }


  }


?>
