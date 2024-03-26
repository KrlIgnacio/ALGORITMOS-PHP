<?php
//calcular triangulo em uma condicao - calcular classificaçao 
$ladoA = (float) readline("Digite um valor: ").PHP_EOL;
$ladoB = (float) readline("Digite um valor: ").PHP_EOL;
$ladoC = (float) readline("Digite um valor: ").PHP_EOL;
    //condicional triangylo
    if(($ladoA + $ladoB > $ladoC) && ($ladoB + $ladoC > $ladoA) && ($ladoA + $ladoC > $ladoB)){
        //classificação: lados iguais
        if($ladoA == $ladoB && $ladoB == $ladoC){
            print("Seu triângulo é EQUILÁTERO!");
        }
        //classificação: lados diferentes
        else if($ladoA != $ladoB && $ladoB != $ladoC && $ladoC != $ladoA){
            print("Seu triângulo é ESCALENO!");
        }
        //classificação: dois lados iguais
        else if(($ladoA == $ladoB && $ladoB != $ladoC)||($ladoC == $ladoB && $ladoB != $ladoA)|| ($ladoA == $ladoC && $ladoC != $ladoB)){
            print("Seu triângulo é ISÓSCELES!");
        }
    }
    else{
        print("Não foi possível formar um triângulo com os valores fornecidos.");
    }