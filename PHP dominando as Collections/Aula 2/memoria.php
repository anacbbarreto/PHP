<?php

$array = new SplFixedArray(32769);

for ($i = 0; $i < 32769; $i++) {
    $array[$i] = $i;
}

var_dump(memory_get_usage() /1024 / 1024);




/*
Memoria utilizada
$array = []; // memoria para 0 item
$array[] = 1; // memoria para 2^1 = 2
$array[] = 2; // memoria para 2^1 = 2
$array[] = 3; // memoria para 2^2 = 4
$array[] = 4; // memoria para 2^2 = 4
$array[] = 5; // memoria para 2^3 = 8
