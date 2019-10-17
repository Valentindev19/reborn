<?php

  if(!$captcha){
    echo '<h2>Please check the the captcha form.</h2>';
    exit;
  }
  $secretKey = "6LfvfKQUAAAAAMC0150SDxQfTqVNXBf-eYTGQQN2";
  $ip = $_SERVER['REMOTE_ADDR'];

  // post request to server
  $url = 'https://www.google.com/recaptcha/api/siteverify';
  $data = array('secret' => $secretKey, 'response' => $captcha);

  $options = array(
    'http' => array(
      'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
      'method'  => 'POST',
      'content' => http_build_query($data)
    )
  );
  $context  = stream_context_create($options);
  $response = file_get_contents($url, false, $context);
  $responseKeys = json_decode($response,true);
  header('Content-type: application/json');
  if ($responseKeys["success"])
  {
    if (isset($_POST["form_conex"])) {
      $nom;$prenom;$dn;$genre;$email;$phone;$cp;$vile;$adr;$comp;$mdp;$captcha;
      $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
      $prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_STRING);
      $dn = filter_input(INPUT_POST, 'dn', FILTER_SANITIZE_STRING);
      $genre = filter_input(INPUT_POST, 'genre', FILTER_SANITIZE_STRING);
      $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
      $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
      $cp = filter_input(INPUT_POST, 'cp', FILTER_SANITIZE_STRING);
      $ville = filter_input(INPUT_POST, 'ville', FILTER_SANITIZE_STRING);
      $adr = filter_input(INPUT_POST, 'adr', FILTER_SANITIZE_STRING);
      $comp = filter_input(INPUT_POST, 'comp', FILTER_SANITIZE_STRING);
      $mdp = filter_input(INPUT_POST, 'mdp', FILTER_SANITIZE_STRING);
      $captcha = filter_input(INPUT_POST, 'token', FILTER_SANITIZE_STRING);

      // TRAITEMENT INSCIPTION POUR VALENTIN (C'est l'inscription au site)!

    }
  }
  if($responseKeys["success"]) {
    echo json_encode(array('success' => 'true'));
  } else {
    echo json_encode(array('success' => 'false'));
  }

  if (isset($_POST["form_log"])) {
    if (isset($_POST["mail"] && $_POST["mdp"]))
    {
      // METTRE LA VERIFICATION SI LES INFO DE LOG SONT BONNES
    }
  }

?>
