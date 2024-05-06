<?php

require_once 'PHP/orientacao-objetos-php-classes-metodos-atributos/src/Conta.php';
require_once 'PHP/orientacao-objetos-php-classes-metodos-atributos/src/Titular.php';
require_once 'PHP/orientacao-objetos-php-classes-metodos-atributos/src/Cpf.php';

$raissa = new Titular(new CPF(numero:'123.456.789-10'), nomeTitular: 'Raissa');
$primeiraConta = new Conta($raissa);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300); // isso é ok
// $primeiraConta->saldo -= 300; isso nao é ok

echo $primeiraConta->recuperarTitular() .PHP_EOL;
echo $primeiraConta->recuperarCpfTitular() .PHP_EOL;
echo $primeiraConta->recuperarSaldo() .PHP_EOL;

$angela = new Titular(new CPF(numero:'098.765.432-12'), nomeTitular: 'Angela');
$segundaConta = new Conta($angela);

echo Conta::recuperarNumeroDeContas();