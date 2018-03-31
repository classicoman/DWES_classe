<?php
//Declarar una variable
$taula1 = array();

//Declarar i crear array indexat
$alumnes = array('Pepe','Maria','Luisa','Tolo');
//També el podriem crear així:
/*
$alumnes[0] = 'Pepe';
$alumnes[1] = 'Maria';
$alumnes[2] = 'Luisa';
$alumnes[3] = 'Tolo';
 */

//Un altre array indexat
$notes = array(8.5,7,10,5);

//Declarar i crear array associatiu
$qualificacions = array(
  'Pepe' => 8.5,
  'Maria' => 7,
  'Luisa' => 10,
  'Tolo' => 5
);

//També el podriem crear aixi:
/*
$qualificacions['Pepe'] = 8.5;
$qualificacions['Maria'] = 7;
$qualificacions['Luisa'] = 10;
$qualificacions['Tolo'] = 5;
 */

var_dump($alumnes);
var_dump($notes);
var_dump($qualificacions);

//Interpolar element d'array
echo "<br>Pepe ha sacado un {$qualificacions['Pepe']}<br>";
echo "<br>Pepe ha sacado un {$notes[0]}<br>";

//Valor no definit provoca un NOTICE
echo "Lola ha sacado un {$qualificacions['Lola']}";
echo "Lola ha sacado un {$notes[12]}";
 ?>
