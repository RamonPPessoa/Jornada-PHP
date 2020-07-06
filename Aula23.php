<?php

interface CarroPadrao
{
    function liga();
    function desliga();
    function status();
    function acelera();
    function freia();
}

interface CarroGuerra
{
    function atiraCanhao();
    function atiraMetralhadora();
}

abstract class CarroBase implements CarroPadrao,CarroGuerra
{
    public $potencia;
    public $velMax;
    private $ligado =false;

    function liga()
    {
        $this->ligado = true;
    }
    function desliga()
    {
        $this ->ligado = false;
    }



function status()
{
    echo "<br>";
    echo "Potencia" .$this ->potencia;
    echo "<br> velocidade Máxima" .$this ->velMax;
    echo "<br>";
    if($this->ligado)
    {
        echo "Este carro está ligado";
    }
    else
    {
        echo "Este carro não está ligado";
    }
  
}
function acelera(){}
function freia(){}
function atiraCanhao(){}
function atiraMetralhadora(){}
}

class Carro extends CarroBase
{
    function Carro($pt,$vm)
    {
        $this ->potencia = $pt;
        $this ->velMax =$vm;

        $this ->status();
    }
}

$carro1 = new Carro(150,280);
$carro1->liga();
$carro1->status();



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 23 - Classes parte 4 (Interfaces)</title>
</head>
<body>
    
</body>
</html>