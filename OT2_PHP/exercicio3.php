<?php

function inverterOrdemPalavras($frase) {
    //Utilize uma função predefinida do PHP para inverter a ordem das palavras
    //em uma frase.
    $fraseInvertida = strrev($frase);
    $palavras = str_word_count($fraseInvertida, 1);

    $fraseInvertidaOrdenada = implode(' ', array_reverse($palavras));
    
    return $fraseInvertidaOrdenada;
}

$frase = "O rato roeu a roupa";
$fraseInvertida = inverterOrdemPalavras($frase);
echo "Frase original: $frase<br>";
echo "Frase com palavras invertidas: $fraseInvertida";

?>
