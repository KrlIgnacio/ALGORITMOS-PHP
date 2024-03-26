<?php

echo "Digite um número: ";
fscanf(STDIN, "%d", $num);
    for($i=1; $i <= $num; $i++){
        echo "SOL" . PHP_EOL;
    }