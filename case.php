<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>caso_opcoes</title>
</head>
<body>
    <h1>Caixa 24 horas</h1>
    <h2>Opções Bancárias: </h2>
    <h3>
        1 - Saldo conta corrente<br/>
        2 - Sacar dinheiro<br/>
        3 - fazer emprestimo<br/>
        4 - fazer emprestimo<br/>
    <h3>
    <form action = casos.php method="POST">
        <label for="opcao"> Escolha a opção desejada:</label>
        <input type="number" name="opcao" min="1" max="100">
    </form>
</body>
</html>