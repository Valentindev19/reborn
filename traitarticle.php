<?php
  include 'class/bdd.inc.php';
  include 'class/article.class.php';
  include 'class/bdd.inc.php';

  if (isset($_POST['btn_ajart_form']))
  {
    if(isset($_POST['titre']) && isset($_POST['resume']) && isset($_POST['contenue']))
    {
      $num_rand = rand(1,10000000);
      include 'upload.php';
      $titre_article = $_POST['titre'];
      $resume_article = $_POST['resume'];
      if (isset($_POST['lien']))
      {
        $lien_article = $_POST['lien'];
      }
      else
      {
        $lien_article = "";
      }
      $contenue_article = $_POST['contenue'];
      $img_art = $_FILES['fileToUpload']['name'].$num_rand;


      $article = new article("","","","","","","");
      $article->ajoutart($titre_article, $resume_article, $lien_article, $contenue_article, $img_art, $conn);
      $idarticle = $conn->lastinsertid();

      $totalfiles = count($_FILES['file']['name']);

      // Looping over all files
      for($i=0;$i<$totalfiles;$i++){
      $filename = $_FILES['file']['name'][$i];

     // Upload files and store in database
     if(move_uploaded_file($_FILES["file"]["tmp_name"][$i],'images/upload/'.$filename)){
     		// Image db insert sql
     		$SQL = "INSERT into files(file_name,uploaded_on,status,idarticle) values('$filename',now(),1,$idarticle)";
         $conn->query($SQL);
     	}
       else{
     		echo 'Error in uploading file - '.$_FILES['file']['name'][$i].'<br/>';
     	}

      }

      header('Location:gestionart.php');

    }
    else
    {
      header('Location:gestionart.php');
    }
  }
  if (isset($_GET['sup']))
  {
    $idarticle = $_GET['id'];
    $article = new article("","","","","","","");
    $article->suppart($idarticle,$conn);
    header('Location:gestionart.php');
  }
  if (isset($_GET['modif']))
  {
    $idarticle = $_GET['id'];
    $article = new article("","","","","","","");
    $req = $article->affart($idarticle, $conn);
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



            <form method="post" action="traitarticle.php" id="modif_form" class="p-5 bg-white" enctype="multipart/form-data">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">

                  <input type="hidden" name="idart" id="idart" class="form-control" placeholder="Race du cheval" value="<?php echo $_GET['id']; ?>">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="race">Titre</label>
                  <input type="text" name="titre" id="titre" class="form-control"  value="<?php echo $ligne['titre_article']; ?>">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="nom">Résumé</label>
                  <input type=text name="resume" id="resume" class="form-control" value="<?php echo $ligne['resume_article']; ?>">
                </div>
              </div>


              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="age">Lien</label>
                  <input type="texte" name="lien" id="lien" class="form-control" value="<?php echo $ligne['lien_article']; ?>">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="taille">Contenue</label>
                  <input name="contenue" id="contenue" class="form-control" value="<?php echo $ligne['contenue_article']; ?>">
                </div>
              </div>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="img">Image</label>
                  <input type="file" name="fileToUpload" id="img" class="form-control">
                  <input type="hidden" name="fileToUpload2" id="fileToUpload2" class="form-control" value="<?php echo $ligne['image_article']; ?>">
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
      $num_rand = rand(1,10000000);
      include 'upload.php';
      $idarticle = $_POST['idart'];
      $titre_article = $_POST['titre'];
      $resume_article = $_POST['resume'];
      $lien_article = $_POST['lien'];
      $contenue_article = $_POST['contenue'];
      // Si l'image est remplie affectation normal sinon prend la valeur de la bdd
      if ($_POST['fileToUpload'] != '')
      {
        $img_art = $_FILES['fileToUpload']['name'].$num_rand;
      }
      else
      {
        $img_art = $_POST['fileToUpload2'];
      }
      $article = new article("","","","","","","");
      $article->modifart($idarticle,$titre_article, $resume_article, $lien_article, $contenue_article, $img_art, $conn);

      header('Location:gestionart.php');
    }

?>
