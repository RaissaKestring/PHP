<?php

require_once 'orientação-objetos-php-heranca-polimorfismo-interfaces/src/Banco/Modelo/Conta/Conta.php';
require_once 'orientação-objetos-php-heranca-polimorfismo-interfaces/src/Banco/Modelo/Endereco.php';
require_once 'orientação-objetos-php-heranca-polimorfismo-interfaces/src/Banco/Modelo/Pessoa.php';
require_once 'orientação-objetos-php-heranca-polimorfismo-interfaces/src/Banco/Modelo/Conta/Titular.php';
require_once 'orientação-objetos-php-heranca-polimorfismo-interfaces/src/Banco/Modelo/Cpf.php';

use src\Banco\Modelo\Conta\Titular;
use src\Banco\Modelo\Endereco;
use src\Banco\Modelo\Cpf;
use src\Banco\Modelo\Conta\Conta;

$endereco = new Endereco(cidade: 'petrópolis', bairro: 'um bairro qualquer', rua: 'minha rua', numero: '71B');
$raissa = new Titular(new CPF('123.456.789-10'), 'Raissa', $endereco);
$primeiraConta = new Conta($raissa);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300); // isso é ok
// $primeiraConta->saldo -= 300; isso nao é ok

echo $primeiraConta->recuperarTitular()->recuperarNome() .PHP_EOL;
echo $primeiraConta->recuperarCpfTitular() .PHP_EOL;
echo $primeiraConta->recuperarSaldo() .PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco);
$segundaConta = new Conta($patricia);

$outroEndereco = new Endereco(cidade: 'A', bairro: 'B', rua: 'C', numero: '1D');
$outra = new Conta(new Titular(new CPF('098.765.432-12'), 'Angela', $outroEndereco));
unset($segundaConta);

echo Conta::recuperarNumeroDeContas();