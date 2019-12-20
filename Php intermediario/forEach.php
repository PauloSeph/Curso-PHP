<?php


$nomes = array("Salsi", "Alfred", "Roben", "Sonseri");

foreach($nomes as $aluno) {
    echo "Aluno: ".$aluno."<br/>";
}



// segundo exemplo
$outros = array(
    array("nome"=>"Alfred", "idade"=>20),
    array("nome"=>"Andre", "idade"=>23),
    array("nome"=>"Alned", "idade"=>30),
    array("nome"=>"Adrian", "idade"=>40)
);

foreach($outros as $alunos) {
    echo "Aluno: ".$alunos["nome"]." - idade: ".$alunos["idade"]."<br/>";
}


// terceiro exemplo

$outros2 = array(
    "nome" => "Joao",
    "idade" => "30",
    "estado" => "ES",
    "pais" => "Brasil"
);

foreach($outros2 as $chave => $alu)   {
    echo $chave." = ".$alu ."<br/>";
}



?>