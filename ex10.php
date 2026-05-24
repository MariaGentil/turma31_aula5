<?php

$limite = readline ("Defina um limite: ");
$soma = 0;

for ($i = 1; $i <= $limite; $i++){  
    $soma += $i;
}

$media = $soma / $limite;
echo "A média é de: $media";