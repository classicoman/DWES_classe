<?php
require_once(getcwd() ."/third_party/nusoap/lib/nusoap.php");

$server = new soap_server();


ini_set('soap.wsdl_cache_enabled', 0);
$namespace = "http://localhost/ws_test/index.php";
$server->wsdl->schemaTargetNamespace = $namespace;
#Especificamos cual sera el nombre de nuestro servicio web
$server->configureWSDL("Funcionalidades");

//$server->register("getProd");

$server->register(
    'getProd',
    array('category' => "xsd:string"),
    array("return" => "xsd:string")
);

function getProd($category) {
    if ($category == "books") {
        return join(",", array(
            "The WordPress Anthology",
            "PHP Master: Write Cutting Edge Code",
            "Build Your Own Website the Right Way"));
	}
	else {
            return "No products listed under that category";
	}
}


#Desplegaremos con $server->service nuestro servicio web
$server->service(file_get_contents("php://input"));

?>
