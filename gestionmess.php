<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();

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
		<h2 class="text-center">Gestion Message</h2>
	</div>

        <div class="row">

            <div class="col-md-12">


<table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
    				<thead>
							<tr>
								<th>Id</th>
								<th>Nom</th>
								<th>Mail</th>
								<th>Téléphone</th>
								<th>Message</th>
	                                 <th>Supprimer</th>
							</tr>
					</thead>
					<?php
include 'class/bdd.inc.php';
include 'class/contact.class.php';
$contact = new contact("","","","","","","");
$req = $contact->affcon($conn);
	?>
					<tfoot>
						<tr>
							<th>Id</th>
							<th>Nom</th>
							<th>Mail</th>
							<th>Téléphone</th>
							<th>Message</th>
																 <th>Supprimer</th>
						</tr>
					</tfoot>

					<tbody>
						<?php
						while($ligne = $req -> fetch())
{
  echo"<tr>";
    echo"<td>",$ligne['idcontact'],"</td>";
    echo"<td>",$ligne['nomprecontact'],"</td>";
		echo"<td>",$ligne['mailcontact'],"</td>";
		echo"<td>",$ligne['phonecontact'],"</td>";
    echo"<td>",$ligne['messagecontact'],"</td>";
    echo"<td> <a href='supcontact.php?id=$ligne[idcontact]'><img src='images/supadmin.png' alt='edit'name='supclasse' width=35 /></a></td>";

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
