<?php

echo "Olá, vocês está conectado com o Sistema de Conversões!" .PHP_EOL;


$nome = readline("Qual seu nome?".PHP_EOL);
echo "Então vamos começar $nome !" .PHP_EOL;
PHP_EOL;
echo "Esse sistema trabalha com a conversão de:".PHP_EOL;
echo "1- Unidade de Comprimento." .PHP_EOL;
echo "2- Unidades de Área.".PHP_EOL;
echo "3- Medidas de Velocidade." .PHP_EOL;
echo "4- Medidas de Tempo." .PHP_EOL;
echo "5- Medidas de Temperatura." .PHP_EOL;

$conversao = readline("Qual você gostaria de converter? ") .PHP_EOL;
echo "Ok vamos converter a opção $conversão !"

?>