<?php


echo "Olá, vocês está conectado com o Sistema de Conversões!" .PHP_EOL;

    $nome = readline("Qual seu nome?".PHP_EOL);

echo "Então vamos começar $nome !" .PHP_EOL;


echo "Esse sistema trabalha com a conversão de:".PHP_EOL;

    $conversao = ['1-Comprimento', '2-Massa', '3-Velocidade', '4-Temperatura'];

        for ($i = 0; $i < count($conversao); $i++)
            {
                echo "- " .$conversao[$i] . PHP_EOL;
            }

    $unidade = readline("Qual unidade vamos converter? ".PHP_EOL);


    $num = 10;
    if ($unidade < 2)polegada($num);
    function polegada($num)
    {
        return $num * 39.37 ;
    }
    echo "A conversao para polegada é: ".polegada($num);

/*
} elseif($unidade == 2){
    echo "Conversao de Massa!";
}elseif($unidade == 3){
    echo  "Conversao de Velocidade";
} else {
    echo "Conversao de Temperatura";
}
*/
?>