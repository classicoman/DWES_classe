<?php

$a = "O'Reilly ";

$resultat = htmlentities($a, ENT_QUOTES, 'UTF-8');

echo "Me passen $a<br>";
echo "Me queda en: $resultat";

?>