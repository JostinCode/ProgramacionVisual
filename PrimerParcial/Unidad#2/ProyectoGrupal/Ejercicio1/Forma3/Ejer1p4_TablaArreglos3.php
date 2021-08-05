<?php

echo "<h1> Tabla con categorías de diferentes videojuegos </h1>";

$Tabla = array(
    'Acción' => ['GTA', 'COD', 'PUGB'],
    'Aventura' => ['ASSASINS', 'CRASH', 'Prince of Persia'],
    'Deporte' => ['FIFA 19', 'PES 19', 'MOTO GP 19']
);

$Categorias = array_keys($Tabla);

echo '<form name="Envio" action="" method="POST">
            <table aling="center" border="1">
                <tr align="center">
                    <td colspan="4"> <strong>Videojuegos</strong> </td>
                </tr>
                <tr align="center">';
                    foreach ($Categorias as $Val) {
                        echo '<td> <strong>' . $Val . '</strong> </td>';
                    }
                echo
                '</tr>
                <tr align="center">
                    <td> ' . $Tabla['Acción'][0] . ' </td>
                    <td> ' . $Tabla['Aventura'][0] . ' </td>
                    <td> ' . $Tabla['Deporte'][0] . ' </td>
                </tr>
                <tr align="center">
                    <td> ' . $Tabla['Acción'][1] . ' </td>
                    <td> ' . $Tabla['Aventura'][1] . ' </td>
                    <td> ' . $Tabla['Deporte'][1] . ' </td>
                </tr>
                <tr align="center">
                    <td> ' . $Tabla['Acción'][2] . ' </td>
                    <td> ' . $Tabla['Aventura'][2] . ' </td>
                    <td> ' . $Tabla['Deporte'][2] . ' </td>
                </tr>
            </table>
        </form>';

