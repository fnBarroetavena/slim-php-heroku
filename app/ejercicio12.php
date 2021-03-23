<?php
/******************************************************************************

Barroetaveña Facundo

Aplicación No 12 (Invertir palabra)
Realizar el desarrollo de una función que reciba un Array de caracteres y que invierta el orden
de las letras del Array.
Ejemplo: Se recibe la palabra “HOLA” y luego queda “ALOH”.

*******************************************************************************/

echo reverseString("HOLA");

function reverseString($toReverse){
    $stringArray = str_split($toReverse, 1);

    $toReverse = "";
    for($i = count($stringArray) - 1; $i >= 0; $i--){
        $toReverse .= $stringArray[$i];
    }

    return $toReverse;
}

