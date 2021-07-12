<?php

echo "<h1>Los números de Fibonacci</h1>";

function fibonacci($numero) {
    $numeros = [0, 1];
    for ($i = 2; $i < $numero; $i++) {
        $numeros[$i] = $numeros[$i - 2] + $numeros[$i - 1];
    }
    return $numeros;
}

$resultado = fibonacci(10);
echo join(" , ", $resultado);
