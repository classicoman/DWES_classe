<?php

########################################################
# 1 Copia el fitxer i l'imprimeix sense retorn de carro
########################################################
//echo readfile("data.txt");


########################################################
#fopen, fread
########################################################
/*
$nom = "data.txt";
$myfile = fopen($nom, "r") or die("No puc obrir el fitxer $nom !");
echo fread($myfile, 10);
fclose($myfile);
*/



########################################################
#fopen, fgets - 1 linia
########################################################

/*
$nom = "data.txt";
$myfile = fopen($nom, "r") or die("No puc obrir el fitxer $nom !");
echo fgets($myfile);
fclose($myfile);

*/


########################################################
#fopen, fgets i IMPRIMEIX totes les linies
########################################################

/*
$nom = "data.txt";
$myfile = fopen($nom, "r") or die("No puc obrir el fitxer $nom !");
while ( !feof($myfile) ) {
	echo fgets($myfile)  . "<br><br>";
}
fclose($myfile);
*/


########################################################
# fopen(nom, "w" / "x"), fwrite
########################################################
/*
$nom 	= "nouu2.txt";
$myfile = fopen($nom, "x") or die("No puc obrir el fitxer $nom !");

$linia = "First Line\n";
fwrite($myfile, $linia);

$linia = "2nd Line\n";
fwrite($myfile, $linia);


fclose($myfile);

echo readfile($nom);
*/

$lines = file('data.txt');

// Pintar una a una les linies del fitxer
/*
foreach ($lines as $line_num => $line) {
    echo "Line #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
}
*/



?>