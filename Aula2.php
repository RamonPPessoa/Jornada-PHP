<?php

//Variáveis

$vnome = "João";
$vnum = 10;
$vnum2 = 20.5;

echo "Nome: $vnome<br/>";

$vnome = "Campos";
echo "Nome: $vnome<br/>";

$vnome = "Thiago";
echo "Nome: " .$vnome. "<br/>";

echo"<hr/>";

// Vonstantes


define("cnome" , "Marcos");
define("ver", PHP_VERSION);

echo "Constante cnome:" .cnome."<br/>";

echo "NOme do Arquivo: " .__FILE__. "<br/>";
echo "Versão do PHP: " .ver. "<br/>";
echo "Versão do SO: " .PHP_OS. "<br/>";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2 de PHP - Constantes e Variáveis</title>
</head>
<body>
    
</body>
</html>