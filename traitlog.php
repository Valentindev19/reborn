<?php
  if (isset($_POST['g-recaptcha-response']))
  {
    require_once 'ReCaptcha/autoload.php';
    $recaptcha = new \ReCaptcha\ReCaptcha('6Lca1qQUAAAAACiM6U4thRyEp1wP9M1Vlidj418N');
    $resp = $recaptcha->verify($_POST['g-recaptcha-response']);
    if ($resp->isSuccess())
    {
      //header("Location:index.html");
      echo "GG";
    }
    else
    {
      echo "Cocher le captcha !!";
    }

  }
  else
  {
    //header("Location:log.php");
    echo "ton pere";
  }
