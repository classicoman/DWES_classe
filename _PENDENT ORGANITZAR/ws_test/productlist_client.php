<?php
require_once(getcwd() ."/third_party/nusoap/lib/nusoap.php");

$client = new nusoap_client("http://localhost/ws_test/productlist.php");

$error = $client->getError();
if ($error) {
    echo "<h2>Constructor error</h2><pre>" . $error . "</pre>";
}



$result = $client->call("getProd", array("category" => "books") );


if ($client->fault) {
    echo "<h2>Fault</h2><pre>";
    print_r($result);
    echo "</pre>";
}
else {
    $error = $client->getError();
    if ($error) {
        echo "<h2>Error</h2><pre>" . $error . "</pre>";
    }
    else {
        echo "<h2>Books</h2><pre>";
        echo $result;
        echo "</pre>";
    }
}


# Per a inspeccionar el contingut
# de la SOAP request i SOAP response messages
# for debug purposes

echo "<h2>Request</h2>";
echo "<pre>" . htmlspecialchars($client->request, ENT_QUOTES) . "</pre>";
echo "<h2>Response</h2>";
echo "<pre>" . htmlspecialchars($client->response, ENT_QUOTES) . "</pre>";

?>
