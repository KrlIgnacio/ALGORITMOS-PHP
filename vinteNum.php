<?php
echo "Digite 20 números inteiros positivos e negativos: " . PHP_EOL;
//inicializaçao da variaveis
$numNegativo  = 0;
$somaPositivo = 0;
    //iteraçao até 20 para coletar os números digitados
    for ($i = 1; $i <= 20; $i++) {
    $numero = (int) readline($i . " - número: ") . PHP_EOL;
    //condicional positivo e negativo
    if ($numero > 0) {
        $somaPositivo += $numero;
    } else if ($numero < 0) {
        $numNegativo++;
    }
}

print("\nTotal de Numeros Negativos: " . $numNegativo);
print("\nTotal Soma dos Positivos: " . $somaPositivo);
