<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Controle de Estoque</h1>
    <form action="gravacao.php" method="post">
        <input type"text" name="nome_pro"
        placeholder="Insira o nome do produto"/><br/>
        <select name="setor" id="setor_prod">selecione um setor
            <?php 
                include "configuracao.php";
                $query = "SELECT id_set, nome_set FROM setores";
                $stmt = $conn->prepare($query);
                $stmt->execute();
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<option value='" . $row['id_set'] . "'>" . $row['nome_set'] . "</option>";
            }
            ?>
        </select><br/> 
        <input type="text" name="preco_c" 
        placeholder="Insira seu preço de custo"/><br/>
        <input type="text" name="preco_v" 
        placeholder="Insira seu preço de venda"/><br/>
        <input type="number" name="estoque" 
        placeholder="Escolha a quantidade"/><br/>
        <input type="submit" name="enviar"/><br/>
</body>
</html>