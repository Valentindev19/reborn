<?php
  class cours
  {
    private $idcours;
    private $datecours;
    private $heuredcours;
    private $desccours;
    private $heurefcours;
    private $id_type_cours;
    private $conn;

    //construct
    public function cours ($idcours, $datecours, $heuredcours, $desccours, $heurefcours, $id_type_cours, $conn)
    {
      $this->idcours = $idcours;
      $this->datecours = $datecours;
      $this->heuredcours = $heuredcours;
      $this->desccours  = $desccours;
      $this->heurefcours = $heurefcours;
      $this->id_type_cours = $id_type_cours;
      $this->conn = $conn;
    }

    //GET
    public function getidcours(){
    Return $this->idcours = $idcours;
    }

    //SET
    public function setidcours(){
    $this->idcours = $idcours;
    }

    //AJOUT
    public function ajoutcours($datecours, $heuredcours, $desccours, $heurefcours, $id_type_cours, $conn){
      $SQL = "INSERT INTO cours (datecours, heuredcours, desccours, heurefcours, validecours, id_type_cours)
              VALUES ('$datecours', '$heuredcours', '$desccours', '$heurefcours',  1, $id_type_cours)";
      $conn->query($SQL);
      header('Location:gestioncours.php');
    }

    //DELETE
    public function suppcours($idcours, $conn){
      $SQL = "UPDATE cours
              SET validecours = 0
              WHERE idcours ='$idcours'";
      $conn -> query($SQL);
    }

    //UPDATE
    public function modifcours($idcours, $datecours, $heuredcours, $desccours, $heurefcours, $id_type_cours, $conn)
    {
      $SQL = "UPDATE cours
              SET datecours = '$datecours', heuredcours = '$heuredcours', desccours = '$desccours', heurefcours = '$heurefcours', id_type_cours = '$id_type_cours'
              WHERE idcours ='$idcours'";
      $conn -> query($SQL);
    }

    // AFFICHER
        public function affcours($idcours, $conn){
          $SQL = "SELECT  date_format(datecours, '%d/%m/%Y') AS datecours, heuredcours, desccours, heurefcours, type_cours.nom_type_cours
          FROM cours, type_cours
          WHERE cours.id_type_cours = type_cours.id_type_cours
          AND idcours ='$idcours'";
          $req = $conn -> query($SQL);
          return $req;
        }

        public function affcours2($conn)
        {
          $SQL = "SELECT  idcours, type_cours.id_type_cours, date_format(datecours, '%d/%m/%Y')  AS datecours, heuredcours, desccours, heurefcours, type_cours.nom_type_cours
          FROM cours, type_cours
          WHERE cours.id_type_cours = type_cours.id_type_cours
          AND validecours = 1";
          $req = $conn -> query($SQL);
          return $req;
        }

        public function affcoursm($idm, $conn)
        {
          $SQL = "SELECT  cours.idcours, type_cours.id_type_cours, date_format(datecours, '%d/%m/%Y')  AS datecours, heuredcours, type_cours.nom_type_cours, desccours, heurefcours
          FROM cours, type_cours, membre, inscriptionc
          WHERE cours.id_type_cours = type_cours.id_type_cours
          AND membre.idmembre = inscriptionc.idmembre
          AND cours.idcours = inscriptionc.idcours
          AND validecours = 1
          AND membre.idmembre = $idm
          AND valide_inscriptionc = 1";
          $req = $conn -> query($SQL);
          return $req;
        }

        public function affcoursm2($idcours, $conn)
        {
          $SQL = "SELECT  date_format(datecours, '%d/%m/%Y')  AS datecours, cours.heuredcours,cours.desccours, membre.nomm, membre.prenomm, membre.telephonem, membre.mailm
          FROM cours, membre, inscriptionc
          WHERE cours.idcours = inscriptionc.idcours
          AND membre.idmembre = inscriptionc.idmembre
          AND validecours = 1
          AND cours.idcours = $idcours
          AND valide_inscriptionc = 1";
          $req = $conn -> query($SQL);
          return $req;
        }

        public function affcoursres($conn,$id)
        {
          $SQL = "SELECT cours.idcours, type_cours.nom_type_cours, date_format(datecours, '%d/%m/%Y')  AS datecours, heuredcours, desccours, heurefcours
          FROM cours, type_cours
          WHERE cours.id_type_cours = type_cours.id_type_cours
          AND cours.id_type_cours = $id
          AND validecours= 1";
          $req = $conn -> query($SQL);
          return $req;
        }

        public function ajoutresc($conn,$id,$idmembre)
        {
          $SQL = "INSERT INTO inscriptionc (idcours,idmembre,valide_inscriptionc)
                  VALUES ('$id','$idmembre','1')";
          $req = $conn -> query($SQL);
          return $req;
        }
      }
?>
