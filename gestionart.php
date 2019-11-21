<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();
include 'class/article.class.php';
include 'class/bdd.inc.php';

// On récupère nos variables de session
if (isset($_SESSION['mailm']) && isset($_SESSION['mdpm']) && isset($_SESSION['id_typem'])) {
?>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="http:s//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script language="JavaScript" src="https://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">
<body>
<div class="container">
	<div class="row">
		<h2 class="text-center">Gestion Articles</h2>
	</div>

        <div class="row">

            <div class="col-md-12">


<table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
    				<thead>
							<tr>
								<th>Id</th>
								<th>Titre</th>
								<th>Résumé</th>
								<th>Lien</th>
								<th>Contenus</th>
								<th>Image</th>
	                                <th>Modifier</th>
	                                 <th>Supprimer</th>
							</tr>
					</thead>
					<?php
include 'class/bdd.inc.php';
$SQL= "SELECT idarticle, titre_article, resume_article, lien_article, contenue_article, image_article
		FROM article
		WHERE valide_article= 1";
$result = $conn -> query($SQL);
?>
					<tfoot>
						<tr>
							<th>Id</th>
							<th>Titre</th>
							<th>Résumé</th>
							<th>Lien</th>
							<th>Contenus</th>
							<th>Image</th>
																<th>Modifier</th>
																 <th>Supprimer</th>
						</tr>
					</tfoot>

					<tbody>
						<?php
						while($ligne = $result -> fetch())
{
  echo"<tr>";
    echo"<td>",$ligne['idarticle'],"</td>";
    echo"<td>",$ligne['titre_article'],"</td>";
		echo"<td>",$ligne['resume_article'],"</td>";
		echo"<td>",$ligne['lien_article'],"</td>";
    echo"<td>",$ligne['contenue_article'],"</td>";
		echo"<td>",$ligne['image_article'],"</td>";
    echo"<td> <a href='traitadmin.php?modif=modif&id=$ligne[idarticle]'><img src='images/modadmin.png' alt='edit'name='modifierclasse' width=35 /></a></td>";
    echo"<td> <a href='traitadmin.php?sup=sup&id=$ligne[idarticle]'><img src='images/supadmin.png' alt='supprimerche' title='Supprimer' width=20 name='imgsup' /></a></td>";
  echo"</tr>";
}
echo"</center>";

?>
					</tbody>
				</table>


	</div>
	</div>
</div>
	<a href ='admin.php'>RETOUR</a>

  <div class="site-section bg-light">
    <div class="container">
      <div class="row">

        <div class="col-md-12 col-lg-8 mb-5">



          <form method="post" action="traitarticle.php" id="contact_form" class="p-5 bg-white">

            <div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="titre">Titre Article</label>
                <input type="text" name="titre" id="titre" class="form-control" placeholder="Titre de l'article">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold" for="nom">Résumé</label>
                <input type=text name="resume" id="resume" class="form-control" placeholder="Résumé de l'article">
              </div>
            </div>


            <div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="age">Lien de l'article</label>
                <input type="text" name="lien" id="lien" class="form-control" placeholder="Lien de l'article">
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold" for="taille">Contenue Article</label>
                <input name="contenue" id="contenue" class="form-control" placeholder="Contenue de l'article">
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

		<script>
		$(document).ready(function() {
    $('#datatable').dataTable();

     $("[data-toggle=tooltip]").tooltip();

} );
    </script>
    </body>
		<?php
		}
		else {
			header ('location: log.php');

		}
		?>
		</html>
