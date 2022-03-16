<?php

// function defination to convert array to xml
function array_to_xml( $data, &$xml_data ) {
    foreach( $data as $key => $value ) {
        if( is_array($value) ) {
            if( is_numeric($key) ){
                $key = 'item'.$key; //dealing with <0/>..<n/> issues
            }
            $subnode = $xml_data->addChild($key);
            array_to_xml($value, $subnode);
        } else {
            $xml_data->addChild("$key",htmlspecialchars("$value"));
        }
     }
}

 $xml = new SimpleXMLElement("data.xml", 0, true);

    echo "\n\n\n\n\n";
    echo "DATA LEIDA DE XML como associative array\n";
    echo "=========================================?===\n";
    var_dump($xml);
    echo "=================\n";
    echo "DATA LEIDA DE XML como json\n";
    echo "=========================================?===\n";
    var_dump(json_encode($xml));
    echo "=================\n";



    echo "DATA RECORRIDA DE XML\n";
    echo "=================\n";
 foreach ($xml->book as $book){
    echo $book->author." escribio: ".$book->title;
    echo "\n";
 }

 $xml->asXML("output.xml");

?>