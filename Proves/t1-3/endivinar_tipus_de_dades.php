<?php

$var = $_GET['var'];
//$var = true;

$tipus = "desconegut";

if ( is_float($var)) 	$tipus = "float";
if ( is_string($var)) 	$tipus = "string";
if ( is_int($var) )  	$tipus = "sencer";
if ( is_bool($var) ) 	$tipus = "booleà";
if ( is_null($var) ) 	$tipus = "NULL";
	
	

echo "És de tipus $tipus";


?>
