<?php
echo 'Na mesma linha, digite dois números: ' .PHP_EOL;
fscanf(STDIN, "%d %d", $num1, $num2);
$soma = $num1 + $num2;

    if($soma > 20){
        $resultado = $soma + 8;
        echo $resultado;
    }else{
        $resultado = $soma - 5;
        echo $resultado;
    }