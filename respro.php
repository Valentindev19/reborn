<?php


  $id=$_GET['id'];
  session_start ();
  include 'class/pro.class.php';
  include 'class/type_pro.class.php';
  include 'class/bdd.inc.php';
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
  		<h2 class="text-center">S'incrire à une promenade</h2>
  	</div>

          <div class="row">

              <div class="col-md-12">


  <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
      				<thead>
  							<tr>
                  <th>Date de la promenade</th>
    							<th>Heure de la début de la promenade</th>
    							<th>Descrition de la promenade</th>
    							<th>Heure de fin de la promenade</th>
    							<th>Lieux de la promenade</th>
    							<th>Type de promenade</th>
  	                                <th>Réserver</th>

  							</tr>
  					</thead>
  					<?php


  $promenade = new promenade("","","","","","","","");
  $req = $promenade->affprores($conn,$id);
  ?>
  					<tfoot>
              <tr>
                <th>Date de la promenade</th>
                <th>Heure de la début de la promenade</th>
                <th>Descrition de la promenade</th>
                <th>Heure de fin de la promenade</th>
                <th>Lieux de la promenade</th>
                <th>Type de promenade</th>
                                  <th>Réserver</th>

              </tr>
  					</tfoot>

  					<tbody>
  						<?php
  	            while ($ligne = $req -> fetch())
  	            {
    echo"<tr>";
      echo"<td>",$ligne['dated'],"</td>";
  		echo"<td>",$ligne['heuredpro'],"</td>";
  		echo"<td>",$ligne['descpro'],"</td>";
      echo"<td>",$ligne['heurefpro'],"</td>";
  		echo"<td>",$ligne['lieuxpro'],"</td>";
  		echo"<td>",$ligne['nom_type_pro'],"</td>";
      echo"<td> <a href='traitpro.php?res=res&id=$ligne[idpro]'><img src='images/modadmin.png' alt='edit' title='reserver' width=35 /></a></td>";
    echo"</tr>";
  }
  echo"</center>";

  ?>

  					</tbody>
  				</table>
  				<a href='promenade.php'><button class="boutonret">Retour</button></a>


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
