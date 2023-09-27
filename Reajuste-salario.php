<?php 
    $salario=1000;
    $sal50 = $salario * 0.5;
    $sal30 = $salario * 0.3;
    if ($salario <= 1000) {
        echo "O salário de R$".$salario." com o reajuste de 50% ficará: ", $salario + $sal50;
    }else{
        echo "O salário de R$".$salario." com o reajuste de 30% ficará: ", $salario + $sal30;
    }
?>