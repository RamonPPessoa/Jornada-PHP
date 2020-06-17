<?php

$aula;

if(isset($aula))
{
    echo "Váriavel definida";

}
else
{
    echo " Não definida";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<br><br>
    <form name="f_aula" action="Aula17.php" method="post">
    <label for="">Nome:</label></br>
    <input type="text" name="f_nome"><br>
    <input type="submit" value="Enviar">
    
    
    </form>
</body>
</html>