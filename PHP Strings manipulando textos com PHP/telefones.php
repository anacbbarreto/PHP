<?php

$telefones = ['(24) 99999 - 9999','(23) 88888 - 9999', '(22) 77777 - 9999' ];

//unifica o array e add o separador

echo implode(array: $telefones, separator: ', ') . PHP_EOL;


?>