<?php
echo "Olá, você está na biblioteca" . PHP_EOL;

$nomeLivro = readline("Digite o nome do livro a ser emprestado: " ) . PHP_EOL;

echo "Digite 1 caso seja aluno e 2 caso seja professor: ".PHP_EOL;
fscanf(STDIN, "%d", $tipoUsuario);
    if($tipoUsuario == 1){
        echo "RECIBO: O livro " . $nomeLivro . " deverá ser devolvido no prazo de 3 dias." . PHP_EOL;
    }else if($tipoUsuario == 2){
        echo "RECIBO: O livro " . $nomeLivro . " deverá ser devolvido no prazo de 10 dias." . PHP_EOL;
    }else{
        echo "entrada de dados inválida!";
    }
    
