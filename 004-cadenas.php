<?php

/*
Un string es una cadena de caractéres, por ejemplo: "Hola devs".
*/

$curso = "Fundamentos de Programacion";
$profesor = "Oscar López";
echo "Curso de $curso <br>Dirigido por $profesor";

#Funciones con cadenas
#strlen() --> Función que retorna la cantidad de caractéres de una cadena.
echo '<br>'.strlen($curso); //27

#str_word_count() --> Función que retorna la cantidad de palabras en una cadena.
echo '<br>'.str_word_count($curso); //3

#strpos() --> Función que retorna la posición del primer caractér de un término que se encuentre en la cadena.
echo '<br>'.strpos("Hola cracks","cracks"); //5

#strtoupper() --> Función que retorna en mayúsculas un string
$u = "Aprendiendo php";
echo '<br>'.strtoupper($u);

#strtolower() --> Función que retorna en minúsculas un string
$l = "BASE DE DATOS CREADA...";
echo '<br>'.strtolower($l);

#str_replace() --> Función que permite reemplazar una palabra nueva sobre una encontrada en la cadena.
$frase = "Codificar es el arte de escribir lo que pensamos de manera lógica";
echo '<br>'.str_replace("arte","habilidad",$frase);

#strrev() --> Función que retorna la cadena invertida.
$n = "Oscar";
echo '<br>'.strrev($n);

#trim() --> Función que retorna la cadena sin espacios antes y después del texto actual
$usuario = " Oscar López ";
echo '<br>'.trim($usuario);

#ucfirst --> Función que retorna la cadena con el primer caracter en mayúscula
$f1 = "diario Expreso";
echo '<br>'.ucfirst($f1);

#lcfirst() --> Función que retorna la cadena con el primer caracter en minúscula
$f2 = "Revisión";
echo '<br>'.lcfirst($f2);

#explode() --> Función que permite transformar un string a un array o segmentarlo mediante algún patrón
$equipos = "Barcelona Emelec LDUP Macara";
$e = explode(" ",$equipos);
echo '<br>';
print_r($e);

#substr() --> Función que permite extraer de una cadena caractéres o palabras
$j = "Oscar Lopez";
echo substr($j,0,5); //Oscar

$k = "Docente Universitario";
echo '<br>'.substr($k,-13);
// substr($k,-13,13);