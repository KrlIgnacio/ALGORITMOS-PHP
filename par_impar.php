<?php
$vetor = array(10, 89, 5, 7, 6, 74, 80, 13, 20, 103, 11, 3, 4, 9, 15);
    //foreach para percorrer o arary com a condicional
    foreach($vetor as $numeros){
        if($numeros % 2 != 0){
            echo "\n$numeros é ímpar!";
        }else{
            echo "\n$numeros é par!";
        }
    }