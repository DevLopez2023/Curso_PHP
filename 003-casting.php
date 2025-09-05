<?php
/*
En PHP el casting se logra de la siguiente manera:
    (string) - Converts to data type String
    (int) - Converts to data type Integer
    (float) - Converts to data type Float
    (bool) - Converts to data type Boolean
    (array) - Converts to data type Array
    (object) - Converts to data type Object
    (unset) - Converts to data type NULL (Obsoleto a partir de PHP 5.x.x, se recomienda asignar directamente el valor NULL)
*/

#Casteando a String
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

//resultados
var_dump($a);
echo '<br>';
var_dump($b);
echo '<br>';
var_dump($c);
echo '<br>';
var_dump($d);
echo '<br>';
var_dump($e);
echo '<br>';
echo '--------------------------------------------';
echo '<br>';


#Casteando a entero
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "25 kilometros"; // String
$d = "Kilometros 25"; // String
$e = "hello"; // String
$f = true;    // Boolean
$g = NULL;    // NULL

$a = (int) $a;
$b = (int) $b;
$c = (int) $c;
$d = (int) $d;
$e = (int) $e;
$f = (int) $f;
$g = (int) $g;

//resultados
var_dump($a);
echo '<br>';
var_dump($b);
echo '<br>';
var_dump($c);
echo '<br>';
var_dump($d);
echo '<br>';
var_dump($e);
echo '<br>';
var_dump($f);
echo '<br>';
var_dump($g);
echo '<br>';
echo '--------------------------------------------';
echo '<br>';

#Casteando a flotante
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "25 Kilometros"; // String
$d = "Kilometros 25"; // String
$e = "hello"; // String
$f = true;    // Boolean
$g = NULL;    // NULL

$a = (float) $a;
$b = (float) $b;
$c = (float) $c;
$d = (float) $d;
$e = (float) $e;
$f = (float) $f;
$g = (float) $g;

//resultados
var_dump($a);
echo '<br>';
var_dump($b);
echo '<br>';
var_dump($c);
echo '<br>';
var_dump($d);
echo '<br>';
var_dump($e);
echo '<br>';
var_dump($f);
echo '<br>';
var_dump($g);
echo '<br>';
echo '--------------------------------------------';
echo '<br>';

#Casteando a booleano
$a = 5;       // Integer
$b = 5.34;    // Float
$c = 0;       // Integer
$d = -1;      // Integer
$e = 0.1;     // Float
$f = "hello"; // String
$g = "";      // String
$h = true;    // Boolean
$i = NULL;    // NULL

$a = (bool) $a;
$b = (bool) $b;
$c = (bool) $c;
$d = (bool) $d;
$e = (bool) $e;
$f = (bool) $f;
$g = (bool) $g;
$h = (bool) $h;
$i = (bool) $i;

//resultados
var_dump($a);
echo '<br>';
var_dump($b);
echo '<br>';
var_dump($c);
echo '<br>';
var_dump($d);
echo '<br>';
var_dump($e);
echo '<br>';
var_dump($f);
echo '<br>';
var_dump($g);
echo '<br>';
var_dump($h);
echo '<br>';
var_dump($i);
echo '<br>';
echo '--------------------------------------------';
echo '<br>';



#Casteando a Array
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (array) $a;
$b = (array) $b;
$c = (array) $c;
$d = (array) $d;
$e = (array) $e;

//resultados
var_dump($a);
echo '<br>';
var_dump($b);
echo '<br>';
var_dump($c);
echo '<br>';
var_dump($d);
echo '<br>';
var_dump($e);
echo '<br>';
echo '--------------------------------------------';
echo '<br>';

#Casteando a Objeto
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (object) $a;
$b = (object) $b;
$c = (object) $c;
$d = (object) $d;
$e = (object) $e;

//resultados
var_dump($a);
echo '<br>';
var_dump($b);
echo '<br>';
var_dump($c);
echo '<br>';
var_dump($d);
echo '<br>';
var_dump($e);
echo '<br>';
echo '---------------------------------------------;
echo '<br>';
