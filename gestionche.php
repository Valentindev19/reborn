<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();
include 'class/cheval.class.php';
include 'class/bdd.inc.php';

// On récupère nos variables de session
if (isset($_SESSION['mailm']) && isset($_SESSION['mdpm']) && isset($_SESSION['id_typem'])) {
?>

<!------ Include the above in your HEAD tag ---------->

<script language="JavaScript" src="https://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script>
$(document).ready(function() {
$('#datatable').dataTable(
	{
		"language": {
				"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
		}
	}
);

 $("[data-toggle=tooltip]").tooltip();

} );
</script>

<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/creative.css">
<body>
<div class="container">
	<div class="row">
		<h2 class="text-center">Gestion Chevaux</h2>
	</div>

        <div class="row">

            <div class="col-md-12">


<table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
    				<thead>
							<tr>
								<th>Race</th>
								<th>Nom cheval</th>
								<th>Age cheval</th>
								<th>Taille cheval</th>
								<th>Poids</th>
								<th>Sexe cheval</th>
								<th>Image cheval</th>
	                                <th>Modifier</th>
	                                 <th>Supprimer</th>
							</tr>
					</thead>
					<?php
include 'class/bdd.inc.php';
include 'class/race.class.php';
$cheval = new cheval("","","","","","","","","");
$req = $cheval->affche2($conn);
$unerace = new race("","","");
$res = $unerace->affrace($conn);
?>
					<tfoot>
            <tr>
              <th>Race</th>
              <th>Nom cheval</th>
              <th>Age cheval</th>
              <th>Taille cheval</th>
              <th>Poids</th>
              <th>Sexe cheval</th>
              <th>Image cheval</th>
                                <th>Modifier</th>
                                 <th>Supprimer</th>
						</tr>
					</tfoot>

					<tbody>
						<?php
	            while ($ligne = $req -> fetch())
	            {
  echo"<tr>";
    echo"<td>",$ligne['librace'],"</td>";
		echo"<td>",$ligne['nomche'],"</td>";
		echo"<td>",$ligne['ageche'],"</td>";
    echo"<td>",$ligne['tailleche'],"</td>";
		echo"<td>",$ligne['poids'],"</td>";
		echo"<td>",$ligne['sexeche'],"</td>";
    echo"<td>",$ligne['imageche'],"</td>";
    echo"<td> <a href='traitche.php?mod=mod&id=$ligne[idche]'><img src='images/modadmin.png' alt='edit' title='modifier' width=35 /></a></td>";
    echo"<td> <a href='traitche.php?sup=sup&id=$ligne[idche]'><img src='images/supadmin.png' alt='supprimerche' title='Supprimer' width=20 /></a></td>";
  echo"</tr>";
}
echo"</center>";

?>

					</tbody>
				</table>
				<a href='admin.php'><button class="boutonret">Retour</button></a>


	</div>
	</div>
</div>
<br>
<br>
  <div class="site-section bg-light">
    <div class="container">
      <div class="row">

        <div class="col-md-12 col-lg-8 mb-5">



          <form method="post" action="traitche.php" id="contact_form" class="p-5 bg-white" enctype="multipart/form-data">

            <div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="race">Race</label>
								<tr>
				<td>
				<select name="idrace">
			<?php
					while ($l = $res -> fetch())
					{
						?>
							<option value="<?php echo $l['idrace']?>"><?php echo $l['librace']?></option>
					 <?php
					}
					?>
				</select>
				</td>
			</tr>
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
                <input type="number" name="taille" id="taille" class="form-control" placeholder="Taille du cheval en cm">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold" for="poids">Poids</label>
                <input type="number" name="poids" id="poids" class="form-control" placeholder="Poids du cheval en Kg">
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
                <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
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
