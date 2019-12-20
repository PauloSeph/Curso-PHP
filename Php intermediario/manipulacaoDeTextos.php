<?php

//explode
$nome = "Alfred August";

$x = explode(" ", $nome);


print_r($x);

// implode

$arrey = array("Alfred", "Augustin");

$nomecompleto = implode(" ", $arrey);

echo $nomecompleto;



// number_format

$xe = number_format(83232.25555547, 2, ",", ".");

echo $xe;


// Str_replace

$texto = "O Avião caiu na selva";

$seila = str_replace("selva", "Água", $texto);

echo $seila;

// strToLower
echo strtolower("UMA STRING QUALQUER");

// StrToupper
echo strtoupper('uma string qualquer também');


//Substr
$texto1 = "Alfred";

$xa = substr($texto1, 0, 3);

echo $xa;


// ucFirst
$texto2 = "alfred";

echo ucfirst($texto2);


//ucWords

$texto3 = "Alfred nao esta aqui";

echo ucwords($texto3);




?>
