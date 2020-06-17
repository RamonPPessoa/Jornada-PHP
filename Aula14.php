<?php

function aula($num)
{
    if($num !=0)
    {
        echo "Função aula com valor $num <br/>";
        aula($num-1);
    }
}
aula(10);

echo "<hr/>";


function fat($num)
{
    if($num<0)
    {
        return -1;
    }
    if($num <=1)
    {
        return 1;
    }
    return $num *fat($num-1);

}
echo "fatorial de 4: ".fat(20);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Recursivas</title>
</head>
<body>
    
</body>
</html>