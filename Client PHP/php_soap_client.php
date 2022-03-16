<?php
    //PASO 0: En xampp -> apache -> php.ini -> extension=php_soap, remover ;
    //PASO 1: Obtener WSDL URL
    //PASO 2: Mapear el soapclient al wsdl, asignandolo a un objeto $Client
    //PASO 3: METODOS: Utilizar print_r($Client->__getFunctions())   Para obtener los métodos
    //PASO 4: INPUTS: Utilizar print_r($Client->__getTypes())    Para obtener los tipos de datos (inputs)
    //PASO 5: Al ejecutar un método, los input son en formato JSON (Array assoc en php)
    //PASO 6: OUTPUT: Utilizar var_dump($Client->Funcion(["c1"=>"v1", "c2"=>"v2"])) para ver que funcion del objeto retorna la data
    //PASO 7: Utilizar echo $Client->Funcion(["c1"=>"v1", "c2"=>"v2"])->NombreFuncionRetorno;


    $url = "http://localhost:8000/?WSDL";
    $client = new SoapClient($url);

    print_r($client->__getFunctions());
    var_dump($client->prueba("francisco"));

?>