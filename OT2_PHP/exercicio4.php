<?php

function ehPrimo($numero) {
    // Implemente uma função personalizada que receba um número como
    //parâmetro e determine se é um número primo.

    if ($numero <= 1) {
        return false;
    }

    for ($i = 2; $i * $i <= $numero; $i++) {
        if ($numero % $i == 0) {
            return false; // Não é primo
        }
    }

    return true; 
}

$numero = 17; 
if (ehPrimo($numero)) {
    echo "$numero é um número primo.";
} else {
    echo "$numero não é um número primo.";
}

?>
