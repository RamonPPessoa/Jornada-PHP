<?php
function aula()
{
    echo "<hr/> KIll Em ALL<br/>";
}

aula();


function soma($n1,$n2)
{
    $res=$n1 + $n2;

    echo $res;
}
     soma(7,3);


     function soma2($n1,$n2)
     {
         $res = $n1 + $n2;
         return $res;
     }
     $so=soma2(10,5);
     echo "<hr>resultado = $so<br/>";

     $valores =array(1,3,5,7,9,12,6,4,20,18,19,34,2);

     function media($val)
     {
         $tam =count($val);
         $soma = 0;
         for($i =0; $i <$tam ;$i++)
         {
             $soma += $val[$i];
         }
         return $soma/$tam;
     }
     $med = media($valores);
     echo "<br/>Media = $med<br/>";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop FOR</title>
</head>
<body>
    
</body>
</html>