<?php

const ACIMA_DE_CENTO_E_VINTE = 0.42;
const ABAIXO_DE_CENTO_E_VINTE = 0.32;
const UNIDADE_DE_MEDIDA = "kWh";

$nomeCliente = $_GET["nome"];
$consumo = $_GET["consumo"];
$endereco = $_GET["endereco"];

$valorConsumoAcima = $consumo * ACIMA_DE_CENTO_E_VINTE;
$valorConsumoAbaixo = $consumo * ABAIXO_DE_CENTO_E_VINTE;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles-global.css" />
    <title>Valor da conta de luz</title>
</head>
<body>
    <h1> Sua conta de luz <em><?= $nomeCliente ?></em></h1>
    <h2> <?= $endereco ?> </h2>
    <?php
        if ($consumo > 120){
    ?>
        <h3 style='color: red'> Consumo: <?= $consumo?> kWh</h3>
        <h2> Valor a pagar: R$ <em><?= number_format($valorConsumoAcima, 2, ",", ".") ?></em></h2>
    <?php
        }else{
    ?>
        <h3 style='color: blue'>Consumo: <?= $consumo?> kWh</h3>
        <h3> Valor a pagar: R$ <?= number_format($valorConsumoAbaixo, 2, ",", ".") ?></h3>
        <p> Obrigado por economizar!</p>
    <?php
        }
    ?>
</body>
</html>