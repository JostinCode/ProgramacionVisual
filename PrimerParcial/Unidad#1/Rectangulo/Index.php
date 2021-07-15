<?php

include 'includes/Class.Rectangulo';
$Rectangulo = new CRectangulo();
echo $Rectangulo->get_Formulario();
if (isset($_POST['guardar'])){
    echo "El resultado del área es igual a <strong>".$Rectangulo->Area($_POST['largo'],$_POST['ancho'])
            . "</strong>. El resultado del perímetro es igual a <strong>".$Rectangulo->Perimetro($_POST['largo'],$_POST['ancho'])."</strong>"; 
}
