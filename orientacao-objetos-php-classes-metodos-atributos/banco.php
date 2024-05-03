<?php

require_once 'PHP/orientacao-objetos-php-classes-metodos-atributos/Conta.php';

$primeiraConta = new Conta();
$primeiraConta->depositar(500);
$primeiraConta->sacar(300); // isso é ok
// $primeiraConta->saldo -= 300; isso nao é ok
$primeiraConta->defineCpfTitular('123.456.789-10');

echo $primeiraConta->recuperarSaldo();
echo $primeiraConta->recuperarCpfTitular();