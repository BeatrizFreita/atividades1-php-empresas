<?php

const DOLAR = 5.41;
const EURO = 6.57;

$quantidade = $_GET["quantidade"];
$moeda = $_GET["moeda"];


$porDolar = $quantidade * DOLAR;
$porEuro = $quantidade * EURO;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles-global.css" />
    <title>Moeda convertida</title>
</head>
<body>
    <h1> Resultado da conversão de moeda </h1>
    <h2> Valor total em DOLAR: $ <em><?= number_format($porDolar, 2, ",", ".")?> </em> </h2>
    <h2> Valor total em EURO:  € <em><?=number_format($porEuro, 2, ",", ".") ?> </em> </h2>

</body>
</html>