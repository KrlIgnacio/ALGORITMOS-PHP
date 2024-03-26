<?php
echo "Digite um valor inteiro: ";
fscanf(STDIN, "%d", $limite);
$produto = 1;

    for($i = 1; $i <= $limite; $i++){
        print($i . " ");
        $produto = $produto * $i;
    }
    print("\n". "Produto: " . $produto);