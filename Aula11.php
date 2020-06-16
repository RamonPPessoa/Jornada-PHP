<?php
    $vet = array("KEITH MOON","IAN PAICE","CARL PALMER","GINGER BAKER","CLIVE BURR","NICKO MACBRAIN","CHARLES GAVIN");
    $tam = count($vet);
    $i = 0;

    $i =0 ;
    while($i < $tam)
    {
        echo $vet[$i]. "<br/>";
        $i++;

        if($vet[$i] == "CARL PALMER")
        {
        break;
        }
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BREAK</title>
</head>
<body>
    
</body>
</html>