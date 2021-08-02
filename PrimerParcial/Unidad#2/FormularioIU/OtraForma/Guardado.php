<?php

if (isset($_POST['resolver'])) {
    if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
        echo "El resultado de la suma es: " . $_POST['numero1'] + $_POST['numero2'] . "<br>";
        echo "El resultado de la resta es: " . $_POST['numero1'] - $_POST['numero2'] . "<br>";
        echo "El resultado de la multiplicación es: " . $_POST['numero1'] * $_POST['numero2'] . "<br>";
        echo "El resultado de la división es: " . $_POST['numero1'] / $_POST['numero2'] . "<br>";
    }
}

