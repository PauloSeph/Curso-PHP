<?php
$x = 4;

switch($x)
{
    case 0:
        echo "O x eh zero";
        echo " e voce tirou zero.";
    break;
    case 1:
        echo "O x é um";
    break;
    case 2:
        echo "O x é Dois";
    break;
    case 3:
    case 4:
    case 5:
        echo "O x é Tres ou 4 ou 5";
    break;

    default:
        echo "O x nao é nada";
    break;
}



?>