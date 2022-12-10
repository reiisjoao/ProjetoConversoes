<?php
/*
Quilograma 

libra = *2.205 = lb
tonelada= / 1000 = t
quilate= * 5000 = ct
onça = * 35.274 = oz
*/
$num = 10;

function libra($num)
{
    return $num * 2.205;
}

function tonelada($num)
{
    return $num / 1000;
}

function quilate($num)
{
    return $num * 5000;
}

function onca($num)
{
    return $num * 35.274;
}

echo "A conversão para libra é: " .libra($num). " lb." . PHP_EOL;
echo "A conversão para tonelada é: " .tonelada($num). " t." .PHP_EOL;
echo "A conversão para quilate é: " .quilate($num). " ct." .PHP_EOL;
echo "A conversão para onça é :" .onca($num). " oz.".PHP_EOL;

?>