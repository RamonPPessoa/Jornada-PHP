<?php

session_start();


echo $_SESSION['vnome'];
echo $_SESSION['vtexto'];

//session_destroy();

echo "<br/>" .$_SESSION['vcanal'];



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessões</title>
</head>
<body>
<br><br>
    <a href="Aula19.php">Voltar aula 19</a><br>
    <a href="pg1.php">Segunda página</a>
</body>
</html>