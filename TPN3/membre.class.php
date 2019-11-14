<?php
  include'utilisateur.class.php';
  class membre extends utilisateur
  {
    private $unponey;

      Public function membre($i, $n, $p, $m, $mdp, $unponey)
      {
        Parent ::__construct ($i, $n, $p, $m, $mdp);
        $this->unponey = $unponey;
      }
      

  }
  ?>
