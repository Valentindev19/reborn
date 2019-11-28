<!DOCTYPE html>
<html lang="en">

<head>
    <?php
      include '../class/bdd.inc.php';
    ?>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Chevaux admin - Les Feniers</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/svgs/all.svgs" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                    <tr>
                        <th>
                            <label class="au-checkbox">
                                <input type="checkbox">
                                <span class="au-checkmark"></span>
                            </label>
                        </th>
                        <th>Date cour</th>
                        <th>Heure début cour</th>
                        <th>Heure fin cour</th>
                        <th>description</th>
                    </tr>
                </thead>

                <tbody>
                  <?php
                    $o= new cheval("","","","","","","","","","","");
                    $req=$o->ttsleschevaux($con);
                    foreach($req as $uncheval){
                      echo"
                      <tr class='tr-shadow'>
                          <td>
                              <label class='au-checkbox'>
                                  <input type='checkbox'>
                                  <span class='au-checkmark'></span>
                              </label>
                          </td>
                          <td>"; echo $uncheval['nomche']; echo "</td>
                          <td>
                              "; echo $uncheval['raceche']; echo "
                          </td>
                          <td>"; echo $uncheval['robeche']; echo"</td>
                          <td class='desc'>"; echo $uncheval['descche']; echo"</td>
                          <td>"; echo $uncheval['datenaissche']; echo"</td>
                          <td>"; echo $uncheval['datevacc']; echo"</td>
                          <td>
                              <span class='status--process'>"; echo $uncheval['tailleche']; echo"</span>
                          </td>
                          <td>"; echo $uncheval['prixche']; echo"</td>
                          <td>
                              <div class='table-data-feature'>

                                  <button class='item' data-toggle='tooltip' data-placement='top' title='Modifier'>
                                      <i class='zmdi zmdi-edit'></i>
                                  </button>
                                  <button class='item' data-toggle='tooltip' data-placement='top' title='Supprimer'>
                                      <i class='zmdi zmdi-delete'></i>
                                  </button>

                              </div>
                          </td>
                      </tr>";
                    }


                    ?>

                </tbody>
            </table>
        </div>

</body>

</html>
<!-- end document-->
