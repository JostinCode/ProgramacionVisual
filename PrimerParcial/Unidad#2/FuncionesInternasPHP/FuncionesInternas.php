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

//Función #6: count
echo "<h2> Función count: </h2>";
echo '- Permite contar todos los elementos de un arreglo o de un objeto. <strong>Ejemplo:</strong> <br>';
$Arreglo = array(2,'cadena', 3.56, 2*2);
echo "El arreglo contiene los siguientes elementos: <br>";
for ($incrementable=0; $incrementable<=3; $incrementable++) {
    echo ($incrementable+1).".- <strong>".$Arreglo[$incrementable]."</strong> <br>";
}
echo "Por lo que la cantidad de elementos es: <strong>".count($Arreglo)."</strong>. <br>";

//Función #7: date_default_timezone_get
echo "<h2> Función date_default_timezone_get: </h2>";
echo '- Obtiene la zona horaria predeterminada, ( la establecida por defecto). <strong>Ejemplo:</strong> <br>';
echo "La <strong>zona horaria local</strong> que tengo por defecto es: <strong>".date_default_timezone_get()."</strong>. <br>";

//Función #8: max y min
echo "<h2> Función max y min: </h2>";
echo '- La función MAX() permite encontrar el valor más grande dentro de un arreglo o una serie de elementos, y la función MIN() el valor más pequeño.'
.' La función realiza esta comparación de valores de izquierda a derecha (en caso de haber dos elementos iguales escogerá el primero)'
        .' y considerando siempre a los array como superiores. <strong>Ejemplo:</strong> <br>';
echo "<strong>Función max(): </strong> <br>";
$ValorMaxMin = [2, 56, 2.4646, 43, 0.1];
echo "Los elementos del arreglo son: <br>";
foreach ($ValorMaxMin as $valorMaMi) {
    var_dump($valorMaMi);
    echo "<br>";
}
echo "El <strong>valor máximo</strong> del arreglo es: <strong>".max($ValorMaxMin)."</strong> <br>";
echo "El <strong>valor mínimo</strong> del arreglo es: <strong>".min($ValorMaxMin)."</strong> <br>";

//Función #9: sort
echo "<h2> Función sort: </h2>";
echo '- La función SORT ordena los elementos de un array. <strong>Ejemplo:</strong> <br>';
$NuevoArray = ['Pan', 'Gato', 'Dibujo', 'A', 'Programa'];
echo "Elementos del array: <br>";
foreach ($NuevoArray as $Clave1 => $Otrovalor1) {
    echo "Puesto #".$Clave1." = <strong>".$Otrovalor1."</strong>. <br>";
}
sort($NuevoArray);
echo "Los elementos ordenados son: <br>";
foreach ($NuevoArray as $Clave2 => $Otrovalor2) {
    echo "Puesto [".$Clave2."] = <strong>".$Otrovalor2."</strong>. <br>";
}

//Función #10: array_unique
echo "<h2> Función array_unique: </h2>";
echo '- Elimina valores duplicados en un array (siempre y cuando los elementos tengan las mismas dimensiones o la misma cantidad de caracteres). <strong>Ejemplo:</strong> <br>';
$OtroArreglo = array(2, 'Jostin', 2.5, 0, ' jostin', 2, '', '2', 0);
echo "Elementos: <br>";
foreach ($OtroArreglo as $value1) {
    echo "'<strong>".$value1."</strong>' <br>";
}
echo "Elementos no duplicados: <br>";
$ArregloNoDuplicado = array_unique($OtroArreglo);
foreach ($ArregloNoDuplicado as $value2) {
    echo "'<strong>".$value2."</strong>' <br>";
}

//Función #11: exp
echo "<h2> Función exp: </h2>";
echo '- Calcula el exponencial de Euler (e = 2,7182...). <strong>Ejemplo:</strong> <br>';
echo "El resultado de elevar '<strong>e</strong>' a <strong>100.2</strong> es: ".exp(100.2);

//Función #12: round
echo "<h2> Función round: </h2>";
echo '- Redondea un número con coma flotante (float), la función lo hará por defecto aproximandose al valor más sercano o'
.' dependiendo del modo que se especifique, ya sea acercandose hacia la derecha o hacia la izquierda cuando el valor está a medio camino. <strong>Ejemplo:</strong> <br>';
echo "Al redondear <strong>45.75</strong> el resultado nos da: <strong>".round(45.75)."</strong> <br>";

//Función #13: ftp_mkdir y ftp_rmdir
echo "<h2> Función ftp_mkdir y ftp_rmdir: </h2>";
echo '- La primera de las dos funciones sirve para crear un directorio en el servidor FTP, y la segunda elimina el directorio ya creado. <strong>Ejemplo:</strong> <br>';
//echo "Creando el directorio: <br>";
//$dir = 'www';
//$conn_id = ftp_connect($ftp_server);
//$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);
//Creando el directorio:
//if (ftp_mkdir($conn_id, $dir)) {
//    echo "creado con éxito $dir\n";
//} else {
//    echo "Ha habido un problema durante la creación de $dir\n";
//}
//echo "Eliminando el directorio: <br>";
//Eliminando el directorio:
//if (ftp_rmdir($conn_id, $dir)) {
//    echo "Se ha eliminado correctamente el directorio $dir\n";
//} else {
//    echo "Hubo un problema al eliminar el directorio $dir\n";
//}
//ftp_close($conn_id);

//Función #14: mysqli_connect y mysqli_close
echo "<h2> Función mysqli_connect y mysqli_close: </h2>";
echo '- Mysqli_connect sirve para realizar una conexión al servidor de MySQL,'
.' por otra parte la función mysqli_close cierra la conexión que se había realizado anteriormente. <strong>Ejemplo:</strong> <br>';
echo "Realizando la conexión a MySQL. Estado de la conexión: <br>";
$enlace = mysqli_connect("localhost", "root", "1234", "bd_prueba"); //Conexión a MySQL
if (!$enlace) {
    echo "<strong>Error:</strong> No se pudo conectar a MySQL.".PHP_EOL."<br>";
    echo "<strong>errno de depuración:</strong> ".mysqli_connect_errno().PHP_EOL."<br>";
    echo "<strong>error de depuración:</strong> ".mysqli_connect_error().PHP_EOL."<br>";
    exit;
}
echo "<strong>Éxito:</strong> Se realizó una conexión apropiada a MySQL!".PHP_EOL."<br>";
echo "<strong>Información del host:</strong> ".mysqli_get_host_info($enlace).PHP_EOL.".<br>";
echo "(Cerrando la conexión). <br>";
mysqli_close($enlace); //Cierra la conexión

//Función #15: gethostname
echo "<h2> Función gethostname: </h2>";
echo '- Obtiene el nombre del host estándar para el equipo local, (devolviendo siempre un string). <strong>Ejemplo:</strong> <br>';
echo "El nombre de mi host local es: <strong>".gethostname()."</strong>. <br>";

//Función #16: getimagesize
echo "<h2> Función getimagesize: </h2>";
echo '- Nos permite saber el tamaño de una imagen (devolviendo las dimensiones y el tipo de la imagen). <strong>Ejemplo:</strong> <br>';
//$tamaño = getimagesize($nombre_fichero);
//$fp = fopen($nombre_fichero, "rb");
//if ($tamaño && $fp) {
//    header("Content-type: {$tamaño['mime']}");
//    fpassthru($fp);
//    exit;
//} else {
//    // error
//    echo "Error, imagen no reconocible";
//}

//Función #17: exif_imagetype
echo "<h2> Función exif_imagetype: </h2>";
echo '- Determina el tipo de una imagen, cuyos posibles valores devueltos pueden ser de tipo PNG, GIF, JPEG, etc. <strong>Ejemplo:</strong> <br>';
//if (exif_imagetype('imagen.gif') != IMAGETYPE_GIF) {
//    echo 'La imagen no es gif';
//}

//Función #18: is_numeric
echo "<h2> Función is_numeric: </h2>";
echo '- Comprueba si una variable o valor es un número o un string numérico devolviendo true si es correcto, (en otro caso el resultado devolverá falso). <strong>Ejemplo:</strong> <br>';
$Numero = 2.354636;
$NoNumero = 'Hola';
echo "El valor de '<strong>".$Numero."</strong>' es numérico? R: <strong>".(is_numeric($Numero)? 'true' : 'false')."</strong> <br>";
echo "El valor de '<strong>".$NoNumero."</strong>' es numérico? R: <strong>".(is_numeric($NoNumero)? 'true' : 'false')."</strong> <br>";

//Función #19: tan
echo "<h2> Función tan: </h2>";
echo '- Saca la tangente de un número. <strong>Ejemplo:</strong> <br>';
$Tan = 3/2;
echo "La tangente de <strong>".$Tan."</strong> es igual a: <strong>".tan($Tan)."</strong> <br>";

//Función #20: sqrt y pow
echo "<h2> Función sqrt y pow: </h2>";
echo '- La función sqrt permite obtener la raíz cuadrada de un número y la función pow permite realizar potencias. <strong>Ejemplo:</strong> <br>';
echo "La raíz cuadrada de <strong>225</strong> es: <strong>".sqrt(225)."</strong> <br>";
echo "El resultado de elevar <strong>15</strong> (base) a <strong>5</strong> (exponente) es: <strong>".pow(15, 5)."</strong> <br>";
