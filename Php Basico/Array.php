<?php
$definirArray = array("Primeira string", "Segunda string");


echo $definirArray[0];



$definirArrayChaveValor = array(
    "nome" => "Bonieky",
    "sobrenome" => "lacerda",
    "idade" => 90,
    "sexo" => "masculino"
);

echo $definirArrayChaveValor["nome"];

$definirArrayChaveValor["idade"] = 150;
echo $definirArrayChaveValor["idade"];


print_r($definirArrayChaveValor);



$produtos = array (
    array(
        "nome" => "1",
        "quantidade" => "",
        "informacao" => ""
    ),
    array(
        "nome" => "2",
        "quantidade" => "",
        "informacao" => ""
    ),
);

$produtos[] = array(
    "nome" => "3",
    "quantidade" => "",
    "informacao" => ""
);

$produtos[] = "Posso adicionar uma string";
print_r($produtos)






?>