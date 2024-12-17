<?php
// Passo 1: Criar um array com valores numéricos
$numeros = array(10, 20, 30, 40, 50);

// Passo 2: Inicializar uma variável para armazenar a soma
$soma = 0;

// Passo 3: Usar um laço para percorrer o array e somar os valores
for ($i = 0; $i < count($numeros); $i++) {
    $soma += $numeros[$i];
}

// Passo 4: Exibir a soma total
echo "A soma dos valores é: ". $soma;

?>