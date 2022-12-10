<?php
/*
Quilometro por hora = km/h

metro por segundo = / 3.6 = m/s
milha por hora = / 1.609 = mi/h
pes por segundo = / 1.097 = ft/s
*/

$num = 10;

function metro($num)
{
    return $num / 3.6;
}

function milha($num)
{
    return $num / 1.609;
}

function pe($num)
{
    return $num / 1.097;
}

echo "A conversão para metro por segundo é: ".metro($num) ." m/s." .PHP_EOL;
echo "A conversão para milha por hora é: ".milha($num) . " mi/h.".PHP_EOL;
echo "A conversão para pé por segundo é: ".pe($num) . " ft/s.".PHP_EOL;

?>