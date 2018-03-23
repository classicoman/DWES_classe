<?php
/*
 *  Toni Amengual
 *  març 2018
 */

// No funciona \t  ni  \n  ni  \r perquè en HTML són "invisibles".
// Només funcionarien en un FITXER .txt, per exemple
echo "hola\tpepe \n";
echo "com estas\r";
echo "adeu";

//OK
echo "<br>En Amazon.com, el mòbil costa 50$";

//fail
//echo "La variable se diu $var";

//OK
echo "<br>La variable se diu \$var";

echo "<br>Una backslash és això \\";

//Fail
//Tampoc escapa { }  ni  [ ]
echo"<br>unes claus son \{ i \}, uns corxets son \[ i \]";

//OK
//Tampoc escapa { }  ni  [ ]
echo"<br>unes claus son { i }, uns corxets son [ i ]";

 ?>
