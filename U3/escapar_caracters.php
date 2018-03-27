<html>
  <head>
     <meta charset="ISO-8859-1">
     <style>
        body {
          background-color: #FFFF99;
        }
        div {
          background-color: #FFFFFF;
        }
     </style>
  </head>
  <body>
    <h1>Testant htmlentities() </h1>
    <h4>Converteix < > & i caracters accentuats o puntuats a sobre.</h4>

<?php
$missatge = <<< provesEscape
<h4>Capçalera de nivell 4</h4>
2 és < que 3;  10 és > que 5
Aquí hi ha        espais    en   blanc.
Són allà les <i>"druïdes"</i>.

süddeutsche zeitung.

provesEscape;

echo "<div>";
echo "<h2>echo abans de htmlentities()</h2>";
echo $missatge;
echo "</div><br>";


echo "<div>";
echo "<h2>echo després de htmlentities()</h2>";
echo htmlentities($missatge);
echo "</div><br>";

echo "<div>";
echo "<h2>echo després de htmlspecialchars()</h2>";
echo htmlspecialchars($missatge);
echo "</div><br>";

echo "<div>";
echo "<h2>echo després de strip_tags()</h2>";
echo strip_tags($missatge);
echo "</div><br>";



echo "<div>";
echo "<h2>Var_dump abans de htmlentities()</h2>";
var_dump($missatge);
echo "</div><br>";

echo "<div>";
echo "<h2>Var_dump després de htmlentities()</h2>";
//Veurem els símbols HTML si hem instal·lat xDebug correctament; en cas contrari,
//var_dump() no ens els mostra.
var_dump(htmlentities($missatge));
echo "</div><br>";

echo "<div>";
echo "<h2>Var_dump després de htmlspecialchars()</h2>";
var_dump(htmlspecialchars($missatge));
echo "</div><br><br>";

?>



  </body>
</html>
