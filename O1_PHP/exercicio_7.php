<?php
/*
    Data: 04/03/2024
    Nome: Daniele de Almeida Silva

7. Escreva um programa que receba o dia da semana como entrada e exiba uma
mensagem correspondente (por exemplo, "Hoje é dia de trabalho!").

*/
$dia_semana = strtolower(readline("Digite o dia da semana: "));
switch ($dia_semana) {
    case 'segunda-feira':
    case 'terça-feira':
    case 'quarta-feira':
    case 'quinta-feira':
    case 'sexta-feira':
        echo "Hoje é dia de trabalho!";
        break;
    case 'sábado':
    case 'domingo':
        echo "Hoje é dia de descanso!";
        break;
    default:
        echo "Dia da semana inválido!";
}

?>