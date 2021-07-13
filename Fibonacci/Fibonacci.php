<?php

//Explorar sobre los números de Fibonacci
/* Los números de Fibonacci (Leonardo de Pisa) son una serie infinita de números naturales,
 * donde el número que biene es la suma de los dos anteriores, excepto el 0 y el 1.
 * Por ejemplo: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55... */
//Codificación para presentar la sucesión de números:

echo "<h1>Sucesión de los números de Fibonacci</h1>";
echo "<h2> Esta es una forma: </h2>";

//Forma de la web #1:
function fibonacci($numero) {
    $fibonacci = [0, 1];
    for ($i = 2; $i < $numero; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 2] + $fibonacci[$i - 1];
    }
    return $fibonacci;
}

$resultado = fibonacci(10);
echo join(" , ", $resultado);

//Forma de la web #2:
echo "<h2> Esta es otra forma: </h2>";
$fibonacci2 = array(0, 1);

for ($i = 2; $i <= 10; $i++) {
    echo "El número con el que inicia: ".$i."<br>";
    $fibonacci2[$i] = $fibonacci2[$i - 1] + $fibonacci2[$i - 2];
    echo $fibonacci2[$i]."<br>";
}
