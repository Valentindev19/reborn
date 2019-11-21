<?php
  include 'class/bdd.inc.php';
  include 'class/article.class.php';

  if (isset($_POST['btn_ajche_form']))
  {
    if(isset($_POST['titre']) && isset($_POST['resume']) && isset($_POST['lien']) && isset($_POST['contenue']) && isset($_POST['img']))
    {
      $titre_article = $_POST['titre'];
      $resume_article = $_POST['resume'];
      $lien_article = $_POST['lien'];
      $contenue_article = $_POST['contenue'];


      $article = new article("","","","","","");
      $article->ajoutart($titre_article, $resume_article, $lien_article, $contenue_article, $conn);
    }
    else
    {
      header('Location:gestionart.php');
    }
  }
  if (isset($_GET['sup']))
  {
    $id = $_GET['id'];
    $article = new article("","","","","","");
    $article->suppart($idarticle,$conn);
  }
  if (isset($_GET['modif']))
  {

    $article = new article("","","","","","");
    $article->affarticle($idarticle, $conn);
    ?>
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">

          <div class="col-md-12 col-lg-8 mb-5">



            <form method="post" action="traitadmin.php" id="modif_form" class="p-5 bg-white">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="race">idarticle</label>
                  <input type="hidden" name="idche" id="idche" class="form-control" placeholder="Race du cheval" value="<?php echo $GET_['idarticle']; ?>">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="race">Titre</label>
                  <input type="text" name="titre" id="titre" class="form-control" placeholder="Race du cheval" value="<?php echo $ligne['titre_article']; ?>">
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
                  <input type="file" name="img" id="img" class="form-control" value="<?php echo $ligne['imageche']; ?>">
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
    if (isset($_GET['btn_modif_form']) && isset($_POST['race']) && isset($_POST['nom']) && isset($_POST['age']) && isset($_POST['taille']) && isset($_POST['poids']) && isset($_POST['sexe']) &&
    isset($_POST['img']))
    {
      $idche = $_POST['idche'];
      $race = $_POST['race'];
      $nom = $_POST['nom'];
      $age = $_POST['age'];
      $taille = $_POST['taille'];
      $poids = $_POST['poids'];
      $sexe = $_POST['sexe'];
      $img = $_POST['img'];
      $cheval->modifche($idche ,$race, $nomche, $ageche, $taille, $poids, $sexe, $image, $conn);
    }

?>
