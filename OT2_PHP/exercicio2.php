<?php

//Crie um script que utilize a função array_push() para adicionar três novas
//cores a um array existente.

$cores = array("vermelho", "azul", "verde");
array_push($cores, "amarelo", "roxo", "laranja");

echo "Cores atualizadas: <br>";
foreach ($cores as $cor) {
    echo $cor . "<br>";
}

?>
