<?php


 // puis création de votre requete  dans l'exemple ci dessous on sélectionne les eleves d'une BDDD

	include 'bdd.inc.php';


$keyword = '%'.$_POST['keyword'].'%';  // récupère la lettre saisie dans le champ texte en provenance de JS


$sql = "SELECT * FROM eleves WHERE nom_eleve LIKE (:keyword) ORDER BY nom_eleve ASC LIMIT 0, 10";  // création de la requete avec sélection des résultats sur la lettre
$req = $conn->prepare($sql);
$req->bindParam(':keyword', $keyword, PDO::PARAM_STR);
$req->execute();
$list = $req->fetchAll();
foreach ($list as $res) {
	//  affichage
	$Listeeleve = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $res['nom_eleve'].' '.$res['nom_eleve']);
	// sélection
    echo '<li onclick="set_item(\''.str_replace("'", "\'", $res['nom_eleve'].' '.$res['nom_eleve']).'\')">'.$Listeeleve.'</li>';
}
?>
