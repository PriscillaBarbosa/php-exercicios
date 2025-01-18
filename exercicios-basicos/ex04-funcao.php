<?php
function verificarParOuImpar($num) {
    if ($num % 2 == 0) {
        return "Par";
    } else {
        return "Ímpar";
    }
}

// Teste a função
echo verificarParOuImpar(7); // Saída: Ímpar
echo verificarParOuImpar(10); // Saída: Par
?>