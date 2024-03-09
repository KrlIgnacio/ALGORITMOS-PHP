<?php
echo "Escreva seu nome: ";
fscanf(STDIN, "%s", $nome) . PHP_EOL;

echo "Digite seu sexo(f/m): ";
fscanf(STDIN, "%c", $sexo) . PHP_EOL;

echo "Digite sua idade: ";
fscanf(STDIN, "%d", $idade) . PHP_EOL;

    if($sexo == 'f' || $sexo == 'F' && $idade < 25){
        echo $nome . ' ACEITA';
    }else{
        echo 'NÃO ACEITA';
    }