<h1>Crear variables a partir d'array amb  <i>extract()</i>  </h1>
<?php
//Variable que definim nosaltres
$shape = "round";

$array = array('cover' => "bird", 'shape' => "rectangular");

//Cream les variables $book_cover i  $book_shape  a partir
//  del prefix book i l'array associatiu
extract($array, EXTR_PREFIX_ALL, "book");

//Imprimim variables
echo "Cover: {$book_cover}, Book Shape: {$book_shape}, Shape: {$shape}";
?>


<h1>Crear array a partir de variables amb <i>compact()</i>  </h1>
<?php
$color = "indigo";
$shape = "curvy";
$floppy = "none";
$a = compact("color", "shape", "floppy");

var_dump($a);
 ?>
