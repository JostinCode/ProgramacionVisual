<?php

include 'includes/Class.Rectangulo';
$Rectangulo = new CRectangulo();
echo $Rectangulo->getCon_Formulario();
if (isset($_POST['guardar'])){
    echo "El resultado del área es igual a <strong>".$Rectangulo->Area($_POST['Largo'], $_POST['Ancho'])
            . "El resultado del perímetro es igual a <strong>".$Rectangulo->Perimetro($_POST['Largo'], $_POST['Ancho'])."</strong>"; 
}
