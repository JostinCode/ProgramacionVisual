<?php

//Explorar sobre los números de Fibonacci
/* Los números de Fibonacci (Leonardo de Pisa) son una serie infinita de números naturales,
 * donde el número que biene es la suma de los dos anteriores, excepto el 0 y el 1.
 * Por ejemplo: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55... */
//Codificación para presentar la sucesión de números:

echo "<h1>Sucesión de los números de Fibonacci</h1>";

//Forma de la web:
function fibonacci($numero) {
    $fibonacci = [0, 1];
    for ($i = 2; $i < $numero; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 2] + $fibonacci[$i - 1];
    }
    return $fibonacci;
}

$resultado = fibonacci(10);
echo join(" , ", $resultado);

//
