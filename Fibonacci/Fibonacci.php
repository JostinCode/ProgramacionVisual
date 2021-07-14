<?php

//Tarea: Explorar sobre los números de Fibonacci
/* Los números de Fibonacci (Leonardo de Pisa) son una serie infinita de números naturales,
 * donde el número que biene es la suma de los dos anteriores, excepto el 0 y el 1,
 * es decir qué se empesará a sumar partiendo desde el cero y el uno dando como resultado 1.
 * Por ejemplo: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55... */
//Codificación para presentar la sucesión de números:

echo "<h1>Sucesión de los números de Fibonacci</h1>";

//Forma de la web #1:
echo "<h2> Esta es una forma: </h2>";

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

echo "0<br>"."1<br>";
for ($i = 2; $i <= 10; $i++) {
    echo "Número con el que inicia: ".$i."<br>";
    $fibonacci2[$i] = $fibonacci2[$i - 1] + $fibonacci2[$i - 2];
    echo $fibonacci2[$i]."<br>";
}

//Una forma más fácil #3:
echo "<h2> Una forma más fácil: </h2>";

$NumeroUno = 0;
$NumeroDos = 1;
$NumeroTres = 0;

echo $NumeroUno."<br>".$NumeroDos."<br>";

for ($incrementable = 0; $incrementable <= 10; $incrementable++) {
    $NumeroTres = $NumeroUno + $NumeroDos;
    $NumeroUno = $NumeroDos;
    $NumeroDos = $NumeroTres;
    echo $NumeroTres."<br>";
}


/* 1. En la primera forma hacen uso de una función el cual recibe una parámetro
 * que es la cantidad de veces que aparecerán los números que corresponden a la serie,
 * además dentro de esta función estará contenido el ciclo FOR que sumará los números mediante vectores:
 * Fibonacci[n] = Fibonacci[1] + Fibonacci[2];
 * Donde dentro de estos corchetes irá una resta de dos números, uno será restado con el 2 y el otro con el 1.
 * Al final se imprime el resultado que se obtiene de la función, separado por una coma.
 * 
 * 2. En el segundo se hace uso de igual forma de vectores y la suma es similar,
 * la única diferencias son al momento de imprimir los números.
 * 
 * 3. Y por último el tercero, el cual es una forma más básica y no tan compleja de hacer este proceso
 * de presentación de la suceción de Fibonacci. Sólo igualamos dos primeros números, uno a 0 y el otro a 1,
 * luego con ayuda de otra varible, la usaremos para almacenar el resultado de la suma que se realizará dentro del ciclo FOR.
 * Por último almacenamos el valor de la segunda variable en la primera y el resultado de la suma en la segunda variable
 * para posterior imprimir el resultado de cada suma.
 */
