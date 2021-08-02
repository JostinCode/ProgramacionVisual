<?php

/*
 * Proyecto en clases
 * Realizar tres ejercicios en php, los mismo que tendrán lo siguiente:

 * - Realizar un Array que contengan los elemenos especificados en el documento de especificaciones.
 * - Realizar una calculadora con las operaciones básicas (suma, resta, multiplicación y división).
 * - Crear una sesión que aumente o disminuya su valor en uno.
 */

//Ejercicio #1:
//$Tabla = array(
//    $Accion = ['GTA', 'COD', 'PUGB'],
//    $Aventura = ['ASSASINS', 'CRASH', 'Prince of Persia'],
//    $Deporte = ['FIFA 19', 'PES 19', 'MOTO GP 19']
//);

$Tabla = array(
    'Accion' => ['GTA', 'COD', 'PUGB'],
    'Aventura' => ['ASSASINS', 'CRASH', 'Prince of Persia'],
    'Deporte' => ['FIFA 19', 'PES 19', 'MOTO GP 19']
);

foreach ($Tabla as $Clave => $Valor) {
    echo $Clave."<br>";
}

echo "<br>";
var_dump($Tabla);

