<?php
  include 'class/bdd.inc.php';
  include 'class/stage.class.php';
  include 'class/typestage.class.php';

  if (isset($_POST['btn_ajstage_form']))
  {

    if ($_POST['dated'] != '' && $_POST['datef'] != '' && $_POST['heured'] != '' && $_POST['heuref'] != '' && $_POST['descstage'] != '' && $_POST['repas'] != '')
    {
      $dated = $_POST['dated'];
      $datef = $_POST['datef'];
      $heured = $_POST['heured'];
      $heuref = $_POST['heuref'];
      $des = $_POST['descstage'];
      $repas = $_POST['repas'];
      $idtype_stage = $_POST['idtype_stage'];


      $stage = new stage("","","","","","","","","","");
      $req = $stage->ajoutstage($idtype_stage, $dated, $datef, $des, $heured, $heuref, $repas, $conn);
      header('Location:gestionsta.php');
    }
    else
    {
      header('Location:gestionsta.php');
    }
  }
  if (isset($_GET['sup']))
  {
    $idstage = $_GET['id'];
    $stage = new stage("","","","","","","","","","");
    $req= $stage->suppstage($idstage,$conn);
    header('Location:gestionsta.php');
  }
  if (isset($_GET['res']))
  {
    $idstage = $_GET['id'];
    $stage = new stage("","","","","","","","","","");
  $req= $stage->suppstage($idstage,$conn);
    header('Location:affstage.php');
  }
  if (isset($_GET['mod']))
  {
    $idstage = $_GET['id'];
    $stage = new stage("","","","","","","","","","");
    $res = $stage->affstage1($idstage,$conn);
    $ligne = $res->fetch();
    $stage = new typestage("","","");
    $res = $stage->afftype($conn);


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



            <form method="post" action="traitstage.php" id="modif_form" class="p-5 bg-white">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="race">Type de Stage </label>
  								<tr>
  				<td>
  				<select name="idtype_stage">
  			<?php
  					while ($l = $res -> fetch())
  					{
  						?>
  							<option value="<?php echo $l['idtype_stage']?>"><?php echo $l['typestage']?></option>
  					 <?php
  					}
  					?>
  				</select>
  				</td>
  			</tr>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">

                  <input type="hidden" name="idstage" id="idstage" class="form-control" placeholder="Type stage" value="<?php echo $_GET['id']; ?>">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="race">Date Début</label>
                  <input type="text" name="dated" id="dated" class="form-control" placeholder="AAAA-MM-JJ" value="<?php echo $ligne['datedstage']; ?>">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="nom">Heure Début</label>
                  <input type=text name="heured" id="heured" class="form-control" placeholder="Donner l'heure du début du stage xx:xx:xx" value="<?php echo $ligne['heuredstage']; ?>">
                </div>
              </div>


              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="age">Description du Stage</label>
                  <input type="text" name="descstage" id="descstage" class="form-control" placeholder="Donner la description du stage"value="<?php echo $ligne['descstage']; ?>">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="taille">Date Fin</label>
                  <input type=text name="datef" id="datef" class="form-control" placeholder="AAAA-MM-JJ"value="<?php echo $ligne['datefstage']; ?>">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="nom">Heure Fin</label>
                  <input type=text name="heuref" id="heuref" class="form-control" placeholder="Donner l'heure de fin du cours xx:xx:xx"value="<?php echo $ligne['heurefstage']; ?>">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="nom">Repas</label>
                  <input type=text name="repas" id="repas" class="form-control" placeholder="Oui ou Non"value="<?php echo $ligne['repas']; ?>">
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
      $dated = $_POST['dated'];
      $datef = $_POST['datef'];
      $heured = $_POST['heured'];
      $heuref = $_POST['heuref'];
      $des = $_POST['descstage'];
      $repas = $_POST['repas'];
      $idtype_stage = $_POST['idtype_stage'];
      $idstage = $_POST['idstage'];


      $stage = new stage("","","","","","","","","","");
      $stage->modifstage($idstage,$idtype_stage, $dated, $datef, $des, $heured, $heuref, $repas, $conn);

      header('Location:gestionsta.php');
    }

?>
