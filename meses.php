<?php

echo "Digite um número de 1 a 12: ";
fscanf(STDIN, "%d", $mes);

    if($mes < 1 || $mes > 12){
        echo "Valor inválido!";
    }else{
        $meses = array(1 => "Janeiro", 2 => "Fevereiro", 3 => "Março", 4 => "Abril", 5 => "Maio", 6 => "Junho", 
                    7 => "Julho", 8 => "Agosto", 9 => "Setembro", 10=> "Outubro", 11 => "Novembro", 12 => "Dezembro");
                    echo $meses[$mes];
    }


