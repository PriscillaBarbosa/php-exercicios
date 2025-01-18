<?php

function defineCorCarro($cor = "vermelha") {
    return "A cor do carro é: $cor ";
}

$carroVermelho = defineCorCarro();
echo $carroVermelho . "<br>";

$carroAzul = defineCorCarro("Azul");
echo $carroAzul . "<br>";