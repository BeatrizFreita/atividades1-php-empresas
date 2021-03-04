<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles-global.css" />
    <title>Aumento de salário</title>
</head>
<body>
    <form method="GET" action="aumento-salario.php">
        <h1> Aumento de salário </h1>
        <div class="input-group">
            <label for="nome"> Nome: </label>
            <input type="text" id="nome" name="nome" required>
        </div>
        <div class="input-group">
            <label for="salarioatual"> Salário atual: </label>
            <input type="text" id="salarioatual" name="salarioatual" required>
        </div>
        <button> Calcular </button>
        <button type="reset"> Limpar </button>
    </form>
</body>
</html>