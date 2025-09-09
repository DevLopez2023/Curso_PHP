<?php

#Operadores aritméticos
#+, -, *, /, %, **
echo "Suma: ".(5 + 5); //10
echo '<br>';
echo "Resta: ".(20 - 4); //16
echo '<br>';
echo "Multiplicación: ".(2 * 20); //40
echo '<br>';
echo "División: ".(80 / 40); //2
echo '<br>';
echo "Módulo: ".(100 % 2); //(0)
echo '<br>';
echo "Exponenciación: ".(2 ** 3); //8
echo "<br>-----------------------------<br>";

#Operadores de asignación
#asignación básica
$x = 20;
echo $x.'<br>'; //20

#suma
$x += 10; 
echo $x.'<br>'; //30

#resta
$x -= 5;
echo $x.'<br>'; //25

#multiplicación
$x *= 2;
echo $x.'<br>'; //50

#division
$x /= 10;
echo $x.'<br>'; //5

#módulo
$x %= 5;
echo $x; //0;

#exponenciación
$x = 5;
$x **= 2;
echo '<br>'.$x; //25;
echo "<br>-----------------------------<br>";

#Operadores de comparación (R = boolean)
$a = 10; $b = 20; $c = 30; $d = 10;
#igual
echo ($a == $b).'<br>'; //false (0)

#idéntico
echo ($a === $d).'<br>'; //true (1)

#No igual
echo ($a != $b).'<br>'; //true (1)

#No igual
echo ($b != $d).'<br>'; //true (1)

#No idéntico
echo ($a !== $b).'<br>'; //true (1)

#mayor que
echo ($d > $c).'<br>'; //false (0)

#menor que
echo ($a < $b).'<br>'; //true (1)

#mayor o igual que
echo ($c >= $d).'<br>'; //true (1)

#menor o igual que
echo ($d <= $a).'<br>'; //true (1)

#Operadores de incremento/decremento
#Pre-incremento
$o = 20;
echo $o++; //20
echo "<br>".$o; //21

#Pre-decremento
$o2 = 30;
echo "<br>".$o2--; //30
echo "<br>".$o2; //29

#Post-incremento
echo "<br>".++$o; //22

#Post-decremento
echo "<br>".--$o2; //28
echo "<br>-----------------------------<br>";

#Operadores lógicos
#and
echo (3>2 and 10<9).'<br>'; //false (0)

#or
echo (10>8 or 20>6).'<br>'; //true (1)

#&&
echo (3>2 && 10<9).'<br>'; //false (0)

#||
echo (10>8 || 20>6).'<br>'; //true (1)

#!
echo !(4>2).'<br>'; //false (0)
echo !(4==3) && (5===5); //true (1)


#Operadores de concatenación
$frase = "Hola soy "."Alex";
$frase2 = " y te enseñaré los fundamentos de PHP";
$frase .= $frase2;
echo '<br>'.$frase;

#Operadores de arrays
$array1 = [1,2,3,4,5];
$array2 = [6,7,8,9,10];
$array = array_merge($array1,$array2); //(usado cuando se trata de arrays indexados)
echo "<br>";
print_r($array);

$usuario = array(
    "nombre" => "Alex",
    "edad" => 28,
    "ciudad" => "Portoviejo"
);
$producto = array(
    "producto" => "Teclado HP",
    "precio" => 18.50
);

$factura = $usuario + $producto;
echo "<br>";
var_dump($factura);

#Operadores ternarios
$edad = 20;
$estado = $edad > 18 ? "Mayor de edad" : "Menor de edad";
echo "<br>Estado: $estado";

$color = "amarillo";
$semaforo = $color == "verde" ? "Pase" : ($color == "amarillo" ? "Advertencia" : "Alto");
echo '<br>Estado del semaforo: '.$semaforo;