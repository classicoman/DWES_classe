<?php
/*
The printf() function looks outrageously complex to people who aren’t C programmers. Once you get used to it, though, you’ll find it a powerful formatting tool. Here
are some examples:
*/

echo "<b>Un número float amb 2 decimals:</b><br>";
printf('%.2f', 27.452);

echo "<br><br>";

echo "<b>Sortida en decimal i hexadecimal:</b><br>";
printf('The hex value of %d is %x', 214, 214);

echo "<br><br>";

echo "<b>Omplint de zeros per l'esquerra un número decimal:</b><br>";
// El 0 després de % significa que ompliré els espais amb blancs
// El 3 significa que el número ha d'ocupar en total 3 digits, aixi
// que omplo de 0 per l'esquerra.
printf('Bond. James Bond. %03d', 7);

echo "<br><br>";

echo "<b>Donant un format a una data:</b><br>";
$month = 12;
$year = 1999;
$day = 31;
printf('%02d/%02d/%04d', $month, $day, $year);

echo "<br><br>";

echo "<b>Un percentatge:</b><br>";
printf('%.2f%% Complete', 2.1);

echo "<br><br>";

echo "<b>Padding a floating-point number</b><br>";
//El 6 significa que el número ha d'ocupar 5 caracters
//El .3 significa que ocupa 3 decimals
printf('You\'ve spent $%6.3f so far', 4.1);

echo "<br><br>";

/*The sprintf() function takes the same arguments as printf() but returns the built-up
string instead of printing it. This lets you save the string in a variable for later use: */
$month = 9;
$year = 1931;
$day = 5;
$date = sprintf("%02d/%02d/%04d", $month, $day, $year);
// now we can interpolate $date wherever we need a date
echo "<b>Data en format anglosaxó:</b> {$date}<br>";
$date = sprintf("%02d/%02d/%04d", $day, $month, $year);
echo "<b>Data en format llatí:</b> {$date}<br>";
$date = sprintf("%02d%02d%04d", $day, $month, $year);
echo "<b>Sense barres:</b> {$date}<br>";
$date = sprintf("%d/%d/%d", $day, $month, $year);
echo "<b>Sense zeros en el mes o dia:</b> {$date}<br>";




 ?>
