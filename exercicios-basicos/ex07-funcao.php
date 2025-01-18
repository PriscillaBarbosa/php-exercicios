<?php
function verificarPalindromo($str) {
    $str = strtolower(str_replace(' ', '', $str));
    if ($str == strrev($str)) {
        return "É um palíndromo";
    } else {
        return "Não é um Palíndromo";
    }
}

//Teste a função 
echo verificarPalindromo("arara");
echo verificarPalindromo("hello");

?>