<?php

    $vet= array(5);
    $vet2=array("nome" => "Bruno","cidade" => "BH","curso"=>"PHP");

    $vet[0] = "Carro";
    $vet[1]= "Aviao";
    $vet[2]="Navio";
    $vet[3]="Moto";
    $vet[4]="Onibus";

    $mat=array(
        array ("Carro1",65000),
        array("Carro2",35000),
        array("carro3", 50000)

    );

    echo $vet[0] . "<br/>";
    echo "Nome: " .$vet2["nome"]. " - Cidade: " .$vet2["cidade"]. "-Curso: " .$vet2["curso"] ."<br/>";
    echo "Carro A" .$mat[0][0] . " - Valor: " ,$mat[0][1]."<br/>";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 4 de PHP - Vetores/Matrizes</title>
</head>
<body>
    
</body>
</html>