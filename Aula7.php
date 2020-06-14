<?php

$i = 0;
$tam = 5;

$vet = array($tam);

while($i < 10)
{
    echo $i  . "<br/>";

    $i++;
}
echo "<br/><hr/><br/>";


$i = 0;
while($i < $tam)
{
    $vet[$i]= $i;
    $i++;
}
$i =0;
while($i < $tam)
{
    echo "$vet[$i]<br/>";

    $i++;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop While</title>
</head>
<body>
    
</body>
</html>