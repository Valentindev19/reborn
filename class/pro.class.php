<?php
  class promenade
  {
    private $idpro;
    private $datepro;
    private $heuredpro;
    private $descpro;
    private $heurefpro;
    private $lieuxpro;
    private $id_type_pro;
    private $conn;

    //construct
    public function promenade ($idpro, $datepro, $heuredpro, $descpro, $heurefpro, $lieuxpro, $id_type_pro, $conn)
    {
      $this->idpro = $idpro;
      $this->datepro = $datepro;
      $this->heuredpro = $heuredpro;
      $this->descpro  = $descpro;
      $this->heurefpro = $heurefpro;
      $this->lieuxpro = $lieuxpro;
      $this->id_type_pro = $id_type_pro;
      $this->conn = $conn;
    }

    //GET
    public function getidpro(){
    return $this->idpro = $idpro;
    }

    //SET
    public function setidpro(){
    $this->idpro = $idpro;
    }

    //AJOUT
    public function ajoutpro($datepro, $heuredpro, $descpro, $heurefpro, $lieux_pro, $id_type_pro, $conn){
      $SQL = "INSERT INTO promenade (datepro, heuredpro, descpro, heurefpro, lieuxpro, validepro, id_type_pro)
              VALUES ('$datepro', '$heuredpro', '$descpro', '$heurefpro', '$lieux_pro', 1, $id_type_pro)";
      $conn->query($SQL);
      header('Location:gestionpro.php');
    }

    //DELETE
    public function supppro($idpro, $conn){
      $SQL = "UPDATE promenade
              SET validepro = 0
              WHERE idpro ='$idpro'";
      $conn -> query($SQL);
    }

    public function suppprom($idpro, $conn){
      $SQL = "UPDATE inscriptionp
              SET valide_inscriptionp = 0
              WHERE idpro ='$idpro'";
      $conn -> query($SQL);
    }

    //UPDATE
    public function modifpro($idpro, $datepro, $heuredpro, $descpro, $heurefpro, $lieuxpro, $id_type_pro, $conn)
    {
      $SQL = "UPDATE promenade
              SET datepro = '$datepro', heuredpro = '$heuredpro', descpro = '$descpro', heurefpro = '$heurefpro', lieuxpro = '$lieuxpro', id_type_pro = '$id_type_pro'
              WHERE idpro ='$idpro'";
      $conn -> query($SQL);
    }

    // AFFICHER
        public function affpro($idpro, $conn){
          $SQL = "SELECT datepro, heuredpro, descpro, type_pro.nom_type_pro, heurefpro, lieuxpro
          FROM promenade, type_pro
          WHERE promenade.id_type_pro = type_pro.id_type_pro
          AND idpro ='$idpro'";
          $req = $conn -> query($SQL);
          return $req;
        }

        public function affpro2($conn)
        {
          $SQL = "SELECT  idpro, type_pro.id_type_pro, datepro, heuredpro, type_pro.nom_type_pro, descpro, heurefpro, lieuxpro
          FROM promenade, type_pro
          WHERE promenade.id_type_pro = type_pro.id_type_pro
          AND validepro = 1";
          $req = $conn -> query($SQL);
          return $req;
        }

        public function affprom($idm, $conn)
        {
          $SQL = "SELECT  promenade.idpro, type_pro.id_type_pro, datepro, heuredpro, type_pro.nom_type_pro, descpro, heurefpro, lieuxpro
          FROM promenade, type_pro, membre, inscriptionp
          WHERE promenade.id_type_pro = type_pro.id_type_pro
          AND membre.idmembre = inscriptionp.idmembre
          AND promenade.idpro = inscriptionp.idpro
          AND validepro = 1
          AND membre.idmembre = $idm
          AND valide_inscriptionp = 1";
          $req = $conn -> query($SQL);
          return $req;
        }

        public function affpromm($idp, $conn)
        {
          $SQL = "SELECT  promenade.datepro, promenade.lieuxpro, membre.nomm, membre.prenomm, membre.telephonem, membre.mailm
          FROM promenade, membre, inscriptionp
          WHERE promenade.idpro = inscriptionp.idpro
          AND membre.idmembre = inscriptionp.idmembre
          AND validepro = 1
          AND promenade.idpro = $idp
          AND valide_inscriptionp = 1";
          $req = $conn -> query($SQL);
          return $req;
        }

        public function affprores($conn,$id)
        {
          $SQL = "SELECT promenade.idpro, type_pro.nom_type_pro, descpro, heuredpro, heurefpro, datepro, lieuxpro
          FROM promenade, type_pro
          WHERE promenade.id_type_pro = type_pro.id_type_pro
          AND promenade.id_type_pro = $id
          AND validepro= 1";
          $req = $conn -> query($SQL);
          return $req;
        }

        public function ajoutresp($conn,$id,$idmembre)
        {
          $SQL = "INSERT INTO inscriptionp (idpro,idmembre,valide_inscriptionp)
                  VALUES ('$id','$idmembre','1')";
          $req = $conn -> query($SQL);
          return $req;
        }

      }
?>
