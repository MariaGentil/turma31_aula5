<?php

$valor = readline ("Digite um número: ");

for ($i = 1; $i <=50; $i++){
    if ($i % $valor == 0)
    echo "Multiplo de $valor: $i\n";
}