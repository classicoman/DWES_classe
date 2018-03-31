<?php
$names = array("Cath", "Angela", "Brad", "Mira");
$logins = array(
'njt' => 415,
'kt' => 492,
'rl' => 652,
'jht' => 441,
'jj' => 441,
'wt' => 402,
'hut' => 309,
);
?>

<h3>sort()</h3>
<?php
$a = $logins;
sort($a);
var_dump($a);
?>

<h3>asort()</h3>
<?php
$a = $logins;
asort($a);
var_dump($a);
?>

<h3>ksort()</h3>
<?php
$a = $logins;
ksort($a);
var_dump($a);
?>
