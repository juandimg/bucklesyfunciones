<?php


echo("clase 4 buckles, arreglos y funciones");

//array indexado
$arreglo=array("Juan","Maria","James","Sandra");
echo("<br>");
print_r($arreglo);

echo("<br> ...............");



//array asociativo

$arreglo=array('usuario1'=>"Juan",'usuario2'=>"Maria",'usuario3'=>"James",'usuario4'=>"sandra"); 
echo("<br>");
print_r($arreglo);

echo("<br> ...............");

//tamaño de arreglo
$tamano=count($arreglo);
echo("<br>");
echo("El tamaño de nuestro arreglo es: ". $tamano);
echo("<br> ...............");

//Bucle for
for($centinela=0;$centinela<=10;$centinela++){
    echo("<br>El valor de centinela es: ".$centinela."<br>");
}
//Bucle for para recorrer arreglos

echo("<br> ...............");
$arreglo=array("Juan","Maria","James","Sandra");
for($centinela=0;$centinela<count($arreglo);$centinela++){
echo("<br>".$arreglo[$centinela]."<br>");
}

//Bucle foreach para recorrer arreglos

echo("<br> ...............");
$arreglo=array('usuario1'=>"Juan",'usuario2'=>"Maria",'usuario3'=>"James",'usuario4'=>"sandra");
foreach($arreglo as $clave=>$valor){
    echo "<br>"."La clave es: ".$clave;
    echo "<br>".($valor)."<br>";
    echo("<br>");

} 

//bucle foreach paraarreglo indexado
echo("<br> ...............");
$arreglo=array("Juan","Maria","James","Sandra");
foreach($arreglo as  $clave=>$valor){
    echo "<br> El valor del cajon es: ".$clave;
    echo "<br> El valor del cajon es: ".$valor;
}

//arreglo multidimencional(arreglo de arreglos)
$usuarios=array(
    'usuario1'=>array('nombre'=>"Juan",'edad'=>30 , 'sexo'=>"Masculino"),
    'usuario2'=>array('nombre'=>"Maria",'edad'=>25 , 'sexo'=>"Femenino"),
    'usuario3'=>array('nombre'=>"James",'edad'=>28 , 'sexo'=>"Masculino"),
    'usuario4'=>array('nombre'=>"Sandra",'edad'=>32, 'sexo'=>"Femenino")
);
?>