<?php

include 'includes/Class.Triangulo';
$Triangulo = new CTriangulo();
echo $Triangulo->get_Formulario();
if (isset($_POST['guardar'])){
    echo "El resultado del área es igual a <strong>".$Triangulo->Area($_POST['base'],$_POST['altura'])
            . "</strong>. El resultado del perímetro es igual a <strong>".$Triangulo->Perimetro($_POST['base'],$_POST['LadoUno'],$_POST['LadoDos'])."</strong>"; 
}
