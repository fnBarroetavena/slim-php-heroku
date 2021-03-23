<?php
/******************************************************************************

Barroetaveña Facundo

Aplicación No 14 (Par e impar)
Crear una función llamada esPar que reciba un valor entero como parámetro y devuelva TRUE
si este número es par ó FALSE si es impar.
Reutilizando el código anterior, crear la función esImpar.
*******************************************************************************/

$numero = 16;

echo $numero . "<br>";
echo "Es par?: " . (esPar($numero) ? "si" : "no") . "<br>";
echo "Es impar?: " . (esImpar($numero) ? "si" : "no");

function esPar($num){
    return ($num % 2 == 0);
}

function esimpar($num){
    return !esPar($num);
}


