<?php
    const ACIMA_DE_CINCO = 0.1;
    const ABAIXO_DE_CINCO = 0.2;

    $nome = $_GET["nome"];
    $salarioatual = $_GET["salarioatual"];

    $aumentoSalarioDez = $salarioatual * ACIMA_DE_CINCO;
    $aumentoSalario20 = $salarioatual * ABAIXO_DE_CINCO;

    $totalSalarioAcima = $salarioatual + $aumentoSalarioDez;
    $totalSalarioAbaixo = $salarioatual + $aumentoSalario20;
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles-global.css" />
    <title>Novo salário</title>
</head>
<body>
    <?php
        if($salarioatual >= 5000){
    ?>
    <h1> Você, <?= $nome?> passará a receber R$ <?= number_format($totalSalarioAcima, 2, ",", ".")?></h1>
    <?php
        }else { 
    ?>
        <h1> Você, <?= $nome?> passará a receber R$ <?= number_format($totalSalarioAbaixo, 2, ",", ".")?></h1>
    <?php
        }
    ?>
</body>
</html>