<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operacoes</title>
</head>
<body>
    <h1>Quatro Operações</h1
    <h2>Digite dois valores abaixo e escolha a operação desejada:</h2>
    <form action="calcular-if.php" method="POST">
        <input type="number" name="primeiro">
        <select name="operator">
            <option value="soma">+</option>
            <option value="sub">-</option>
            <option value="mult">*</option>
            <option value="div">/</option>
        </select>
        <input type="number" name="segundo">
        <input type="submit" value="Calcular"/>
    </form>    
</body>
</html>