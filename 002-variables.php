<?php
$data = "PHP";
$version = 8;
echo "I love $data $version!"; #En la misma cadena
echo "I love " . $txt . "!"; #concatenación

#Impresión del tipo de dato y valor
var_dump(5); #enteros
var_dump("Oscar"); #cadenas
var_dump(3.14); #Decimales
var_dump(true); #Booleanas
var_dump(NULL); #nulas

#Arrays
$colores = array("rojo", "verde", "azul");
$numeros = [10, 20, 30];
var_dump($colores);
var_dump($numeros);

#Array asociativo
persona = [
        "nombre" => "Oscar",
        "edad" => 28,
        "ciudad" => "Portoviejo"
];

#Asignación múltiple
$x = $y = $z = 50;