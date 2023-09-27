<?php
    $option=$_POST["opcao"];
    switch ($option) {
        case 1:
            echo "opção 1 - saldo conta corrente";
            break;
        case 2:
            echo "opção 2 - sacar dinheiro";
            break;
        case 3:
            echo "opção 3 - fazer emprestimo";
            break;        
        case 4:
            echo "opção 4 - sair";
            break;
        default:
            echo "opção inválida";
            break;    
    }
?>