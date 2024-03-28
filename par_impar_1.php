<?php
$vetorNum = array();
//bloco de codigo para armazenar os números no vetor
for ($i = 1; $i <= 15; $i++) {
    $numero = (int) readline("Digite o $i ° número:  ");
    $vetorNum[] = $numero;
}
//bloco para percorrer o vetor + condicional par-impar
foreach($vetorNum as $vetNumeros){
    if($vetNumeros % 2 != 0){
        echo "\n$vetNumeros é ímpar!";
    }else{
        echo "\n$vetNumeros é par!";
    }
}

