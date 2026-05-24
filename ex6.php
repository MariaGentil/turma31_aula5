<?php

$turma = readline ("Insira a quantidade de alunos: ");
$soma = 0;

for ($i = 1; $i <= $turma; $i++){
    $nota = readline ("Insira a nota do aluno $i: ");
    $soma += $nota;
}
    $media = $soma / $turma;
    echo "A media da turma é de: $media\n";
