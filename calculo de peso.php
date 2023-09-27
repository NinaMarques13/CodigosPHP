<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Calculo de peso </title>
</head>
<body>
    <h1> Calculo de peso </h1>        
    <form action="calculo.php" method="POST">
        <label for="altura">Digite sua altura:</label> 
        <input type="number" name="altura" step="0.01"><br/>   
        <label for= "genero">Selecione seu gênero:</label>
        <select name="genero">
            <option value="masculino">masculino</option>
            <option value="feminino">feminino</option>
        </select>
        <input type="submit" value="enviar">
    </form>    
</body>
