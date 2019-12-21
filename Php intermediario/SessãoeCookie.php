<?php
session_start();
//Gerar uma sessão
$_SESSION['teste'] = "Alfred mordomo";
echo "Minha sessão é de: ".$_SESSION['teste'];

//Gerar um cookie
setcookie("meuteste", "Fulano", time()+3600 );
echo "meu cookie é de: ".$_COOKIE["meuteste"];
?>