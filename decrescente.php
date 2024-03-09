<?php

$decrescente = array();
echo "Digite três valores separados por espaço: ";
//associar os valores ao indice array
fscanf(STDIN, "%d %d %d", $decrescente[0], $decrescente[1], $decrescente[2]);
rsort($decrescente);
    foreach($decrescente as $decresc){
        echo $decresc . " ";
    }