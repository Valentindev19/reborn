<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();
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
<link rel="stylesheet" type="text/css" href="css/creative.css">

<body>
<div class="container">
	<div class="row">
		<h2 class="text-center">Gestion Membres</h2>
	</div>

        <div class="row">

            <div class="col-md-12">


<table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
    				<thead>
							<tr>
								<th>Id</th>
								<th>Nom</th>
								<th>Prenom</th>
								<th>Genre</th>
								<th>Date Naissance</th>
								<th>Mail</th>
								<th>Téléphone</th>
								<th>Ville</th>
								<th>Modifier</th>
	              <th>Supprimer</th>
							</tr>
					</thead>
					<?php
					include 'class/membre.class.php';
					$membre = new membre("","","","","","","","","","","","","","");
					$req = $membre->affmembre2($conn);
					?>
					<tfoot>
						<tr>
							<th>Id</th>
							<th>Nom</th>
							<th>Prenom</th>
							<th>Genre</th>
							<th>Date Naissance</th>
							<th>Mail</th>
							<th>Téléphone</th>
							<th>Ville</th>
							<th>Modifier</th>
							<th>Supprimer</th>
						</tr>
					</tfoot>

					<tbody>
						<?php
						while($ligne = $req -> fetch())
{
  echo"<tr>";
    echo"<td>",$ligne['idmembre'],"</td>";
    echo"<td>",$ligne['nomm'],"</td>";
		echo"<td>",$ligne['prenomm'],"</td>";
		echo"<td>",$ligne['genrem'],"</td>";
    echo"<td>",$ligne['ddn'],"</td>";
		echo"<td>",$ligne['mailm'],"</td>";
		echo"<td>",$ligne['telephonem'],"</td>";
    echo"<td>",$ligne['ville_nom_reel'],"</td>";
		echo"<td> <a href='traitmembre.php?modm=modm&id=$ligne[idmembre]'><img src='images/modadmin.png' alt='mod' title='modifier' width=35 /></a></td>";
    echo"<td> <a href='traitmembre.php?supm=supm&id=$ligne[idmembre]'><img src='images/supadmin.png' alt='supprimer' title='Supprimer' width=20 /></a></td>";
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
