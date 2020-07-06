<?php

abstract class CarroBase
{
    public $potencia;
    public $velMax;
    public $portas;
    public $ligado = false;



    function liga()
    {
        $this->ligado = true;
    }
    function desligar()
    {
        $this ->ligado = false;
    }

    function status()
    {
        echo "<br>";
        echo "Potencia" .$this->potencia;
        echo "<br\> Velocidade Maxima" .$this->velMax;
        echo "<br> Portas" .$this->portas;
        echo "<br>";
        if( $this->ligado)
        {
            echo "Carro ligado";
        }
        else
        {
            echo " Desligado";
        }
        echo "<hr>";
    }
} 

class Carro extends CarroBase
{
    function Carro($pt,$ve,$po)
    {
        $this->potencia =$pt;
        $this ->velMax =$ve;
        $this ->portas =$po;
        $this ->status();
    }
}

$carro1 = new Carro(150,250,4);
$carro1 ->liga();
$carro1 ->status();



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 22 - Classes/Abstracts</title>
</head>
<body>
    
</body>
</html>