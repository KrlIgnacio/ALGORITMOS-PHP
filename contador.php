<?php 
echo "Digite um número inteiro: ";
fscanf(STDIN, "%d", $num);

    for($i=1; $i <= $num; $i++){
        echo $i . PHP_EOL;
    }
    
    $pdt = 1;
    for($i=1; $i <= $num; $i++){
        $pdt*= $i;
        
    }
    echo "produto: " . $pdt;