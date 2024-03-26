<?php
$crescente = array();
echo 'Digite três valores separados por um espaço: ';
fscanf(STDIN, "%d %d %d", $crescente[0], $crescente[1], $crescente[2]);
    sort($crescente);
    foreach($crescente as $cresc){
        echo $cresc . " ";
    }