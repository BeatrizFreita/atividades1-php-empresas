<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles-global.css" />
    <title>Calcular conta de luz</title>
</head>
<body>
    <form method="GET" action="consumo_de_luz.php">
        <h1>Calcule sua conta de luz </h1>
        <div class="input-group"> 
            <label for="consumo"> Consumo de energia, em kWh: </label>
            <input type="number" id="consumo" name="consumo" required/>
        </div>
        <div class="input-group"> 
            <label for="nome"> Nome completo: </label>
            <input type="text" id="nome" name="nome" required/>
        </div>
        <div class="input-group"> 
            <label for="endereco"> Endereço, com nº:  </label>
            <input type="text" id="endereco" name="endereco" required/>
        </div>
        <button> Calcular </button>
        <button type="reset"> Limpar </button>
    </form>
</body>
</html>