<?php


include "conexao.inc";


$vnome ="Blackmore";
$vuser = "bruxoblack ";
$vsenha ="blackmore4247";
$vmail = "blackmore@hotmail.com";
$vtel = "424245";
$vst = 1;
$vobs = "tudo ok";


$sql = "INSERT INTO tb_cadastro VALUES ( NULL ,'$vnome', '$vuser','$vsenha','$vmail', '$vtel', $vst,'$vobs')";
$res = mysqli_query($con, $sql);
$num=mysqli_affected_rows($con);

echo "$num registros inseridos";

mysqli_close($con);






?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>