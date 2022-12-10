<?php

$num = 10;
function polegada($num)
{
    return $num * 39.37 ;
}

function pe($num)
{
    return $num * 3.281;
}

function jarda($num)
{
    return $num * 1.094;
}

function milha($num)
{

    return $num / 1609;
}

echo "A conversao para polegada é: ". polegada()."'".PHP_EOL;
echo "A conversao para pe é: ". pe ()." ft".PHP_EOL;
echo "A conversao para jarda é: ". jarda()." yd".PHP_EOL;
echo "A conversao para milha é: ". milha()." mi".PHP_EOL;
?>