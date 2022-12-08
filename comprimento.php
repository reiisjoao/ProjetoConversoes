<?php

function polegada($num)
{
    return $num * 39.37 ;
}

function pe($num2)
{
    return $num2 * 3.281;
}

function jarda($num3)
{
    return $num3 * 1.094;
}

function milha($num4)
{

    return $num4 / 1609;
}

echo "A conversao para polegada é: ". polegada(10)."'".PHP_EOL;
echo "A conversao para pe é: ". pe (10)." ft".PHP_EOL;
echo "A conversao para jarda é: ". jarda(10)." yd".PHP_EOL;
echo "A conversao para milha é: ". milha(10)." mi".PHP_EOL;
?>