<?php

    $i = 0;
    $tam = 5;
    $vet = array($tam);

    for($i =0; $i < $tam; $i++)
    {
        echo "valor de i: ".$i, "<br/>";
    }

    echo "<br/>===========================<br/>";

    for($i =0; $i < $tam; $i++)
    {
        $vet[$i] = $i;
    }

    for($i =0; $i < $tam; $i++)
    {
        echo "Valor da pos. $i:  $vet[$i]<br/>";
    }

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