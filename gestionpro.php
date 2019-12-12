<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();
include 'class/pro.class.php';
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
		<h2 class="text-center">Gestion promenade</h2>
	</div>

        <div class="row">

            <div class="col-md-12">


<table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
    				<thead>
							<tr>
								<th>Id</th>
								<th>Date du promenade</th>
								<th>Heure du début de promenade</th>
								<th>Descrition du la promenade</th>
								<th>Heure de fin du promenade</th>
								<th>Lieux de la promenade</th>
								<th>Type de promenade</th>
	                                <th>Modifier</th>
	                                 <th>Supprimer</th>
							</tr>
					</thead>
					<?php
include 'class/bdd.inc.php';
$promenade = new promenade("","","","","","","","");
$req = $promenade->affpro2($conn);
?>
					<tfoot>
						<tr>
							<th>Id</th>
							<th>Date du promenade</th>
							<th>Heure du début de la promenade</th>
							<th>Descrition du promenade</th>
							<th>Heure de fin du promenade</th>
							<th>Lieux de la promenade</th>
							<th>Type de promenade</th>
																<th>Modifier</th>
																 <th>Supprimer</th>
						</tr>
					</tfoot>

					<tbody>
						<?php
						while($ligne = $req -> fetch())
{
  echo"<tr>";
    echo"<td>",$ligne['idpro'],"</td>";
    echo"<td>",$ligne['datepro'],"</td>";
		echo"<td>",$ligne['heuredpro'],"</td>";
		echo"<td>",$ligne['descpro'],"</td>";
    echo"<td>",$ligne['heurefpro'],"</td>";
		echo"<td>",$ligne['lieuxpro'],"</td>";
		echo"<td>",$ligne['nom_type_pro'],"</td>";
    echo"<td> <a href='traitpro.php?modif=modif&idpro=$ligne[idpro]'><img src='images/modadmin.png' alt='edit'name='modifierclasse' width=35 /></a></td>";
    echo"<td> <a href='traitpro.php?sup=sup&idpro=$ligne[idpro]'><img src='images/supadmin.png' alt='supprimerche' title='Supprimer' width=20 name='imgsup' /></a></td>";
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



          <form method="post" action="traitpro.php" id="contact_form" class="p-5 bg-white">

						<div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="race">Date</label>
                <input type="text" name="datepro" id="datepro" class="form-control" placeholder="AAAA-MM-JJ">
              </div>
            </div>
            <div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold" for="nom">Heure du début de promenade</label>
                <input type=text name="hdpro" id="hdpro" class="form-control" placeholder="Donner l'heure du début du promenade xx:xx:xx">
              </div>
            </div>


            <div class="row form-group">
              <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="age">Description du promenade</label>
                <input type="text" name="descpro" id="descpro" class="form-control" placeholder="Donner la description du promenade">
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold" for="taille">Heure de la fin du promenade</label>
                <input type=text name="hfpro" id="heurefpro" class="form-control" placeholder="Donner l'heure de la fin du promenade xx:xx:xx">
              </div>
            </div>

						<div class="row form-group">
              <div class="col-md-12">
                <label class="font-weight-bold" for="taille">Lieux de la promenade</label>
                <input type=text name="lieuxpro" id="lieuxpro" class="form-control" placeholder="Donner le lieux de la promenade">
              </div>
            </div>

						 

            <div class="row form-group">
              <div class="col-md-12">
                <td><input type ="submit" name="btn_ajpro_form" value="Envoyer" class="btn btn-primary pill px-4 py-2">
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
