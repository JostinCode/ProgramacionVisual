<?php

session_start();

$_SESSION['Sesion'] = $_GET['Sesion'];

echo "<h1>Aumento y disminución del número de sesiones</h1>";
echo "<strong>Valor de la sesión:</strong> " . $_SESSION['Sesion'] . "<br>";

echo "<a href='AumentarSesion.php'>Aumentar el valor de la sesión</a>" . "<br>";
echo "<a href='DisminuirSesion.php'>Disminuir el valor de la sesión</a>";

