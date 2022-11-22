<?php

$url = 'http://alura.com.br';

if(str_starts_with($url, 'https')){
echo 'É uma URL segura';
} else {
echo 'Não é uma URL segura';
}

echo PHP_EOL;

if(str_ends_with($url, 'br')){
    echo 'É um dominio do Brasil';
    } else {
    echo 'É não um dominio do Brasil';
    }
    

?>
