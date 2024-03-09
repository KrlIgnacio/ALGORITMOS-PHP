<?php
echo 'Entre com um número inteiro: ';
fscanf(STDIN, "%d", $numDivisivel);

if ($numDivisivel % 10 == 0 && $numDivisivel % 5 == 0 && $numDivisivel % 2 == 0) {
    echo "Valor divisível por 10, por 5 e por 2 ao mesmo tempo.";
} else if ($numDivisivel % 10 == 0) {
    echo "Valor divisível por 10!";
} else if ($numDivisivel % 5 == 0) {
    echo "Valor divisível por 5!";
} else if ($numDivisivel % 2 == 0) {
    echo "Valor divisível por 2!";
} else {
    echo "valor não divisível por 10, por 5 e nem por 2.";
}
