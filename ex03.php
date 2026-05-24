<?php

$valor = readline ("Digite um número: ");
$soma = 0;

for ($i= 1; $i <= $valor; $i++){
    $soma_anterior = $soma;
    $soma += $i;
    echo "$soma_anterior + $i = $soma\n";
}
echo "\n A soma total final é de: $soma";
    