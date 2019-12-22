<?php

$dsn = "mysql:dbname=blogzon;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    
    $sql = "'SELECT * FROM usuarios";
    $sql = $pdo->query($sql);



} catch(PDOException $e) {
    echo "Falhou: ".$e->getMessage();

}



?>
