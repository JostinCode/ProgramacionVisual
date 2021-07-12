<?php

//Presentar mediante un bucle los números primos sólo hasta el 60
//Utilizaré el ciclo FOR

echo "<h1> Números primos sólo hasta el 60 </h1>";
echo "<br>";

//Forma #1:
//for ($NumeroPrimo = 2; $NumeroPrimo <= 100; $NumeroPrimo++) {
//    if (($NumeroPrimo == 2 || $NumeroPrimo == 3 || $NumeroPrimo == 5 || $NumeroPrimo == 7)
//            || ($NumeroPrimo % 2 != 0 && $NumeroPrimo % 3 != 0 && $NumeroPrimo % 5 != 0 && $NumeroPrimo % 7 != 0)) {
//        if ($NumeroPrimo / $NumeroPrimo == 1 && $NumeroPrimo / 1 == $NumeroPrimo) {
//            echo "El número " . $NumeroPrimo . " es un número primo<br>";
//        }
//    }
//}

//Forma #2:
for ($NumeroPrimo = 2; $NumeroPrimo <= 100; $NumeroPrimo++) {
    if (($NumeroPrimo == 2 || $NumeroPrimo == 3 || $NumeroPrimo == 5 || $NumeroPrimo == 7)
            || ($NumeroPrimo % 2 != 0 && $NumeroPrimo % 3 != 0 && $NumeroPrimo % 5 != 0 && $NumeroPrimo % 7 != 0)) {
        echo "El número " . $NumeroPrimo . " es un número primo<br>";
    }
}
