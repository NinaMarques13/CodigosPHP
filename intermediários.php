<?php
    $num_um=1;
    $num_dois=9;
    echo"Primeiro número: ".$num_um."<br/>";
    echo"Segundo número: ".$num_dois."<br/>";
    echo"Número entre eles: ";
    if ($num_um>$num_dois) {
        $troca=$num_um;
        $num_um=$num_dois;
        $num_dois=$troca;
    }
    for ($i=$num_um+1; $i<$num_dois;$i++){
        echo $i;
    }
?>
