<?php

$f = fopen("agenda.txt","r");
$text = "43000000";
$trobat = false;

$linies = array();

# 1a linia
$linia = fgets($f);

while ( !feof($f) )  {
  $linia = fgets($f);
  # Busca el DNI
  if ( ($pos = strpos($linia, $text)) !== false ) {
    #Localitzada el telèfon dins la linia
    $dni = substr($linia, 0, 8);
    # Tabuladors que separen
    $sep1 = strpos($linia, "\t");
    $sep2 = strpos($linia, "\t", $sep1+1 );
    $nom = substr($linia, $sep1+1, $sep2-$sep1 );

    $telf = substr($linia,$sep2+1);
    echo "Dni: $dni" . "<br>Nom: $nom" . "<br>Telf.: $telf";
  }
}

if ($trobat)  echo $linia;

fclose($f);
 ?>
