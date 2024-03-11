<?php
//Crie uma função personalizada em PHP que calcule a média ponderada de
//três notas (pesos: 2, 3, 5).

function calcularMediaPonderada($nota1, $nota2, $nota3) {
    $pesos = array(2, 3, 5);


    if(count($pesos) != 3) {
        return "Erro: A quantidade de pesos deve ser igual a 3.";
    }

    $soma_pesos = array_sum($pesos);
    $soma_notas = ($nota1 * $pesos[0]) + ($nota2 * $pesos[1]) + ($nota3 * $pesos[2]);
    $media_ponderada = $soma_notas / $soma_pesos;

    return $media_ponderada;
}

$nota1 = 7;
$nota2 = 8;
$nota3 = 6;
$media = calcularMediaPonderada($nota1, $nota2, $nota3);
echo "A média ponderada das notas $nota1, $nota2 e $nota3 é: $media";

?>
