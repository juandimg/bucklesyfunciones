<?php


include('funciones.php');


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
echo("<br>");
echo("<br> ...............");

print_r ($usuarios);

//ciclo foreach para acceder a los elemntos del arreglo multidicional
echo("<br> ...............");
echo("<br>");
foreach($usuarios as $clavesArreglosUnidimensionales=>$arreglosUnidimensionales){
  echo($clavesArreglosUnidimensionales);
  echo("<br>");
  print_r($arreglosUnidimensionales);
    echo("<br>");
    foreach($arreglosUnidimensionales as $claves=>$valores){
        echo("<br> ...............");
        echo($claves);
        echo("<br>");
        echo($valores);
        echo("<br>");

    }
}

//calcular la edad
echo("<br> ...............<br>");
calcularEdad(1995);
echo("<br>");
calcularEdad2(1995,1996);

$edad3=calcularEdad3(1990,2020);
echo("La edad de la persona es: ".$edad3);


//arreglo que se llena con una funcion
$edades=array('edad1'=>calcularEdad3(1990,2020),'edad2'=>calcularEdad3(1991,2020));
print_r($edades);
?>