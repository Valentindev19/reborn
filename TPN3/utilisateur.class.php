<?php

class utilisateur
{
  private $idp;
  private $nom;
  private $prenom;
  private $mail;
  private $mdp;


    Public function utilisateur($i, $n, $p, $m, $mdp)
    {
      $this->idp = $i;
      $this->nom = $n;
      $this->prenom = $p;
      $this->mail = $m;
      $this->mdp = $mdp;
    }

    Public function Get_idp()
    {
      return $this->idp;
    }
    Public function Get_nom()
    {
      return $this->nom;
    }
    Public function Get_prenom()
    {
      return $this->prenom;
    }
    Public function Get_mail()
    {
      return $this->mail;
    }
    Public function Get_mdp()
    {
      return $this->mdp;
    }

     Public function Setidp($i)
    {
      $this->idp = $i;
    }
    Public function Setnom($n)
    {
      $this->nom = $n;
    }
    Public function Setprenom($p)
   {
     $this->prenom = $p;
   }
   Public function Setcop($m)
   {
     $this->mail = $m;
   }
   Public function Setville($mdp)
  {
    $this->mdp = $mdp;
  }

}



?>
