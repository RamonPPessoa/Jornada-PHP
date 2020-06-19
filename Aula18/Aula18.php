<?php

$texto = "Aula PHP";
$nome = "Hendrix";
$canal = "Workover Academy";
     
echo "<a href=pg1.php?tx=".urlencode($texto)."&no=".urlencode($nome)."&cn=".urlencode($canal).">Abre pg1</a>";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passagem de valores</title>
</head>
<body>
    
</body>
</html>