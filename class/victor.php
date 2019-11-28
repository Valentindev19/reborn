<html>
<style>
@import url('https://fonts.googleapis.com/css?family=Niramit');
</style>
<link rel="stylesheet" type="text/css" href="design.css">
<form method = "POST" action = "traitement.php">
<fieldset>
    <legend><b>  Ajouter Cavalier </b></legend>

  <table>
    <tr>
      <td><label><b> Nom : </b></label></td>
      <td><input type = "text" name = "nom"
          /></td>
    </tr>

    <tr>
      <td><label><b> Prenom : </b></label></td>
      <td><input type = "text" name = "prenom"
         /></td>
    </tr>

    <?php
      include 'bdd.inc.php';
      $SQL="SELECT *  FROM galop";
      $req=	$conn -> query($SQL);
    ?>

        <tr>
          <td>
          <select name="idgal">
        <?php
            while ($res = $req -> fetch())
            {
              ?>
                <option value="<?php echo $res['idgal']?>"><?php echo $res['libgal']?></option>
             <?php
            }
            ?>
          </td>
        </tr>

    <tr>
      	<td><input type ="submit" name="ajout" value="Ajouter">
    </form>
      <input type ="reset" name="raz" value="RAZ"></td>

    </tr>
  </table>
</fieldset>

public function aime($idcav, $idche, $e)
{
  $aime = new aime("","","");
  $req = $aime->affaime($conn);
  while ($ligne = $req -> fetch())
  {
    $e = $ligne['etoile'];
    $meschevaux = new aime($idcav, $idche, $e);
    $meschevaux[$i] = new cheval()
  }
}
