<?php
    $url = "https://pokeapi.co/api/v2/pokemon";

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $data_str = curl_exec($ch);

    if(!curl_errno($ch)){
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if($http_code === 200){
        $data_obj = json_decode($data_str, true);
        echo "The count of the json is: ".$data_obj['count'];
    }else{
        echo $http_code;
    }
    }else{
        echo curl_error($ch);
    }
    curl_close($ch);
?>