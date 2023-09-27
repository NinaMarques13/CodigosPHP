<?php
    $um=$_POST["primeiro"];
    $dois=$_POST["segundo"];
    $oper=$_POST["operator"];
    if ($oper=="soma") {
        echo $um."+".$dois." = ".$um+$dois;
    }elseif($oper=="sub"){
        echo $um."-".$dois." = ".$um-$dois;
    }elseif($oper=="mult"){
        echo $um."*".$dois." = ".$um*$dois;
    }elseif($oper=="div"){
        echo $um."/".$dois." = ".$um/$dois;
    }else {
        echo"Opção inválida";
    }
?>