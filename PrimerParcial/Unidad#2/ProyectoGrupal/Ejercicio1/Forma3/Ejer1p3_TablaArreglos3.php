<?php

echo "<h1> Tabla con categorías de diferentes videojuegos </h1>";

$Tabla = array(
    'Acción' => ['GTA', 'COD', 'PUGB'],
    'Aventura' => ['ASSASINS', 'CRASH', 'Prince of Persia'],
    'Deporte' => ['FIFA 19', 'PES 19', 'MOTO GP 19']
);

$Categorias = array_keys($Tabla);
$Contenido = array_values($Tabla);
$ValoresC1 = array_values($Contenido[0]);
$ValoresC2 = array_values($Contenido[1]);
$ValoresC3 = array_values($Contenido[2]);

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
                    <td> ' . $ValoresC1[0] . ' </td>
                    <td> ' . $ValoresC2[0] . ' </td>
                    <td> ' . $ValoresC3[0] . ' </td>
                </tr>
                <tr align="center">
                    <td> ' . $ValoresC1[1] . ' </td>
                    <td> ' . $ValoresC2[1] . ' </td>
                    <td> ' . $ValoresC3[1] . ' </td>
                </tr>
                <tr align="center">
                    <td> ' . $ValoresC1[2] . ' </td>
                    <td> ' . $ValoresC2[2] . ' </td>
                    <td> ' . $ValoresC3[2] . ' </td>
                </tr>
            </table>
        </form>';

