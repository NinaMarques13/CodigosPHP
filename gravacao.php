<?php
    //
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome=$_POST["nome_pro"];
        $setor_prod=$_POST["setor"];
        $preco_custo=$_POST["preco_c"];
        $preco_venda=$_POST["preco_v"];
        $quantidade_estoque=$_POST["estoque"];
    try {
        include "configuracao.php";
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Insira os dados na tabela de produtos
        $query = "INSERT INTO produtos (nome_prod, setor_prod, custo_prod, venda_prod, estoque_prod, situacao_prod) VALUES (?, ?, ?, ?, ?, 1)";
        $stmt = $conn->prepare($query);
        $stmt->execute([$nome, $setor_prod, $preco_custo, $preco_venda, $quantidade_estoque]);
        echo "produto cadastrado com sucesso"."<br/>"."<a href='formulario.php'>Voltar ao Menu</a>";
    } catch (PDOException $e) {
        echo "Erro ao cadastrar o produto: " . $e->getMessage();
    }
    }
       
?>