<?php

class Carro
{
    public $cor;
    public static $vel ;


    function Carro($cr)
    {
        $this->cor =$cr;
        self::$vel=0;

    }
    function mudaVel($vl)
    {
        self:: $vel =$vl;
    }


 function status()
 {
    echo "<hr>";

    echo " Cor : " .$this->cor;
    echo "<br>";
    echo "Velocidade : " .self:: $vel;
 }
 
}
$carro1 = new Carro("Preto");
$carro2 = new Carro("Vermelho");
$carro3 = new Carro("Branco");

 $carro1->status();
 
 $carro2->status();
 
 $carro3->status();

 echo "<br> Velocidade alterada<br><br>";
 $carro1->mudaVel(100);

 $carro1->status();
 
 $carro2->status();
 
 $carro3->status();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jornada PHP - OOP (Static)</title>
</head>
<body>
    
</body>
</html>