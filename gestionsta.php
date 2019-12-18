<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();
include 'class/stage.class.php';
include 'class/typestage.class.php';
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
		<h2 class="text-center">Gestion Stages</h2>
	</div>

        <div class="row">

            <div class="col-md-12">


<table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
    				<thead>
							<tr>
								<th>Type Stage</th>
								<th>Date Début</th>
								<th>Date Fin</th>
								<th>Description</th>
								<th>Heure Début</th>
								<th>Heure Fin</th>
								<th>Repas</th>
	                                <th>Modifier</th>
	                                 <th>Supprimer</th>
																	 <th>Voir les Membres</th>
							</tr>
					</thead>
					<?php


$stage = new stage("","","","","","","","","","");
$req = $stage->affstage($conn);
$stage = new typestage("","","");
$res = $stage->afftype($conn);
?>
					<tfoot>
            <tr>
							<th>Type Stage</th>
							<th>Date Début</th>
							<th>Date Fin</th>
							<th>Description</th>
							<th>Heure Début</th>
							<th>Heure Fin</th>
							<th>Repas</th>
																<th>Modifier</th>
																 <th>Supprimer</th>
																 <th>Voir les Membres</th>
						</tr>
					</tfoot>

					<tbody>
						<?php
	            while ($ligne = $req -> fetch())
	            {
  echo"<tr>";
    echo"<td>",$ligne['typestage'],"</td>";
		echo"<td>",$ligne['dated'],"</td>";
		echo"<td>",$ligne['datef'],"</td>";
    echo"<td>",$ligne['descstage'],"</td>";
		echo"<td>",$ligne['heuredstage'],"</td>";
		echo"<td>",$ligne['heurefstage'],"</td>";
    echo"<td>",$ligne['repas'],"</td>";
    echo"<td> <a href='traitstage.php?mod=mod&id=$ligne[idstage]'><img src='images/modadmin.png' alt='edit' title='modifier' width=35 /></a></td>";
    echo"<td> <a href='traitstage.php?sup=sup&id=$ligne[idstage]'><img src='images/supadmin.png' alt='supprimerche' title='Supprimer' width=20 /></a></td>";
		echo"<td> <a href='membrestage.php?id=$ligne[idstage]'><img src='images/modifmembre.png' alt='voirmembre' title='Voir' width=20 /></a></td>";
  echo"</tr>";
}
echo"</center>";

?>

					</tbody>
				</table>
				<a href='gestionactivité.php'><button class="boutonret">Retour</button></a>


	</div>
	</div>
</div>
<br>
<br>
  <div class="site-section bg-light">
    <div class="container">
      <div class="row">

        <div class="col-md-12 col-lg-8 mb-5">



          <form method="post" action="traitstage.php" id="stage_form" class="p-5 bg-white" enctype="multipart/form-data">

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
								<div class="row form-group">
									<div class="col-md-12 mb-3 mb-md-0">
										<label class="font-weight-bold" for="race">Date Début</label>
										<input type="text" name="dated" id="dated" class="form-control" placeholder="AAAA-MM-JJ">
									</div>
								</div>
								<div class="row form-group">
									<div class="col-md-12">
										<label class="font-weight-bold" for="nom">Date Fin</label>
										<input type=text name="heured" id="heured" class="form-control" placeholder="AAAA-MM-JJ">
									</div>
								</div>


								<div class="row form-group">
									<div class="col-md-12 mb-3 mb-md-0">
										<label class="font-weight-bold" for="age">Description du Stage</label>
										<input type="text" name="descstage" id="descstage" class="form-control" placeholder="Donner la description du stage">
									</div>
								</div>

								<div class="row form-group">
									<div class="col-md-12">
										<label class="font-weight-bold" for="taille">Date Fin</label>
										<input type=text name="datef" id="datef" class="form-control" placeholder="AAAA-MM-JJ">
									</div>
								</div>
								<div class="row form-group">
									<div class="col-md-12">
										<label class="font-weight-bold" for="nom">Heure Fin</label>
										<input type=text name="heuref" id="heuref" class="form-control" placeholder="Donner l'heure de fin du cours xx:xx:xx">
									</div>
								</div>
								<div class="row form-group">
									<div class="col-md-12">
										<label class="font-weight-bold" for="nom">Repas</label>
										<input type=text name="repas" id="repas" class="form-control" placeholder="Oui ou Non">
									</div>
								</div>

								<div class="row form-group">
									<div class="col-md-12">
										<td><input type ="submit" name="btn_ajstage_form" value="Envoyer" class="btn btn-primary pill px-4 py-2">
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
