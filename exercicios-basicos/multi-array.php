<?php
// Passo 1: Criar um array com valores numéricos
$valores = array(2, 4, 6, 8, 10);

// Passo 2: Definir o fator de multiplicação
$fator = 3;

// Passo 3: Inicializar um novo array para armazenar os resultados
$resultados = array();

// Passo 4: Usar um laço for para percorrer o array original
for ($i = 0; $i < count($valores); $i++) {
    $resultados[$i] = $valores[$i] * $fator;
}

// Passo 5: Exibir o novo array
for ($i = 0; $i < count($resultados); $i++) {
    echo $resultados[$i] . "<br>";
}
?>