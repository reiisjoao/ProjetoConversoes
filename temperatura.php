<?php
/*
Celsius = °C

Fahrenheit = (°c * 9/5) + 32 = °F
Kelvin = + 273.15 = K

*/

function fahrenheit($num)
{
    return ($num * 9/5) + 32;
}

function kelvin($num1)
{
    return $num1 + 273.15;
}

echo "A conversão para Fahrenheit é: " .fahrenheit(10) ." °f" .PHP_EOL;
echo "A conversão para Kelvin é: " .kelvin(10) ." k" .PHP_EOL;
?>