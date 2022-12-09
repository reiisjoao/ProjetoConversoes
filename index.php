<?php

echo "Olá, vocês está conectado com o Sistema de Conversões!" .PHP_EOL;
$nome = readline("Qual seu nome?".PHP_EOL);
echo "Então vamos começar $nome !" .PHP_EOL;

echo "Esse sistema trabalha com a conversão de:".PHP_EOL;

$conversao = ["Comprimento", "Massa", "Velocidade", "Temperatura"];

for ($i = 0; $i < count($conversao); $i++){
    echo "- " .$conversao[$i] . PHP_EOL;
}


readline("Qual unidade de medida você gostaria de converter? ") .PHP_EOL;
readline("Qual valor você gostaria de converter? ") .PHP_EOL;
?>