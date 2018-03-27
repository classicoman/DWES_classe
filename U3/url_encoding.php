
<h2>RFC 3986 encoding and decoding</h2>


<h4>rawurlencode()</h4>
<?php
$name = "Programming PHP";
$output = rawurlencode($name);
echo "http://localhost/{$output}";

//Resultat: http://localhost/Programming%20PHP
?>

<h4>rawurldecode()</h4>
<?php
//The rawurldecode() function decodes URL-encoded strings:
$encoded = 'Programming%20PHP';
echo rawurldecode($encoded);

//Resultat: Programming PHP
?>


<br><br><h2>Query-string encoding</h2>
<?php
$baseUrl = 'http://www.google.com/q=';
$query = 'PHP sessions -cookies';
$url = $baseUrl . urlencode($query);
echo $url;

//Resultat: http://www.google.com/q=PHP+sessions+-cookies
?>
