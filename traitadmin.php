<?php
  include 'class/bdd.inc.php';
  include 'class/cheval.class.php';

  if (isset($_POST['btn_ajche_form']))
  {
    if(isset($_POST['race']) && isset($_POST['nom']) && isset($_POST['age']) && isset($_POST['taille']) && isset($_POST['poids']) && isset($_POST['sexe']) && isset($_POST['img']))
    {
      $race = $_POST['race'];
      $nom = $_POST['nom'];
      $age = $_POST['age'];
      $taille = $_POST['taille'];
      $poids = $_POST['poids'];
      $sexe = $_POST['sexe'];
      $img = $_POST['img'];

      $cheval = new cheval("","","","","","","","","");
      $cheval->ajoutche($race,$nom,$age,$taille,$poids,$sexe,$img,$conn);
    }
    else
    {
      header('Location:gestionche.php');
    }
  }
  elseif (isset($_GET['sup']))
  {
    $idche = $_GET['id'];
    $cheval = new cheval("","","","","","","","","");
    $cheval->suppche($idche,$conn);
  }
  elseif (isset($_GET['modif']))
  {
    $cheval = new cheval("","","","","","","","","");
    $cheval->affche($idche, $conn);
    ?>
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">

          <div class="col-md-12 col-lg-8 mb-5">



            <form method="post" action="traitadmin.php" id="contact_form" class="p-5 bg-white">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="race">Race</label>
                  <input type="text" name="race" id="race" class="form-control" placeholder="Race du cheval">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="nom">Nom cheval</label>
                  <input type=text name="nom" id="nom" class="form-control" placeholder="Nom du cheval">
                </div>
              </div>


              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="age">Age</label>
                  <input type="number" name="age" id="age" class="form-control" placeholder="Age du cheval">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="taille">Taille</label>
                  <input name="taille" id="taille" class="form-control" placeholder="Taille du cheval en cm">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="poids">Poids</label>
                  <input name="poids" id="poids" class="form-control" placeholder="Poids du cheval en Kg">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="sexe">Sexe cheval</label>
                  <input name="sexe" id="sexe" class="form-control" placeholder="Sexe du cheval">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="img">Image</label>
                  <input type="file" name="img" id="img" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <td><input type ="submit" name="btn_ajche_form" value="Envoyer" class="btn btn-primary pill px-4 py-2">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php
    if (condition)
    {
      $cheval->modifche($idche ,$race, $nomche, $ageche, $taille, $poids, $sexe, $image, $conn);
    }
  }

?>
