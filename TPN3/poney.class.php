<?php

class poney
{
  private $id;
  private $nom;



    Public function poney($i, $n)
    {
      $this->id = $i;
      $this->nom = $n;
    }

    Public function Get_id()
    {
      return $this->id;
    }
    Public function Get_nom()
    {
      return $this->nom;
    }

     Public function Setid($i)
    {
      $this->id = $i;
    }
    Public function Setnom($n)
    {
      $this->nom = $n;
    }

}



?>
