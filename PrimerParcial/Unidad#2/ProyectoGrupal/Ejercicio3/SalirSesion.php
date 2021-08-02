<?php

session_start();

session_destroy();

echo "<h1>Se ha cerrado la sesión</h1>";
echo "<a href='Ejer3_Sesiones.php'>Regresar a la sesión</a>";

