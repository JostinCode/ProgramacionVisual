<html>
    <head>
        <title>Formulario para presentar una tabla</title>
    </head>
    <body>
        <div>
            <h1>Tabla con categorías de diferentes videojuegos</h1>
            <form name="Envio" action="" method="POST">
                <table aling="center" border="1">
                    <tr>
                        <td colspan="4"> <strong>Videojuegos</strong> </td>
                    </tr>
                    <tr>
                        <td> <strong>Acción:</strong> </td>
                        <td> GTA </td>
                        <td> COD </td>
                        <td> PUGB </td>
                    </tr>
                    <tr>
                        <td> <strong>Aventura:</strong> </td>
                        <td> ASSASINS </td>
                        <td> CRASH </td>
                        <td> Prince of Persia </td>
                    </tr>
                    <tr>
                        <td> <strong>Deporte:</strong> </td>
                        <td> FIFA 19 </td>
                        <td> PES 19 </td>
                        <td> MOTO GP 19 </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>


<?php

/*
 * Proyecto en clases
 * Realizar tres ejercicios en php, los mismo que tendrán lo siguiente:

 * - Realizar un Array que contengan los elemenos especificados en el documento.
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

function TablaHMTL() {
    $html = '';
}

