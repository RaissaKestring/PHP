<?php

require_once 'PHP/orientacao-objetos-php-classes-metodos-atributos/Conta.php';

$primeiraConta = new Conta(cpfTitular:'123.456.789-10', nomeTitular: 'Raissa');
$primeiraConta->depositar(500);
$primeiraConta->sacar(300); // isso é ok
// $primeiraConta->saldo -= 300; isso nao é ok

echo $primeiraConta->recuperarNomeTitular() .PHP_EOL;
echo $primeiraConta->recuperarCpfTitular() .PHP_EOL;
echo $primeiraConta->recuperarSaldo() .PHP_EOL;

$segundaConta = new Conta(cpfTitular:'098.765.432-12', nomeTitular: 'Angela');