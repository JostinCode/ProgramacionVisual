<?php
/*
 * Proyecto en clases
 * Realizar tres ejercicios en php, los mismo que tendrán lo siguiente:

 * - Realizar un Array que contengan los elemenos especificados en el documento.
 * - Realizar una calculadora con las operaciones básicas (suma, resta, multiplicación y división).
 * - Crear una sesión que aumente o disminuya su valor en uno.
 */

//Ejercicio #1:
//Otra forma de definir el arreglo:
//$Tabla = array(
//    $Acción = ['GTA', 'COD', 'PUGB'],
//    $Aventura = ['ASSASINS', 'CRASH', 'Prince of Persia'],
//    $Deporte = ['FIFA 19', 'PES 19', 'MOTO GP 19']
//);

include 'Arreglo/Ejer1_Arreglo.php';

$Categorias = array_keys($Tabla);

?>

<html>
    <head>
        <title>Formulario para presentar una tabla</title>
    </head>
    <body>
        <div>
            <h1>Tabla con categorías de diferentes videojuegos</h1>
            <form name="Envio" action="" method="POST">
                <table aling="center" border="1">
                    <tr align="center">
                        <td colspan="4"> <strong>Videojuegos</strong> </td>
                    </tr>
                    <tr>
                        <td align="center"> <strong> <?php echo $Categorias[0] ?>: </strong> </td>
                        <td> <?php echo $Tabla['Acción'][0] ?> </td>
                        <td> <?php echo $Tabla['Acción'][1] ?> </td>
                        <td> <?php echo $Tabla['Acción'][2] ?> </td>
                    </tr>
                    <tr>
                        <td align="center"> <strong> <?php echo $Categorias[1] ?>: </strong> </td>
                        <td> <?php echo $Tabla['Aventura'][0] ?> </td>
                        <td> <?php echo $Tabla['Aventura'][1] ?> </td>
                        <td> <?php echo $Tabla['Aventura'][2] ?> </td>
                    </tr>
                    <tr>
                        <td align="center"> <strong> <?php echo $Categorias[2] ?>: </strong> </td>
                        <td> <?php echo $Tabla['Deporte'][0] ?> </td>
                        <td> <?php echo $Tabla['Deporte'][1] ?> </td>
                        <td> <?php echo $Tabla['Deporte'][2] ?> </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>

