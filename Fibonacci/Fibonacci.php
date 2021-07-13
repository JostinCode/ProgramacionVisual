<?php

//Explorar sobre los números de Fibonacci
/* Los números de Fibonacci (Leonardo de Pisa) son una serie infinita de números naturales,
 * donde el número que biene es la suma de los dos anteriores, excepto el 0 y el 1.
 * Por ejemplo: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55... */
//Codificación para presentar la sucesión de números:

echo "<h1>Sucesión de los números de Fibonacci</h1>";

//Forma de la web:
//function fibonacci($numero) {
//    $numeros = [0, 1];
//    for ($i = 2; $i < $numero; $i++) {
//        $numeros[$i] = $numeros[$i - 2] + $numeros[$i - 1];
//    }
//    return $numeros;
//}
//
//$resultado = fibonacci(10);
//echo join(" , ", $resultado);

//Mi forma:

for ($NumeroFibonacci=0; $NumeroFibonacci<=10;) {
    $NumeroFibonacci2 = $NumeroFibonacci;
    if ($NumeroFibonacci == 1) {
        echo $NumeroFibonacci."<br>";
    }
    
    $NumeroFibonacci = $NumeroFibonacci + $NumeroFibonacci2;
    echo $NumeroFibonacci."<br>";
    
    if ($NumeroFibonacci == 0) {
        $NumeroFibonacci++;
    }
}
