<?php

//Presentar mediante un bucle los números impares sólo hasta el 60
//Utilizaré el ciclo FOR

echo "<h1> Números impares del 1 hasta el 60 </h1>";
echo "<br>";

//Forma #1:
for ($NumeroImpar=0; $NumeroImpar<=60; $NumeroImpar++) {
    if ($NumeroImpar % 2 != 0) {
        echo "El número ".$NumeroImpar." es un número impar<br>";
    }
}

//Forma #2:
//for ($NumeroImpar=0; $NumeroImpar<=60; $NumeroImpar++) {
//    if ($NumeroImpar % 2 != 0) {
//        if ($NumeroImpar == 1) {
//            echo $NumeroImpar;
//        }
//        if ($NumeroImpar != 1) {
//            echo ", ".$NumeroImpar;
//        }
//    }
//}
