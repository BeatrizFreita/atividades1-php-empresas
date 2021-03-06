<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles-global.css"/>
    <title>Cotagem de dinheiro </title>
</head>
<body>
    <form method="GET" action="conversaoDeMoeda.php">
        <h1>Conversão de moeda </h1>
        <div class="input-group">
            <label for="quantidade"> Quantidade de dinheiro, em real: </label>
            <input type="number" id="quantidade" name="quantidade" required/>
        </div>
        <div >
            <label for="moeda"> Moeda desejada:  </label> <br>
            <input type="radio" id="moeda" name="moeda" value="dolar" required/> Dolar
            
        </div>
        <div >
            <input type="radio" id="moeda" name="moeda" value="euro" required/> Euro
        </div>
        <button> Calcular </button>
        <button type="reset"> Limpar </button>
    </form>
</body>
</html>