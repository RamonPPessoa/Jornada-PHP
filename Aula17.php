<?php



if(isset($_POST["f_nome"]) && ($_POST["f_estado"]))


{
    $vnome = $_POST["f_nome"];
    $vestado = $_POST["f_estado"];
    echo "Nome: $vnome<br/>"; 
    echo "Nome: $vestado<br/>"; 

}
else
{
    echo " Não submetidos";
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
    <label for="">Estado:</label></br>
    <input type="text" name="f_estado"><br>
    <input type="submit" value="Enviar">
    
    
    </form>
</body>
</html>