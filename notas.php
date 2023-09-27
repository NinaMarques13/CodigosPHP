<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Notas</title>
</head>
<body>
    <h1>Calculo de Notas</h1>
    <form action="calnota.php" method="POST">
        <label for="nota1"> Digite 1° nota: </label>
        <input type="number" name="nota1" step = "0.01"><br/>
        <label for="nota2"> Digite 2° nota: </label>
        <input type="number" name="nota2" step = "0.01"><br/>
        <label for="nota3"> Digite 3° nota: </label>
        <input type="number" name="nota3" step = "0.01"><br/>
        <label for="nota4"> Digite 4° nota: </label>
        <input type="number" name="nota4" step = "0.01">
        <input type="submit" value="calcular">
    </form>
</body>
</html>