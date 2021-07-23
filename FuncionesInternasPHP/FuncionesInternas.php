<?php

echo "<h1> Funciones internas de PHP </h1>";

//Función #1: strlen
echo "<h2> Función strlen: </h2>";
echo '- Cuenta la cantidad de caracteres que hay en un String o cadena. <strong>Ejemplo:</strong> <br>';
$Nombre = 'Jostin';
echo "<strong> Letras de mi nombre: </strong>"."Mi nombre ".$Nombre." tiene <strong>".strlen($Nombre)." letras</strong>."; //6 carácteres

//Función #2: substr
echo "<h2> Función substr: </h2>";
echo '- Permite extraer parte de una cadena, o mejor dicho una cantidad de bytes. <strong>Ejemplo:</strong> <br>';
$Cadena = 'Girasol'; //[0]=>G, [1]=>i, [2]=>r, [3]=>a, [4]=>s, [5]=>o, [6]=>l
echo "En la palabra <strong>Girasol</strong> podemos extraer de la posición 4 a la 6 obteniendo la nueva"
." palabra <strong>'".substr($Cadena, 4, 6)."'</strong>. <br>"; //La palabra sol

//Función #3: getdate
echo "<h2> Función getdate: </h2>";
echo '- Adquiere y muestra información de la fecha y hora mediante un formato de array asociativo. <strong>Ejemplo:</strong> <br>';
print_r(getdate()); //Los días de la semana partes del 0 hasta 6, o sea del Domingo hasta el Sabado
echo "<br> <strong>Donde los días de la semana parten del 0 hasta el 6 y los días del año comienzan desde 0 hasta 365.</strong> <br>";
//Otro ejemplo con una estructura diferente de la función localtime:
echo "<strong>Ejemplo similar con la función localtime: </strong>";
print_r(localtime());
print_r(localtime(time(), true));

//Función #4: gettype
echo "<h2> Función gettype: </h2>";
echo '- Tiene la peculiar función de obtener el tipo de una variable, como un integer o double. <strong>Ejemplos:</strong> <br>';
print "<strong>Ejemplo #1:</strong> <br>";
$TipoVariable = true;
echo "La variable <strong>TipoVariable</strong> con valor true (".$TipoVariable.") es de tipo <strong>".gettype($TipoVariable)."</Strong>.<br>";
print "<strong>Ejemplo #2:</strong> <br>";
$datos = array(100, 2.5, NULL, new stdClass, 'Animales');
$N = 1;
foreach ($datos as $valores) {
    echo "El valor ".$N." del array es de tipo: <strong>".gettype($valores)."</strong>. <br>";
    $N ++;
}
echo "Además, la variable que los contiene es de tipo: <strong>".gettype($datos)."</strong>. <br>";

//Función #5: boolval
echo "<h2> Función boolval: </h2>";
echo '- Permite saber el valor booleano de una variable o de un dato. <strong>Ejemplos:</strong> <br>'; //donde true=1 y false=0 o nada a la vez
$ValorBooleano1 = 345;
$ValorBooleano2 = '';
echo "El valor booleano de un string como mi apellido es: <strong>".boolval('Vera')." (true)</strong>. <br>";
echo 'El valor de 0 es:                           '.'<strong>'.(boolval(0) ? 'true' : 'false')."</strong> <br>";
echo 'El valor de 42 es:                          '.'<strong>'.(boolval(42) ? 'true' : 'false')."</strong> <br>";
echo 'El valor de 0.0 es:                         '.'<strong>'.(boolval(0.0) ? 'true' : 'false')."</strong> <br>";
echo 'El valor de 4.2 es:                         '.'<strong>'.(boolval(4.2) ? 'true' : 'false')."</strong> <br>";
echo 'El valor de "" es:                          '.'<strong>'.(boolval("") ? 'true' : 'false')."</strong> <br>";
echo 'El valor de "string" es:                    '.'<strong>'.(boolval("string") ? 'true' : 'false')."</strong> <br>";
echo 'El valor de "0" es:                         '.'<strong>'.(boolval("0") ? 'true' : 'false')."</strong> <br>";
echo 'El valor de "1" es:                         '.'<strong>'.(boolval("1") ? 'true' : 'false')."</strong> <br>";
echo 'El valor de [1, 2] es:                      '.'<strong>'.(boolval([1, 2]) ? 'true' : 'false')."</strong> <br>";
echo 'El valor de [] es:                          '.'<strong>'.(boolval([]) ? 'true' : 'false')."</strong> <br>";
echo 'El valor de stdClass es:                    '.'<strong>'.(boolval(new stdClass) ? 'true' : 'false')."</strong> <br>";
echo 'El valor de la varibale $ValorBooleano1 es: '.'<strong>'.boolval($ValorBooleano1)."</strong> <br>";
echo 'El valor de la varibale $ValorBooleano2 es: '.'<strong>'.boolval($ValorBooleano2)."</strong> <br>";
