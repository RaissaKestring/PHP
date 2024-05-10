<?php

use Alura\Banco\Service\Autenticador;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Gerente;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new Gerente(
    nome: 'João da Silva', 
    cpf: new CPF (numero: '423.344.212-43'), 
    salario: 10000
);

$autenticador->tentaLogin($umDiretor, senha: '1234');