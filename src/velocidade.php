<?php
/*
Quilometro por hora = km/h

metro por segundo = / 3.6 = m/s
milha por hora = / 1.609 = mi/h
pes por segundo = / 1.097 = ft/s
*/

function metro($num)
{
    return $num / 3.6;
}

function milha($num1)
{
    return $num1 / 1.609;
}

function pe($num2)
{
    return $num2 / 1.097;
}

echo "A conversão para metro por segundo é: ".metro(10) ." m/s." .PHP_EOL;
echo "A conversão para milha por hora é: ".milha(10) . " mi/h.".PHP_EOL;
echo "A conversão para pé por segundo é: ".pe(10) . " ft/s.".PHP_EOL;

?>