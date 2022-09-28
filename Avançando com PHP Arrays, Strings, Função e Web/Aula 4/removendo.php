<?php

/**
 * para incluir o arquivo porem se o arquivo nao existir, apresenta apenas uma mensagem 
 * include 'funcoes.php';
 */

/**
 * arquivo é obrigatorio e nao compila
 *require 'funcoes.php';
 */


// verifica se o arquivo já foi importado antes.
require_once 'funcoes.php';


$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.789-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];


//add o cpf da conta que deseja fazer a função
$contasCorrentes['123.456.789-11'] = sacar($contasCorrentes['123.456.789-11'], 500);

$contasCorrentes['123.256.789-12'] = depositar(
    $contasCorrentes['123.256.789-12'],
    900
);


$contasCorrentes['123.456.789-10'] = sacar(
    $contasCorrentes['123.456.789-10'],
    500
);

$contasCorrentes['123.456.789-11'] = sacar(
    $contasCorrentes['123.456.789-11'], 
    200
);


unset($contasCorrentes['123.456.789-11']);

titularComLetrasMaiusculas($contasCorrentes['123.256.789-12']);


//strings simples e strings complexas.
//strings simples
foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem(
        "$cpf $conta[titular] $conta[saldo]"
    );
}

/*strings complexas para acessar o array da mesma forma de utilizamos.
foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem(
        "$cpf {$conta['titular']} {$conta['saldo']}"
    );
}
 * 
 */