<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();
include 'class/cours.class.php';
include 'class/membre.class.php';
include 'class/bdd.inc.php';
include 'date_heure.php';


// On récupère nos variables de session
if (isset($_SESSION['mailm']) && isset($_SESSION['mdpm'])) {
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
		<h2 class="text-center">Vos cours</h2>
	</div>

        <div class="row">

            <div class="col-md-12">


<table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
    				<thead>
							<tr>
								<th>Date du cours</th>
								<th>Heure du début de cours</th>
								<th>Descrition du la cours</th>
								<th>Heure de fin du cours</th>
								<th>Type de cours</th>
	                                 <th>Supprimer</th>
							</tr>
					</thead>
          <tbody>

					<?php
          $mail = $_SESSION['mailm'];
          $mdp = $_SESSION['mdpm'];
          $membre = new membre("","","","","","","","","","","","","","");
          $req = $membre->affidm($mail, $mdp, $conn);
          $ligne = $req -> fetch();
          $idm = $ligne['idmembre'];
          $cours = new cours("","","","","","","","");
          $req = $cours->affcoursm($idm, $conn);

						while($ligne = $req -> fetch())
{
  echo"<tr>";
    echo"<td>",$ligne['datecours'],"</td>";
		echo"<td>",heurehm($ligne['heuredcours']),"</td>";
		echo"<td>",$ligne['desccours'],"</td>";
    echo"<td>",heurehm($ligne['heurefcours']),"</td>";
		echo"<td>",$ligne['nom_type_cours'],"</td>";
    echo"<td> <a href='traitcours.php?supm=supm&idcours=$ligne[idcours]'><img src='images/supadmin.png' alt='supprimerche' title='Supprimer' width=20 name='imgsup' /></a></td>";
  echo"</tr>";
}
echo"</center>";

?>
					</tbody>
				</table>
				<a href='gestionactivitém.php'><button class="boutonret">Retour</button></a>


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
