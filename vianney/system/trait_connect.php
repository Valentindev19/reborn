<?php

	// Ma clé privée
	$secret = "6Le-9rwUAAAAACH9MOkG37IHM9uqlBpYOw0kkMiJ";
	// Paramètre renvoyé par le recaptcha
	$response = $_POST['g-recaptcha-response'];
	// On récupère l'IP de l'utilisateur
	$remoteip = $_SERVER['REMOTE_ADDR'];

	$api_url = "https://www.google.com/recaptcha/api/siteverify?secret="
	    . $secret
	    . "&response=" . $response
	    . "&remoteip=" . $remoteip ;

	$decode = json_decode(file_get_contents($api_url), true);

	if ($decode['success'] == true || isset($_POST['mail']) || isset($_POST['mdp'])) {
		// C'est un humain
		echo "oui";
	}

	else {
		// C'est un robot ou le code de vérification est incorrecte
		echo "non";
		header('location:..\connexion.php');
	}

?>
