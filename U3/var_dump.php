<h1>var_dump() versus  print_r()</h1>
<h4>Podeu comprovar que var_dump() dóna més info a
  l'usuari que no pas print_r()
  <p>#1 print_r<br>
  #2 var_dump</p>
</h4>


<h2>Arrays:</h2>
<?php
$a = array('name' => 'Fred', 'age' => 35, 'wife' => 'Wilma');

echo "#1 ";
print_r($a);
echo "<br>";
echo "#2 ";
var_dump($a);
  echo "<br>";
 ?>

 <h2>Object:</h2>
 <?php
 class Persona {
 var $name = 'nat';
 var $whatever = false;
 // ...
 }
 $a = new Persona;

 echo "#1 ";
 print_r($a);
 echo "<br>";
 echo "#2 ";
 var_dump($a);
 echo "<br>";
  ?>

  <h2>Float:</h2>
  <?php
  $a = 3.1415027;

  echo "#1 ";
  print_r($a);
  echo "<br>";
  echo "#2 ";
  var_dump($a);
  echo "<br>";
   ?>

   <h2>Boolean:</h2>
   <?php
   $a = true;
   $b = false;

   echo "#1 ";
   print_r($a);
   print_r($b);
   echo "<br>";
   echo "#2 ";
   var_dump($a);
   var_dump($b);
   echo "<br>";
    ?>

    <h2>Not Defined</h2>
    <?php
    //$a = 3.1415027;

    echo "#1 ";
    print_r($notdefinedvar);
   echo "<br>";
    echo "#2 ";
    var_dump($notdefinedvar);
    echo "<br>";
     ?>

     <h2>NULL:</h2>
     <?php
     $a = NULL;

     echo "#1 ";
     print_r($a);
     echo "<br>";
     echo "#2 ";
     var_dump($a);
     echo "<br>";
  ?>
