<?php
    $clientes= [
        "nome" => [
            "n1" => "Nicolas ", "n2" => "Jorge", "n3" => "Saramago"
        ],
        "endereco" =>[
            "e1" => "Rua Maria da Costa Bezerra, 205", "e2" => "Rua Agnaldo Timotio, 64", "e3" => "Rua João Conceição, 56"
        ], 
        "telefone" => [
            "celular" =>[
                "c1" => "11999999999", "c2" => "11888888888", "c3" => "11555555555"
            ], 
            "residencial" => [
                "r1" => "1155555555", "r2" => "1166666666", "r3" => "1177777777"
            ],
        ],
    ];
    echo "DADOS CADASTRAIS:", "<br/>";
    echo $clientes["nome"]["n1"], "<br/>".$clientes["endereco"]["e1"], "<br/>".$clientes["telefone"]["celular"]["c1"],"<br/>".$clientes["telefone"]["residencial"]["r1"], "<br/>";
    echo $clientes["nome"]["n2"], "<br/>".$clientes["endereco"]["e2"], "<br/>".$clientes["telefone"]["celular"]["c2"],"<br/>".$clientes["telefone"]["residencial"]["r1"], "<br/>";
    echo $clientes["nome"]["n3"], "<br/>".$clientes["endereco"]["e3"], "<br/>".$clientes["telefone"]["celular"]["c3"],"<br/>".$clientes["telefone"]["residencial"]["r3"], "<br/>";
?>