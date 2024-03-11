<?php
//Desenvolva uma função que, dado um timestamp Unix como parâmetro,
//retorne a data e hora formatadas (por exemplo, "DD/MM/AAAA HH:mm:ss").
function formatarTimestamp($timestamp) {
    // Definindo o timezone desejado
    date_default_timezone_set('America/Sao_Paulo');

    // Formatando o timestamp para data e hora
    $dataHoraFormatada = date("d/m/Y H:i:s", $timestamp);

    return $dataHoraFormatada;
}

// Testando a função com um timestamp Unix atual
$timestampAtual = time();
$dataHoraFormatada = formatarTimestamp($timestampAtual);
echo "Data e hora formatadas: $dataHoraFormatada";

?>
