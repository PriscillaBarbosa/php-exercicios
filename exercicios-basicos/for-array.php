<?php
// Passo 1: Criar um array
$frutas = array("maça", "banana", "laranja", "manga", "abacaxi");

//Passo 2: Usar um laço for para percorrer o array
for ($i = 0; $i < count($frutas);$i++) {
    //Passo 3: Exibir cada elemento do array
    echo $frutas[$i] . "<br>";
}
?>