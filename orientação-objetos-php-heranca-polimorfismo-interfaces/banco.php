<?php

require_once 'orientação-objetos-php-heranca-polimorfismo-interfaces/src/Conta.php';
require_once 'orientação-objetos-php-heranca-polimorfismo-interfaces/src/Endereco.php';
require_once 'orientação-objetos-php-heranca-polimorfismo-interfaces/src/Titular.php';
require_once 'orientação-objetos-php-heranca-polimorfismo-interfaces/src/Cpf.php';

$endereco = new Endereco(cidade: 'petrópolis', bairro: 'um bairro qualquer', rua: 'minha rua', numero: '71B');
$raissa = new Titular(new CPF('123.456.789-10'), 'Raissa', $endereco);
$primeiraConta = new Conta($raissa);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300); // isso é ok
// $primeiraConta->saldo -= 300; isso nao é ok

echo $primeiraConta->recuperarTitular()->recuperarNome() .PHP_EOL;
echo $primeiraConta->recuperarCpfTitular() .PHP_EOL;
echo $primeiraConta->recuperarSaldo() .PHP_EOL;

$outroEndereco = new Endereco(cidade: 'A', bairro: 'B', rua: 'C', numero: '1D');
$angela = new Titular(new CPF('098.765.432-12'), 'Angela', $outroEndereco);
$segundaConta = new Conta($angela);

echo Conta::recuperarNumeroDeContas();