<?php
    $paises = [
        "Brasil",
        "Chile",
        "Bolivia",
        "Dinamarca", 
        "Estonia",
        "Finlândia",
        "Groelândia",
        "India",
        "Malasia",
        "Nicaragua"
    ];
    for ($i=0;$i<count($paises);$i++) { 
        echo ($i+1)." - ".$paises[$i]."<br/>";
    }
?>