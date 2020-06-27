<?php

class aula{
    
  protected  $var1 = "Boa tarde";
  protected   $var2 = "PessoaTECH";
  protected   $var3 = "ramon.palheta.pessoa@hotmail.com";


    function escreve(){
        echo "<br> Método da classe aula";
        echo "<br>" .$this-> var1;
        echo "<br>" .$this-> var2;
        echo "<br>" .$this-> var3;
        
        
    }


}
class canal extends aula{
    var $vc1 = "Malhando no PHP";
    var $vc2 = "Pessôa";

    function escreve2 (){
        echo "<br> Metodo da classe canal";
        echo "<br>" .$this -> vc1;
        echo "<br>" .$this -> vc2;
        echo "<br>" .$this ->var1;
        echo "<br>" .$this ->var2;
        echo "<br>" .$this ->var3;

    }
}
$aulaOBJ = new aula();
$canalOBJ = new canal();

$aulaOBJ -> escreve();
echo "<hr>";
$canalOBJ -> escreve();
$canalOBJ -> escreve2();
echo "<br>";
echo "<hr>";
/*echo "<br>" .$this ->var1;
echo "<br>" .$this ->var2;
echo "<br>" .$this ->var3;
*/
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 21 - Classes(Herança)</title>
</head>
<body>
    
</body>
</html>