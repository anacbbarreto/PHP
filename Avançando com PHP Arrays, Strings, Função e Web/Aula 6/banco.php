<?php
/* para realizar os testes via web é necessario criar um banco.
 * Abre o cmd, entra na pasta do projeto e digita o comando
 * php -S localhost:8000
 * Depois abre o navegador e abre o endereço
 * localhost:8000/banco.php
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

titularComLetrasMaiusculas($contasCorrentes['123.256.789-12']);


//strings simples e strings complexas.
//strings simples
foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem(
        "$cpf $conta[titular] $conta[saldo]"
    );
}
