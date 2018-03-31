
<h1>Eliminar un boci d'un array</h1>
<h4>Abans:<h4>
<?php
$lletres=range('a','z');
var_dump($lletres);
?>

<h4>Després:<h4>
<?php
$retallat = array_splice($lletres,7,9);
var_dump($lletres);
 ?>

 <h1>Substituir un bocí d'un array per un altre</h1>
 <h4>Abans:<h4>
 <?php
  $numeros = range(1,20);
  var_dump($numeros);
  ?>
  <h4>Després:<h4>
<?php
  $altres = array(10001,10002,10003,10004,10005);
  $resultant = array_splice($numeros, 10, 5, $altres);
  var_dump($numeros);
  ?>
