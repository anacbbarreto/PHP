<?php

$nomes = "Giovanni, João, Maria, Pedro, Ana";
$array_nomes = explode (" ", $nomes);


foreach ($array_nomes as $nome) {
     echo "<p> Olá $nome</p>";
}


$nomesJuntos = implode(",", $array_nomes);
echo $nomesJuntos;

/*

Odernando inteiros
$saldos = [
    2500,
    3000,
    1000,
    3700,
    9000
];

foreach ($saldos as $saldo) {
       sort($saldos);

    echo "O menor saldo é $saldos[0]";
    

}
*/
?>
