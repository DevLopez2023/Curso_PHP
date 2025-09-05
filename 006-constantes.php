<?php
define("IVA",15);
echo IVA;

//Otra forma de declarar una constante 
const descuento = 45;
echo '<br>'.descuento;

//También se puede declarar una constante de tipo array
define("AUTOS",[
    "Toyota",
    "BMW",
    "Mitsubishi"
]);
echo "<br>Mi auto es de marca". AUTOS[0];

//Las constantes son globales

function saludo(){
    echo '<br>'.descuento.' desde la función';
}

saludo();