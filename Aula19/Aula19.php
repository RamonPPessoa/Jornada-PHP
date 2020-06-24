<?php

session_start();
$_SESSION['vnome'] ="Hendrix";
$_SESSION['vtexto'] = "Guitarra";
$_SESSION['vlog'] = "n";

//unset($_SESSION['vtexto']);

echo $_SESSION['vnome'];
echo "<br/>".$_SESSION['vtexto'];
if(isset($_SESSION['vcanal']))
{
    echo "<br>" .$_SESSION['vcanal'];
}
else
{
   echo "<br/>Variavel vcanal Nao foi definida";
}
//session_destroy();



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessões</title>
</head>
<body>
    <br>
    <a href="pg1.php">Segunda Página</a>
</body>
</html>