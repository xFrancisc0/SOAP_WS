<?php

    $url = "http://www.gcomputer.net/webservices/dilbert.asmx?WSDL";
    $client = new SoapClient($url);

    $funciones_array = $client->__getFunctions();

    var_dump($funciones_array);
    echo "\n";
    $funciones_str = "";
    for($i = 0; $i < count($funciones_array); $i++){
        $funciones_strAlfa = explode(" ", $funciones_array[$i])[1];
        $funciones_strBeta = explode("(", $funciones_strAlfa)[0];
        $funciones_str .= $funciones_strBeta;

        if($i != count($funciones_array)-1){
         $funciones_str .= ", ";   
        }
    }

    echo $funciones_str;
?>