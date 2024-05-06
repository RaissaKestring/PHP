<?php

require_once 'orientação-objetos-php-heranca-polimorfismo-interfaces/src/Conta.php';
require_once 'orientação-objetos-php-heranca-polimorfismo-interfaces/src/Titular.php';
require_once 'orientação-objetos-php-heranca-polimorfismo-interfaces/src/Cpf.php';

$raissa = new Titular(new CPF('123.456.789-10'), 'Raissa');
$primeiraConta = new Conta($raissa);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300); // isso é ok
// $primeiraConta->saldo -= 300; isso nao é ok

echo $primeiraConta->recuperarTitular()->recuperarNome() .PHP_EOL;
echo $primeiraConta->recuperarCpfTitular() .PHP_EOL;
echo $primeiraConta->recuperarSaldo() .PHP_EOL;

$angela = new Titular(new CPF('098.765.432-12'), 'Angela');
$segundaConta = new Conta($angela);

echo Conta::recuperarNumeroDeContas();