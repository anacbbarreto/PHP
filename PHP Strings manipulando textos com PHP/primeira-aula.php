<?php


$nome = 'Ana Barreto';

$DaFamilia = str_contains($nome, 'Barreto');

if($DaFamilia){
    echo "$nome é da minha familia" . PHP_EOL;
} else{
    echo "$nome não é da minha familia" . PHP_EOL;

}

?>