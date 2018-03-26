<?php
<h1>Testant htmlentities() </h1>
<h4>Converteix < > & i caracters accentuats o puntuats a sobre.</h4>
$missatge = <<< provesEscape
Menor és <
Major és >
Aquí hi ha        espais    en   blanc.
Són allà les druïdes.

süddeutsche zeitung.

provesEscape;

var_dump($missatge);

echo "<br><br>";

var_dump(htmlentities($missatge));
 ?>
