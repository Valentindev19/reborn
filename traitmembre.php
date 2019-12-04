<?php
  include 'class/bdd.inc.php';
  include 'class/membre.class.php';

  if (isset($_GET['supm']))
  {
    $idm = $_GET['id'];
    $membre = new membre("","","","","","","","","","","","","","");
    $membre->suppmem($idm,$conn);
    header('Location:gestionm.php');
  }
  if (isset($_GET['modm']))
  {
    $idmembre = $_GET['id'];
    $membre = new membre("","","","","","","","","","","","","","");
    $req = $membre->affmembre1($idmembre, $conn);
    $ligne = $req->fetch();


    ?>
    <html>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="http:s//code.jquery.com/jquery-1.11.1.min.js"></script>

    <script language="JavaScript" src="https://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script language="JavaScript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script language="JavaScript" src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">
    <body>
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">

          <div class="col-md-12 col-lg-8 mb-5">



            <form method="post" action="traitmembre.php" id="modif_form" class="p-5 bg-white">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">

                  <input type="hidden" name="id" id="id" class="form-control" placeholder="Race du cheval" value="<?php echo $_GET['id']; ?>">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="race">Nom</label>
                  <input type="text" name="nom" id="nom" class="form-control"  value="<?php echo $ligne['nomm']; ?>">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="nom">Prenom</label>
                  <input type=text name="prenom" id="prenom" class="form-control" value="<?php echo $ligne['prenomm']; ?>">
                </div>
              </div>


              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="age">Genre</label>
                  <input type="texte" name="genre" id="genre" class="form-control" value="<?php echo $ligne['genrem']; ?>">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="age">Date de Naissance</label>
                  <input type="texte" name="ddn" id="ddn" class="form-control" value="<?php echo $ligne['ddn']; ?>">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="age">Mail</label>
                  <input type="texte" name="mail" id="mail" class="form-control" value="<?php echo $ligne['mailm']; ?>">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="age">Téléphone</label>
                  <input type="texte" name="tel" id="tel" class="form-control" value="<?php echo $ligne['telephonem']; ?>">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="age">Ville</label>
                  <input type="texte" name="ville" id="ville" class="form-control" value="<?php echo $ligne['ville_nom_reel']; ?>">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="age">Addresse</label>
                  <input type="texte" name="add" id="add" class="form-control" value="<?php echo $ligne['ruem']; ?>">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="age">Complément d'adresse</label>
                  <input type="texte" name="ca" id="ca" class="form-control" value="<?php echo $ligne['compm']; ?>">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="age">Mot de Passe</label>
                  <input type="password" name="mdpm" id="mdpm" class="form-control" value="<?php echo $ligne['mdpm']; ?>">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <td><input type ="submit" name="btn_modif_form" value="Envoyer" class="btn btn-primary pill px-4 py-2">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php
  }
    if (isset($_POST['btn_modif_form']))
    {
      $idmembre = $_POST['id'];
      $nomm = $_POST['nom'];
      $prenomm = $_POST['prenom'];
      $genrem = $_POST['genre'];
      $ddn = $_POST['ddn'];
      $mailm = $_POST['mail'];
      $telephonem = $_POST['tel'];
      $ruem = $_POST['add'];
      $comp = $_POST['compm'];
      $ruem = $_POST['add'];
      $mdpm = $_POST['mdpm'];
      $membre = new membre("","","","","","","","","","","","","","");
      $membre->modifmembre($idmembre,$nomm, $prenomm, $genrem, $ddn, $mailm,$telephonem, $ruem, $comp, $mdpm, $conn);

      header('Location:gestionm.php');
    }
?>
