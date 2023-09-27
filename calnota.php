<?php
    $n1=$_POST["nota1"];
    $n2=$_POST["nota2"];
    $n3=$_POST["nota3"];
    $n4=$_POST["nota4"];
    $media=($n1+$n2+$n3+$n4)/4;
    $mediaformt= number_format($media,2);
    if($media >= 7) {
        echo "Sua média é ".$mediaformt.", você está aprovado";
    }elseif($media > 4 && $media <6.9){
        echo "Sua média é ".$mediaformt.", você está de recuperação";
    }else{
        echo "Sua média é ".$mediaformt
        .", você está reprovado";
    }
?>