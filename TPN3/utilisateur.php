<html>
<form method = "POST" action = "traitement.php">
<fieldset>
    <legend><b>  Ajouter Membre </b></legend>

  <table>
    <tr>
      <td><label><b> Id : </b></label></td>
      <td><input type = "text" name = "id"
          /></td>
    </tr>

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

    <tr>
      <td><label><b> Mail : </b></label></td>
      <td><input type="text" name="mail"/></td>
    </tr>

    <tr>
      <td><label><b> Mot de passe : </b></label></td>
      <td><input type = "text" name = "mdp"
         /></td>
    </tr>

    <tr>
      <td><label><b> Poney favoris : </b></label></td>
      <td><SELECT name="poney" size="1">
    <OPTION>Choisir un Poney
    <OPTION>Michel
    <OPTION>Bob
    <OPTION>Kiki
    <OPTION>Tonnerre
    <OPTION>Flash
    </SELECT></td>
    </tr>



    <tr>	<td><input type ="submit" name="ajouter" value="Ajouter">
    </form>
      <input type ="reset" name="raz" value="RAZ"></td>

    </tr>
  </table>
</fieldset>


</html>
