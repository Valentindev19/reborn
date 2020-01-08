<?php
  include 'class/bdd.inc.php';
  include 'class/cours.class.php';
  include 'class/type_cours.class.php';
  include 'class/membre.class.php';
  include 'date_heure.php';

  if (isset($_POST['btn_ajcours_form']))
  {

    if ($_POST['date'] != '' && $_POST['hdcours'] != '' && $_POST['desccours'] != '' && $_POST['hfcours'] != ''&& $_POST['id_type_cours'] != 0)
    {
      $date_cours = $_POST['date'];
      $hd_cours = $_POST['hdcours'];
      $desc_cours = $_POST['desccours'];
      $hf_cours = $_POST['hfcours'];
      $id_type_cours = $_POST['id_type_cours'];
      echo $id_type_cours;

      $cours = new cours("","","","","","","");
      $cours->ajoutcours($date_cours, $hd_cours, $desc_cours, $hf_cours, $id_type_cours, $conn);

    }
    else
    {
      header('Location:gestioncours.php');
    }
  }
  if (isset($_GET['sup']))
  {
    $idcours = $_GET['id'];
    $cours = new cours("","","","","","","");
    $cours->suppcours($idcours,$conn);
    header('Location:gestioncours.php');
  }
  if (isset($_GET['res']))
  {
    $idcours = $_GET['id'];
    session_start ();
    $mailm = $_SESSION['mailm'];
    $mdpm = $_SESSION['mdpm'];
    $membre = new membre("","","","","","","","","","","","","","");
    $req = $membre->affidm($mailm, $mdpm, $conn);
    $ligne = $req->fetch();
    $idmembre = $ligne['idmembre'];
    $cours = new cours("","","","","","","");
    $req= $cours->ajoutresc($conn,$idcours,$idmembre);
    header('Location:affcoursm.php');
  }
  if (isset($_GET['modif']))
  {
    $idcours = $_GET['id'];
    $cours = new cours("","","","","","","");
    $req = $cours->affcours($idcours, $conn);
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



            <form method="post" action="traitcours.php" id="modif_form" class="p-5 bg-white">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">

                  <input type="hidden" name="idcours" id="idcours" class="form-control" placeholder="Race du cheval" value="<?php echo $_GET['id']; ?>">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="Date_cours">Date du Cours</label>
                  <input type="text" name="date" id="date" class="form-control"  value="<?php echo $ligne['datecours']; ?>">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="Heure_début_cours">Heure de début du cours</label>
                  <input type=text name="heuredcours" id="heuredcours" class="form-control" value="<?php echo $ligne['heuredcours']; ?>">
                </div>
              </div>


              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="Description_cours">Description du cours</label>
                  <input type="texte" name="desccours" id="desccours" class="form-control" value="<?php echo $ligne['desccours']; ?>">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="Heure_fin_cours">Heure de fin du cours</label>
                  <input type="text" name="heurefcours" id="heurefcours" class="form-control" value="<?php echo $ligne['heurefcours']; ?>">
                </div>
              </div>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
  								<label class="font-weight-bold" for="type_cours">Type cours</label>
  								<tr>
  									<td>
  										<select name="id_type_cours">
  											<?php
  												$untype = new type_cours("","","");
  												$req = $untype->afftype_cours($conn);
  												while ($l = $req -> fetch())
  												{
  											?>
  											<option value="<?php echo $l['id_type_cours']?>"><?php echo $l['nom_type_cours']?></option>
  					 						<?php
  												}
  											?>
  										</select>
  									</td>
  								</tr>
                </div>
              </div>
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
      $idcours = $_POST['idcours'];
      $date_cours = datefrtous($_POST['date']);
      $hd_cours = $_POST['heuredcours'];
      $desc_cours = $_POST['desccours'];
      $hf_cours = $_POST['heurefcours'];
      $id_type_cours = $_POST['id_type_cours'];
      $cours = new cours("","","","","","","","");
      $cours->modifcours($idcours,$date_cours, $hd_cours, $desc_cours, $hf_cours, $id_type_cours, $conn);

      header('Location:gestioncours.php');
    }

?>
