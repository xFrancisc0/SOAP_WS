<?php

//PASO 1: Construir server
//PASO 2: Construir WSDL en http://marin.jb.free.fr/wsdl/
//PASO 3: Colocar a los types de input y output xsd:string
//PASO 4: Colocar WSDL en el argumento de new SoapServer(wsdl)
//PASO 5: Colocar WSDL en el argumento de new SoapClient(wsdl) en el cliente

class ClaseFuncionesServer{
    public function prueba(string $input): string
    {
        return "Prueba en ".$input;
    }
}
    $server = new SoapServer("WSDL_PruebaServer.xml");
    $server->setClass(ClaseFuncionesServer::class);
    $server->handle();

?>