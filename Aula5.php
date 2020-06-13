<?php
 // IF-ELSE

 $nota1 = 50;

 if($nota1 >=60)
 {
     echo "<font color=blue>Aprovado</font>";
 }
else if($nota1 >=50)
{
    echo "<font color=orange>Recuperação</font>";
}

else
{
    echo "<font color=red>Reprovado</font>";
}


if(($nota1 >= 40) & ($nota1 <=60))
{
    echo"<hr/> Aluno selecionado";

} 
else
{
    echo "<hr/>Aluno fora da faixa";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 5 de PHP - COndicional IF-ELSE</title>
</head>
<body>
    
</body>
</html>