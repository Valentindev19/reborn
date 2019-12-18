<?php
  include 'class/bdd.inc.php';
  include 'class/pro.class.php';
  include 'class/type_pro.class.php';
  include 'class/membre.class.php';

  if (isset($_POST['btn_ajpro_form']))
  {

    if ($_POST['datepro'] != '' && $_POST['hdpro'] != '' && $_POST['descpro'] != '' && $_POST['hfpro'] != '' && $_POST['id_type_pro'] != 0)
    {
      $date_pro = $_POST['datepro'];
      $hd_pro = $_POST['hdpro'];
      $desc_pro = $_POST['descpro'];
      $hf_pro = $_POST['hfpro'];
      $lieux_pro = $_POST['lieuxpro'];
      $id_type_pro = $_POST['id_type_pro'];
      echo $id_type_pro;

      $promenade = new promenade("","","","","","","","");
      $promenade->ajoutpro($date_pro, $hd_pro, $desc_pro, $hf_pro, $lieux_pro, $id_type_pro, $conn);

    }
    else
    {
      header('Location:gestionpro.php');
    }
  }
  if (isset($_GET['sup']))
  {
    $idpro = $_GET['idpro'];
    $promenade = new promenade("","","","","","","","");
    $promenade->supppro($idpro,$conn);
    header('Location:gestionpro.php');
  }
  if (isset($_GET['supm']))
  {
    $idpro = $_GET['idpro'];
    $promenade = new promenade("","","","","","","","");
    $promenade->suppprom($idpro,$conn);
    header('Location:affprom.php');
  }
  if (isset($_GET['res']))
  {
    $idpro = $_GET['id'];
    session_start ();
    $mailm = $_SESSION['mailm'];
    $mdpm = $_SESSION['mdpm'];
    $membre = new membre("","","","","","","","","","","","","","");
    $req = $membre->affidm($mailm, $mdpm, $conn);
    $ligne = $req->fetch();
    $idmembre = $ligne['idmembre'];
    $promenade = new promenade("","","","","","","","");
    $req= $promenade->ajoutresp($conn,$idpro,$idmembre);
    header('Location:affpro.php');
  }
  if (isset($_GET['modif']))
  {
    $idpro = $_GET['idpro'];
    $promenade = new promenade("","","","","","","","");
    $req = $promenade->affpro($idpro, $conn);
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



            <form method="post" action="traitpro.php" id="modif_form" class="p-5 bg-white">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">

                  <input type="hidden" name="idpro" id="idpro" class="form-control" placeholder="Race du cheval" value="<?php echo $_GET['idpro']; ?>">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="Date_pro">Date de la promenade</label>
                  <input type="text" name="datepro" id="datepro" class="form-control"  value="<?php echo $ligne['datepro']; ?>">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="Heure_début_pro">Heure de début de la promenade</label>
                  <input type=text name="heuredpro" id="heuredpro" class="form-control" value="<?php echo $ligne['heuredpro']; ?>">
                </div>
              </div>


              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="Description_pro">Description de la promenade</label>
                  <input type="texte" name="descpro" id="descpro" class="form-control" value="<?php echo $ligne['descpro']; ?>">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="Heure_fin_pro">Heure de fin de la promenade</label>
                  <input type="text" name="heurefpro" id="heurefpro" class="form-control" value="<?php echo $ligne['heurefpro']; ?>">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="Heure_fin_pro">Lieux de la promenade</label>
                  <input type="text" name="lieuxpro" id="lieuxpro" class="form-control" value="<?php echo $ligne['lieuxpro']; ?>">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
  								<label class="font-weight-bold" for="type_promenade">Type promenade</label>
  								<tr>
  									<td>
  										<select name="id_type_pro">
  											<?php
  												$untype = new type_pro("","","");
  												$req = $untype->afftype_pro($conn);
  												while ($l = $req -> fetch())
  												{
  											?>
  											<option value="<?php echo $l['id_type_pro']?>"><?php echo $l['nom_type_pro']?></option>
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
    <?php
    }

    if (isset($_POST['btn_modif_form']))
    {
      $idpro = $_POST['idpro'];
      $date_pro = $_POST['datepro'];
      $hd_pro = $_POST['heuredpro'];
      $desc_pro = $_POST['descpro'];
      $hf_pro = $_POST['heurefpro'];
      $lieux_pro = $_POST['lieuxpro'];
      $id_type_pro = $_POST['id_type_pro'];
      $promenade = new promenade("","","","","","","","");
      $promenade->modifpro($idpro,$date_pro, $hd_pro, $desc_pro, $hf_pro, $lieux_pro, $id_type_pro, $conn);

      header('Location:gestionpro.php');
    }

?>
