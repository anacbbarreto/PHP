<?php

$cursos = [
    'Introdução ao PHP',
    'DDD  com PHP',
    'Coleções em PHP'
];


$cursosOo =[
    'Orientação a Objetos',
    'Object Calisthenics com PHP'
];

$novoArray = array_merge($cursos, $cursosOo); //para juntar os arrays, porem a chave altera.


$shift = array_shift($novoArray);//remove o primeiro item do array

$pop = array_pop($novoArray);//remove o ultimo item do array

$unshift = array_unshift($novoArray,'Instalando PHP');//adiciona o primeiro item do array

var_dump($novoArray);











/*
$cursos[] = 'Arrays em PHP'; // Para adicionar no item ao final do Array
 array_push(
    $cursos,
    'Orientação a Objetos',
    'Object Calisthenics com PHP'
 ); // adicionando cursos com arraypush

*/
