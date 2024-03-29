<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();

//include
include 'class/cours.class.php';
include 'class/bdd.inc.php';
include 'date_heure.php';

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
		<h2 class="text-center">Gestion Cours</h2>
	</div>

        <div class="row">

            <div class="col-md-12">


<table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
    				<thead>
							<tr>
								<th>Id</th>
								<th>Date du Cours</th>
								<th>Heure du début de Cours</th>
								<th>Descrition du Cours</th>
								<th>Heure de fin du Cours</th>
								<th>Type Cours</th>
	                                <th>Modifier</th>
	                                 <th>Supprimer</th>
																	 <th>Voir les membres</th>
							</tr>
					</thead>
					<?php

$cours = new cours("","","","","","","");
$req = $cours->affcours2($conn);
//var_dump($req);
?>
					<tfoot>
						<tr>
							<th>Id</th>
							<th>Date du Cours</th>
							<th>Heure du début de Cours</th>
							<th>Descrition du Cours</th>
							<th>Heure de fin du Cours</th>
							<th>Type Cours</th>
																<th>Modifier</th>
																 <th>Supprimer</th>
																 <th>Voir les membres</th>
						</tr>
					</tfoot>

					<tbody>
						<?php
						while($ligne = $req -> fetch())


{
  echo"<tr>";
    echo"<td>",$ligne['idcours'],"</td>";
    echo"<td>",$ligne['datecours'],"</td>";
		echo"<td>",heurehm($ligne['heuredcours']),"</td>";
		echo"<td>",$ligne['desccours'],"</td>";
    echo"<td>",heurehm($ligne['heurefcours']),"</td>";
		echo"<td>",$ligne['nom_type_cours'],"</td>";
    echo"<td> <a href='traitcours.php?modif=modif&id=$ligne[idcours]'><img src='images/modadmin.png' alt='edit'name='modifierclasse' width=35 /></a></td>";
    echo"<td> <a href='traitcours.php?sup=sup&id=$ligne[idcours]'><img src='images/supadmin.png' alt='supprimerche' title='Supprimer' width=20 name='imgsup' /></a></td>";
			echo"<td> <a href='reservcours.php?idcours=$ligne[idcours]'><img src='images/modifmembre.png' alt='edit'name='affmembre' width=35 /></a></td>";
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


  <div class="site-section bg-light">
    <div class="container">
      <div class="row">

        <div class="col-md-12 col-lg-8 mb-5">



          <form method="post" action="traitcours.php" id="contact_form" class="p-5 bg-white">

						<div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="race">Date</label>
                <input type="text" name="date" id="date" class="form-control" placeholder="AAAA/MM/JJ">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold" for="nom">Heure de début du cours</label>
                <input type=text name="hdcours" id="hdcours" class="form-control" placeholder="Saisir l'heure du début du cours hh:mm:ss">
              </div>
            </div>


            <div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="age">Description du cours</label>
                <input type="text" name="desccours" id="desccours" class="form-control" placeholder="Saisir la description du cours">
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold" for="taille">Heure de fin du cours</label>
                <input type=text name="hfcours" id="heurefcours" class="form-control" placeholder="Saisir l'heure de la fin du cours hh:mm:ss">
              </div>
            </div>

						<div class="row form-group">
              <div class="col-md-12">
								<label class="font-weight-bold" for="type_promenade">Type de cours</label>
								<tr>
									<td>
										<select name="id_type_cours">
											<?php
												include 'class/type_cours.class.php';
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

            <div class="row form-group">
              <div class="col-md-12">
                <td><input type ="submit" name="btn_ajcours_form" value="Envoyer" class="btn btn-primary pill px-4 py-2">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>




    </body>
		<?php
		}
		else {
			header ('location: log.php');

		}
		?>
		</html>
