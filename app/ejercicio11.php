<?php

/********************************************************************************************************************************
    Barroetaveña Facundo

Aplicación No 11 (Potencias de números)
Mostrar por pantalla las primeras 4 potencias de los números del uno 1 al 4 (hacer una función
que las calcule invocando la función pow).

********************************************************************************************************************************/

for($i = 1; $i < 5; $i++){
    for($j = 0; $j < 4; $j++){
        echo "$i^$j = " . getPotencia($i, $j) . "<br>";
    }
    echo "______________________<br>";
}

function getPotencia($num, $potencia){
    return pow($num, $potencia);
} 