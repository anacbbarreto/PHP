<?php


$csv = ',...,Ana Barreto, 28,,.,';

// aparando inicio e fim da string
echo trim($csv, ',.') . PHP_EOL;

// aparando inicio 
echo ltrim($csv, ',.') . PHP_EOL;

// aparando fim da string
echo rtrim($csv, ',.') . PHP_EOL;

?>