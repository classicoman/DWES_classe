<?php

$metaTags = get_meta_tags('http://www.eldiario.es/');
echo "Web page made by {$metaTags['author']}";

var_dump($metaTags);
?>
