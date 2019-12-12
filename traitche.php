<?php
  include 'class/bdd.inc.php';
  include 'class/cheval.class.php';
  include 'class/race.class.php';

  if (isset($_POST['btn_ajche_form']))
  {
    if(isset($_POST['idrace']) && isset($_POST['nom']))
    {
      $num_rand = rand(1,10000000);
      include 'upload.php';
      if(isset($_POST['race']))
      {
        $race = $_POST['idrace'];
      }
      else
      {
        $race = 'race inconnue';
      }
      $nom = $_POST['nom'];
      if(isset($_POST['age']))
      {
        $race = $_POST['age'];
      }
      else
      {
        $age = 'age inconnu';
      }
      if(isset($_POST['taille']))
      {
        $taille = $_POST['taille'];
      }
      else
      {
        $taille = 'taille inconnu';
      }
      if(isset($_POST['poids']))
      {
        $poids = $_POST['poids'];
      }
      else
      {
        $poids = 'poids inconnu';
      }
      if(isset($_POST['sexe']))
      {
        $sexe = $_POST['sexe'];
      }
      else
      {
        $sexe = 'sexe inconnu';
      }
      $img = $_FILES['fileToUpload']['name'].$num_rand;
      if(isset($_POST['fileToUpload']))
      {
        $img = $_FILES['fileToUpload']['name'].$num_rand;
      }
      else
      {
        $img = 'image inconnue';
      }

      $cheval = new cheval("","","","","","","","","");
      $cheval->ajoutche($race,$nom,$age,$taille,$poids,$sexe,$img,$conn);
    }
    else
    {
      echo "a";
      //header('Location:gestionche.php');
    }
  }
  if (isset($_GET['sup']))
  {
    $idche = $_GET['id'];
    $cheval = new cheval("","","","","","","","","");
    $cheval->suppche($idche,$conn);

  }
  if (isset($_GET['mod']))
  {
    $idche = $_GET['id'];
    $cheval = new cheval("","","","","","","","","");
    $res = $cheval->affche($idche, $conn);
    $unerace = new race("","","");
    $req = $unerace->affrace($conn);
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
    <link rel="stylesheet" type="text/css" href="css/creative.css">
    <body>
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">

          <div class="col-md-12 col-lg-8 mb-5">



            <form method="post" action="traitche.php" id="modif_form" class="p-5 bg-white" enctype="multipart/form-data">

              <input type="hidden" name="idche" id="idche" class="form-control" value="<?php echo $_GET['id']; ?>">
              <br>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="race">Race</label>
                  <tr>
  				<td>
  				<select name="idrace">
  			<?php
  					while ($l = $req -> fetch())
  					{
  						?>
  							<option value="<?php echo $l['idrace']?>"><?php echo $l['librace']?></option>
  					 <?php
  					}
  					?>
  				</select>
  				</td>
  			</tr>
        <?php
          while ($ligne = $res -> fetch())
          {
        ?>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="nom">Nom cheval</label>
                  <input type=text name="nom" id="nom" class="form-control" value="<?php echo $ligne['nomche']; ?>">
                </div>
              </div>


              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="age">Age</label>
                  <input type="number" name="age" id="age" class="form-control" value="<?php echo $ligne['ageche']; ?>">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="taille">Taille</label>
                  <input name="taille" id="taille" class="form-control" value="<?php echo $ligne['tailleche']; ?>">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="poids">Poids</label>
                  <input name="poids" id="poids" class="form-control" value="<?php echo $ligne['poids']; ?>">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="sexe">Sexe cheval</label>
                  <input name="sexe" id="sexe" class="form-control" value="<?php echo $ligne['sexeche']; ?>">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="img">Image</label>
                  <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
                  <input type="hidden" name="fileToUpload2" id="fileToUpload2" value='<?php echo $ligne['imageche']; ?>'>
                </div>
              </div>
              <?php
                }
              ?>

              <div class="row form-group">
                <div class="col-md-12">
                  <td><input type="submit" name="btn_modif_form" value="Envoyer" class="btn btn-primary pill px-4 py-2">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <a href='gestionche.php'><button class="boutonret">Retour</button></a>

    <script>
		$(document).ready(function() {
    $('#datatable').dataTable();

     $("[data-toggle=tooltip]").tooltip();

} );
    </script>
    </body>
    </html>
    <?php
    }
    if (isset($_POST['btn_modif_form']))
    {
      $num_rand = rand(1,10000000);
      include 'upload.php';
      $idche = $_POST['idche'];
      $race = $_POST['idrace'];
      $nomche = $_POST['nom'];
      $ageche = $_POST['age'];
      $taille = $_POST['taille'];
      $poids = $_POST['poids'];
      $sexe = $_POST['sexe'];
      if ( $_FILES['fileToUpload']['name'].$num_rand == $num_rand)
      {
        $image = $_POST['fileToUpload2'];
      }
      else
      {
        $image = $_FILES['fileToUpload']['name'].$num_rand;
      }
      $cheval = new cheval("","","","","","","","","");
      $cheval-> modifche($idche, $race, $nomche, $ageche, $taille, $poids, $sexe, $image, $conn);
    }

?>
