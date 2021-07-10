<?php

include 'includes/Class.TrianguloRectangulo';
$TrianguloRectangulo = new CTrianguloRectangulo();
echo $TrianguloRectangulo->get_Formulario();
if (isset($_POST['guardar'])){
    echo "El resultado del área es igual a <strong>".$TrianguloRectangulo->Area($_POST['base'],$_POST['altura'])
            . "</strong>. El resultado del perímetro es igual a <strong>".$TrianguloRectangulo->Perimetro($_POST['base'],$_POST['altura'])."</strong>"; 
}
