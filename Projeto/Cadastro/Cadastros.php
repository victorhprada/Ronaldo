<?php


use Pessoa as GlobalPessoa;

use Mesa\Projeto\Classes\Pessoa;

$pessoa = new GlobalPessoa(
    nome: 'Victor Hugo',
    email: 'victor@teste.com',
    idade: 21
);

$pessoa2 = new GlobalPessoa(
    nome: 'Rodrigo Portugal',
    email: 'teste@teste.com.br',
    idade: 12
);

$pessoa3 = new GlobalPessoa(
    nome: 'Ricardo Magalhães',
    email: 'vida@teste.com.br',
    idade: 45
);


$cadastrosList = [$pessoa, $pessoa2, $pessoa3];

