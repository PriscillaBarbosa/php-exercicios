<?php

$lista = ["arroz", "feijão", "carne."];

function listaParaString($arr) {

    $str = "Você comprou estes itens: ";

    for($i = 0; $i < count($arr); $i++) {
       
        $str .= "$arr[$i], ";

    }

    return $str;
}

echo listaParaString($lista);

