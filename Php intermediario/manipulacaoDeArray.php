<?php
// Array keys

$array = array(
    "nome" => "Alfred",
    "idade" => "30",
    "cidade" => "Curitiba"
);

$arrayresultado = array_keys($array);

print_r($arrayresultado);

echo "</br>";


// array_values
$arrayvalores = array_values($array);

print_r($arrayvalores);


echo "</br>";


// asort
asort($array);

print_r($array);


echo "</br>";

//arsort

arsort($array);
print_r($array);

echo "</br>";


// count
echo "Total de itens do array é: ".count($array);



echo "</br>";

// in_array

if(in_array("Alfred", $array)) {
    echo "Vencedor foi Alfred";
}





?>




