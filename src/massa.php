<?php
/*
Quilograma 

libra = *2.205 = lb
tonelada= / 1000 = t
quilate= * 5000 = ct
onça = * 35.274 = oz
*/
function libra($num)
{
    return $num * 2.205;
}

function tonelada($num1)
{
    return $num1 / 1000;
}

function quilate($num2)
{
    return $num2 * 5000;
}

function onca($num3)
{
    return $num3 * 35.274;
}

echo "A conversão para libra é: " .libra(10) . " lb." . PHP_EOL;
echo "A conversão para tonelada é: " .tonelada(10). " t." .PHP_EOL;
echo "A conversão para quilate é: " .quilate(10). " ct." .PHP_EOL;
echo "A conversão para onça é :" .onca(10). " oz.".PHP_EOL;

?>