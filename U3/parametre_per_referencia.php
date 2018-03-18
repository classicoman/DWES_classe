<!-- Exemple de pas de paràmetre per Referència

    El que fa és modificar el valor de la variable $a perquè li hem passat
    la variable per referència.
-->

<?php
function doble(&$value)
{
   $value = $value+$value;
}
$a = 3;
doble($a);
echo $a;
?>
