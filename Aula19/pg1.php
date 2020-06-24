<?php

session_start();

if($_SESSION['vlog']=="s"){


        $_SESSION['vcanal'] = "Gênio da Guitarra";
        echo "<h3>Segunda Página</h3>";

        echo $_SESSION['vnome'];
        echo $_SESSION['vtexto'];



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
    <a href="pg2.php">Terceira página</a>
</body>
</html>

<?php


}else{
    echo "Acesso negado";
}


?>