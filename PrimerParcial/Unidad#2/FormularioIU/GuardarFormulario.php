<?php

//Forma #1:
//if (isset($_POST['suma'])) {
//    
//    if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
//        echo "La suma es: " . $_POST['numero1'] + $_POST['numero2'] . "<br>";
//    }
//    
//} else if (isset($_POST['resta'])) {
//    
//    if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
//        echo "La resta es: " . $_POST['numero1'] - $_POST['numero2'] . "<br>";
//    }
//    
//} else if (isset($_POST['multiplicacion'])) {
//    
//    if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
//        echo "La multiplicación es: " . $_POST['numero1'] * $_POST['numero2'] . "<br>";
//    }
//    
//} else if (isset($_POST['division'])) {
//    
//    if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
//        echo "La división es: " . $_POST['numero1'] / $_POST['numero2'] . "<br>";
//    }
//    
//}

//Forma #2:
if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
    
    if (isset($_POST['suma'])) {
        echo "El resultado de la suma es: " . $_POST['numero1'] + $_POST['numero2'] . "<br>";
    }
    if (isset($_POST['resta'])) {
        echo "El resultado de la resta es: " . $_POST['numero1'] - $_POST['numero2'] . "<br>";
    }
    if (isset($_POST['multiplicacion'])) {
        echo "El resultado de la multiplicación es: " . $_POST['numero1'] * $_POST['numero2'] . "<br>";
    }
    if (isset($_POST['division'])) {
        echo "El resultado de la división es: " . $_POST['numero1'] / $_POST['numero2'] . "<br>";
    }
    
}

