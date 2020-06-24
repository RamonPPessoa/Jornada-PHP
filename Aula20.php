<?php

    class Carro
    {
        var $tipo; // 1 -Passeio/2-Esportte/-3Utilitário
        var $velMax;
        var $nome;
        var $liga;
        var $vel;


        function Carro($tp,$no) // Metodo constructor
        {
            $this ->tipo = $tp;
            $this -> liga = false;
            $this -> nome = $no;
            $this ->vel = 0;
            if($tp ==1)
            {
                $this->velMax = 160;
            }
            else if($tp ==2)
            {
                $this->velMax = 300; 
            }
            else
            {
                $this->velMax = 100;
            }
        }

        function ligar()
        {
            $this->liga=true;
        }
        function desligar()
        {
            $this -> liga= false;
        }
        function velocidade($vl)
        {
            if($vl > $this ->velMax)
            {
                $This -> vel = $this->velMax;
            }
            else
            {
                $this ->vel = $vl;
            }
        }

        function id()
        {
            echo "<br>";
            echo "Nome do carro:" .$this->nome;
            echo "<br> Tipo do carro:" .$this->tipo;
            echo "<br> velocidade Máxima:" .$this->velMax;
            echo "<br>Velocidade atual:" .$this ->vel;
            if($this ->liga)
            {
                echo "<br>Este carro estpa ligado";
            }
            else
            {
                echo "<br> Desligado";
            }
        }
    }

    $carro1 = new Carro(2,"highwayStar");
    $carro1->ligar();
$carro1 ->velocidade(299);
    $carro1->id();
    

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 20 - Classes</title>
</head>
<body>
    
</body>
</html>