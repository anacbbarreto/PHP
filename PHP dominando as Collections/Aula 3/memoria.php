<?php

$array = new SplDoublyLinkedList(); // lista duplamente ligada

for ($i = 0; $i < 32769; $i++) {
    $array->push($i);
}

var_dump(memory_get_usage() / 1024 / 1024);

/* 
Uma lista ligada mas sem a referência para o item anterior.