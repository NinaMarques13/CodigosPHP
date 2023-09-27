<?php
    $altura=$_POST["altura"];
    $genero=$_POST["genero"];
    if($genero === "masculino") {   
        $calmasc = ($altura*72.7)-58;
        $calmascformatado=number_format($calmasc,2);
        echo "Seu peso ideal é: KG ".$calmascformatado;                 
    }else if($genero === "feminino"){
        $calfem = ($altura*62.1)-44.7;
        $calfemformatado=number_format($calfem,2);
        echo "Seu peso ideal é: KG ".$calfemformatado;
    }
?>