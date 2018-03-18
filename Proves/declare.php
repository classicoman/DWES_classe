<?php
//Tatroe, pàgina 56: sentència "declare"

function imprimir_qualque_cosa() {
  echo "qualque cosa<br>";
}
register_tick_function("imprimir_qualque_cosa");
declare(ticks = 3) {
   for($i = 0; $i < 20; $i++) {
      echo "{$i}<br>";
   }
}

 ?>
