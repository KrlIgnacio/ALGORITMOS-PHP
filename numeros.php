<?php
echo "Digite quantos números inteiros você quiser(digite 0 para parar): ".PHP_EOL;
$input = (int) readline();
$numeros = [];
$flag = 0;


while($input != $flag){
    $numeros[] = $input;
    $input = (int) readline();
}
foreach($numeros as $vet){
    echo $vet . " ";
}
$cont=0;
foreach ($numeros as $vet) {
    if($vet >= 100 && $vet <= 200){
        $cont++;
    }
}
print("\n" . "Números digitados entre 100 e 200: " . $cont );
