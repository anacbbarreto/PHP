<?php

$altura = 1.70;
$peso = 80 ;

$imc = $peso / ($altura* $altura);
      
echo "Seu IMC é de $imc. Você está com o IMC ";

if ($imc < 18.5) {
    echo "abaixo";
} elseif ($imc < 25) {
    echo "dentro";
} else {
    echo "acima";
}

echo " do recomendado";