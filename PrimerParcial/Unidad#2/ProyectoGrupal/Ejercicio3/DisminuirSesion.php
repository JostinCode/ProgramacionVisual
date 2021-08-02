<?php

session_start();

$_SESSION['Sesion'] = $_SESSION['Sesion'] - 1;

echo "<h1>Ejercicio 3: Aumento y disminución del número de sesiones</h1>";
echo "<strong>Valor de la sesión:</strong> ".$_SESSION['Sesion']."<br>";

echo "<a href='AumentarSesion.php'>Aumentar el valor de la sesión</a>"."<br>";
echo "<a href='DisminuirSesion.php'>Disminuir el valor de la sesión</a>"."<br>";
echo "<a href='SalirSesion.php'>Salir de la sesión</a>";

