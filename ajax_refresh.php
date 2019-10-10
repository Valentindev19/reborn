<?php


 // puis création de votre requete  dans l'exemple ci dessous on sélectionne les eleves d'une BDDD

	include 'bdd.inc.php';


$keyword = '%'.$_POST['keyword'].'%';  // récupère la lettre saisie dans le champ texte en provenance de JS


$sql = "SELECT ville_code_postal, ville_nom_reel  FROM villes WHERE ville_code_postal LIKE (:keyword) ORDER BY ville_nom_reel ASC LIMIT 0, 10";  // création de la requete avec sélection des résultats sur la lettre
$req = $conn->prepare($sql);
$req->bindParam(':keyword', $keyword, PDO::PARAM_STR);
$req->execute();
$list = $req->fetchAll();
foreach ($list as $res) {
	//  affichage
	$Listeville = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $res['ville_code_postal'].' '.$res['ville_nom_reel']);
	// sélection
    echo '<li onclick="set_item(\''.str_replace("'", "\'", $res['ville_code_postal'].' '.$res['ville_nom_reel']).'\')">'.$Listeville.'</li>';
}
?>
