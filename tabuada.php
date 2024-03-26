<?php
echo "Digite um número inteiro: ". PHP_EOL;
fscanf(STDIN, "%d", $tabuada);

echo "Tabuado do $tabuada: " . PHP_EOL;
for ($i = 1; $i <= 10; $i++) {
    echo "$i X $tabuada = " . ($tabuada * $i). PHP_EOL;
}
