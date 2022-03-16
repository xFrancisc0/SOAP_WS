<?php

//=====================
//CLASES
class Clase{
    public $valor1;
    public $valor2;
    public $valor3;

    public function getValor1(){
        return $this->valor1;
    }
}

$miClase = new Clase();
$miClase->valor1 = "a";
$miClase->valor2 = "b";
$miClase->valor3 = "c";

//echo $miClase->valor3;
//echo $miClase->getValor1();
//======================


//ARRAYS y JSON
//================
//let x = {clave: "valor", "clave2": {"clave3": ["a","b","c"] }}
$x = array("clave" => "valor", "clave2" => array("clave3" => array("a", "b", "c")) );

//console.log()
//var_dump(json_encode($x)); //ARRAY ASOCIATIVO A JSON STRING MOSTRADO EN PANTALLA
//echo $x["clave2"]["clave3"][0];


//Añadir nuevo json array a json
$y = array("clave4" => array("d", "e"));
$x += $y;
$y = array("clave5" => array("f", "g"));
$x += $y;
//var_dump(json_encode($x))


//Añadir elementos de un array a otro array
//PUSH
$z = array("h", "i");

for($i = 0; $i < count($z); $i++){
    array_push($x["clave4"], $z[$i]);
}
//var_dump(json_encode($x))
//=============


//POP ULTIMO sub json del json (clave 5)
    array_pop($x);
    //var_dump(json_encode($x));

//POP ULTIMO elemento de un array
    array_pop($x["clave4"]);
    //var_dump(json_encode($x));


//FILTER PENDIENTE
//FINDINDEX PENDIENTE
//FIND PENDIENTE

//RETORNAR BLOB PENDIENTE
//TRANSFORMAR BLOB EN CSV PENDIENTE
//TRANSFORMAR BLOB EN EXCEL PENDIENTE
//==============================================



//STRINGS
//==========
   $str1 = "hola";
   $str2 = "MUNDO";


   //lower y upper
   $str1upper = strtoupper($str1);
   $str2lower = strtolower($str2);
   //echo 'str1upper = '.$str1upper;
   //echo '\n';
   //echo 'str2upper = '.$str2lower;

   //length
   for($i = 0; $i < strlen($str1); $i++){
       //echo $str1[$i]."\n";
   }

   //split
   $str3_str = "Francisco,Mateu,Araneda";
   $str3_array = explode(",", $str3_str);

   //join
   $str3_modificado_str = implode("-", $str3_array);
   echo $str3_modificado_str
?>