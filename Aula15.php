<?php
date_default_timezone_set('America/Manaus');
    $dia = date("d");
    $mes = date("m");
    $ano = date("Y");

$meses = array("Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");

$hora=date("H");
$minuto=date("i");
$segundo=date("s");
    echo $dia. " de " .$meses[$mes-1]. " de " .$ano."<br/>" ;
    echo $hora. ":" .$minuto. ":" .$segundo;

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 15 de PHP - Manipulação de Data e Hora</title>
</head>
<body>
    
</body>
</html>