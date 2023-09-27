<?php
    $primeiro=$_POST["um"];
    $segundo=$_POST["dois"];
    echo "1° número:".$primeiro."<br/>";
    echo "2º número".$segundo."<br/>";
    echo "Os números entre eles são: ";
    for ($i=$primeiro+2;$i<$segundo;$i+=2) { 
        echo $i." ";
    }
?>