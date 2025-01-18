<?php

$frase = "Testando o explode";

//com delimitador
$fraseArray = explode(" ", $frase);

print_r($fraseArray);
echo "<br>";

//sem delimitador
$fraseArray2 = explode(",", $frase);

print_r($fraseArray2);
echo "<br>";

//com delimitador
$fraseB = "Carro, Avião, Barco, Navio";

$fraseBArray = explode(",", $fraseB);

print_r($fraseBArray);

echo "<br>";

for($i = 0; $i < count($fraseBArray); $i++) {

    echo "$fraseBArray[$i] <br>";
}