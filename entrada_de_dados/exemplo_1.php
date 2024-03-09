<?php
//leia dois valores inteiros na mesma linha e mostre a soma dos valores
list($num1, $num2)
        = explode(' ', readline());

$num1 = (int)$num1;
$num2 = (int)$num2; 

echo "A soma de " . $num1 . " e "
    . $num2 . " é " . ($num1 + $num2);