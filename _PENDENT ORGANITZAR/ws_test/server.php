<?php
    #Incluiremos la libreria nusoap.
    require_once(getcwd() ."/third_party/nusoap/lib/nusoap.php");
    #Instanciaremos la clase soap_server que proviene de la librería nusoap.
    $server = new soap_server();
    $namespace = "http://localhost/ws_test/index.php";
    $server->wsdl->schemaTargetNamespace = $namespace;
    #Especificamos cual sera el nombre de nuestro servicio web
    $server->configureWSDL("Funcionalidades");
    #Registraremos cuales serán las funcionalidades de nuestro servicio web
    #register contiene muchos parámetros mas pero solo nos enfocaremos en los principales:
    #register(accion, parametros_entrada, parametros_salida)
    $server->register(
        'saludar',
        array('nom' => "xsd:string"),
        array("return" => "xsd:string")
    );
    $server->register(
        'valida_rut',
        array('rut' => "xsd:string"),
        array("return" => "xsd:string")
    );
    #Declararemos las funciones (acciones soap) que utilizara nuestro servicio web
    function saludar($nom){
        return "Bon dia,  " . $nom . "<br>";
    }
    function valida_rut($rut)
    {
        $rut = preg_replace('/[^k0-9]/i', '', $rut);
        $dv  = substr($rut, -1);
        $numero = substr($rut, 0, strlen($rut)-1);
        $i = 2;
        $suma = 0;
        foreach(array_reverse(str_split($numero)) as $v)
        {
            if($i==8)
                $i = 2;
            $suma += $v * $i;
            ++$i;
        }
        $dvr = 11 - ($suma % 11);
        if($dvr == 11)
            $dvr = 0;
        if($dvr == 10)
            $dvr = 'K';
        if($dvr == strtoupper($dv))
            return 'valido';
        else
            return 'invalido';
    }
    #Desplegaremos con $server->service nuestro servicio web
    $server->service(file_get_contents("php://input"));
?>
