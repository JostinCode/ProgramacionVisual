<!--
Proyecto en clases
Realizar tres ejercicios en php, los mismo que tendrán lo siguiente:

- Realizar un Array que contengan los elemenos especificados en el documento.
- Realizar una calculadora con las operaciones básicas (suma, resta, multiplicación y división).
- Crear una sesión que aumente o disminuya su valor en uno.

Ejercicio #1:
-->

<html>
    <head>
        <title>Formulario para presentar una tabla</title>
    </head>
    <body>
        <div>
            <h1>Tabla con categorías de diferentes videojuegos</h1>
            <form name="Envio" action="" method="POST">

                <?php
                
//                    Variable     Llave 1       0      1       2
                $a['Videojuegos']['Acción'] = ['GTA', 'COD', 'PUGB'];
//                //               Llave 2           0          1              2
                $a['Videojuegos']['Aventura'] = ['ASSASINS', 'CRASH', 'Prince of Persia'];
//                //               Llave 3          0          1           2
                $a['Videojuegos']['Deporte'] = ['FIFA 19', 'PES 19', 'MOTO GP 19'];

                $Keys = array_keys($a['Videojuegos']);

                $Table = '<table border="1">';
                $Table .= '<tr align="center">';
                $Table .= '<td colspan="4"> <strong>Videojuegos</strong> </td>';
                $Table .= '</tr>';
                $Table .= '<tr>';
                foreach ($Keys as $Valores) {
                    $Table .= '<th>' . $Valores . '</th>';
                }
                $Table .= '</tr>';
                
                include './Categorias/Ejer1_Categoria1.php';
                
                include './Categorias/Ejer1_Categoria2.php';
                
                include './Categorias/Ejer1_Categoria3.php';

                $Table .= '</table>';

                echo $Table;
                ?>

            </form>
        </div>
    </body>
</html>

