<?php
// md5
$nome = "Bonieky";
$nome2 = md5($nome);

echo "Nome Original ".$nome." Nome criptografado ".$nome2;

echo "</br>";
// base64_encode

$nome5 = "Alfred";
$base64 = base64_encode($nome);

echo "Nome Original ".$nome5." </br>";
Echo "Nome criptografado do base64: ".$base64;

echo "</br>";

// base64_decode
 
$codigo = "Qm9uaWVreQ==";
echo "Meu texto original é: ".base64_decode($codigo);
?>