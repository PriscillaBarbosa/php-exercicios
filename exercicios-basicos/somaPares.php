<?php
$soma = 0;

for ($i = 1; $i <=20; $i++) {
    if ($i % 2 == 0) {
        $soma += $i;
    }
}

echo "A soma dos números pares de 1 a 20 é: $soma";
?>