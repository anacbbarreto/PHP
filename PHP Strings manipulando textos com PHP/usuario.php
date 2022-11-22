<?php

$email = 'ana@alura.com.br';
$senha = '123';

if(strlen($senha) < 8){
    echo 'Senha insegura' . PHP_EOL;
} 

$posicaoDoArroba = strpos($email, '@');


$usuario = substr($email, 0, $posicaoDoArroba);

//Deixando a letra maiscula
echo mb_strtoupper($usuario). PHP_EOL;


echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;


?>