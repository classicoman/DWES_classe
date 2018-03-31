
<h2>array_chunks()</h2>
<h4>Array original:</h4>
<?php
//Creo un array a partir d'un rang
$nums = range(1, 7);
print_r($nums);
?>
<h4>Resultant:</h4>
<?php
$rows = array_chunk($nums, 3);
var_dump($rows);
 ?>
