public function aime($conn,$idc)
{
  $aime = new aime("","","");
  $req = $aime->affaime($conn,$idc);
  $i= 0;
  while ($ligne = $req -> fetch())
  {
    $etoile = $ligne['etoile'];
    $idcav = $ligne['idcav'];
    $idche = $ligne['idche'];
    return $etoile;
    return $idcav;
    return $idche;
    $meschevaux = new aime($idc, $idche, $etoile);
    $meschevaux[$i] = new chevaux(" "," ");
    $i= $i +1;
  }
}
  public function Get_aime()
  {
    return $this->unaime;
  }
