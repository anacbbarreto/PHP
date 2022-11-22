<?php

$nome = 'Ana Barreto';
$email = '  ana@alura.com.br';
$senha = 'áéíóú';

echo mb_strlen($senha). PHP_EOL;

if(mb_strlen($senha) < 8){
    echo 'Senha insegura' . PHP_EOL;
} 

$posicaoDoArroba = strpos($email, '@');


$usuario = substr($email, 0, $posicaoDoArroba);

//strtoupper - Deixando a letra maiscula
//mb - armazenando multibyte em variavelph
echo mb_strtoupper($usuario). PHP_EOL;
echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;

list($nome, $sobrenome) = explode(' ', $nome);

echo 'Nome: ' . $nome . PHP_EOL;
echo 'Sobrenome: ' . $sobrenome . PHP_EOL;


// criando um array e separando por virgula
$csv = 'Ana Barreto, 28, ana@alura.com.br';
var_dump(explode(',', $csv));

//trim retira os espaços em branco do inicio/fim.
echo trim($email) . PHP_EOL;

?>