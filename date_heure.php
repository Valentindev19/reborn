<?php
  function datefrtous($date)
  {
    $j = substr($date,-10,2);
    $m = substr($date,-7,2);
    $a = substr($date,-4,4);
    $dateus = $a.'/'.$m.'/'.$j;
    return $dateus;
  }

  function dateustofr($date)
  {
    $a=substr($date,0,4);
    $m=substr($date,5,2);
    $j=substr($date,8,2);
    $datefr=$j.'/'.$m.'/'.$a;
    return $datefr;
  }
  function heureenh($heure)
  {
    $h=substr($heure,0,2);
    $m=substr($heure,3,2);
    $heureh=$h.'h'.$m;
    return $heureh;
  }
  function dateenage($datenaiss)
  {
    $a2=substr($datenaiss,0,4);
    $datetime2=getdate();
    $a=$datetime2['year'];
    $m=$datetime2['mon'];
    $j=$datetime2['mday'];
    $dateus=$a-$a2;//$a.'-'.$m.'-'.$j;
    //$age=date_diff($datenaiss,$dateus);
    return $dateus;
  }
  function heurehm($heure)
  {
    $heurehm=substr($heure,0,5);
    return $heurehm;
  }
?>
