<?php
$url = "https://pokeapi.co/api/v2/pokemon";

if( $data_str = file_get_contents($url); ){

    $data_obj = json_decode($data_str, true);
    echo "The count of the json is: ".$data_obj['count'];
}else{
    var_dump($http_response_header);
}
?>