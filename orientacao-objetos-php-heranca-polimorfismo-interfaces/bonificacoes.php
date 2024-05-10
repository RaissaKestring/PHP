<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Diretor, Gerente, Desenvolvedor, EditorDeVideo};

$umFuncionario = new Desenvolvedor(
    'Vinicius Dias',
    new CPF('123.456.789-10'),
    1000
);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente(
    nome: 'Patricia',
    cpf:new CPF('987.654.321-10'),
    salario:3000
);

$umDiretor = new Diretor(
    nome:'Ana Paula',
    cpf: new CPF('123.951.789-11'),
    salario:5000
);

$umEditor = new EditorDeVideo(
    nome: 'Paulo',
    cpf: new CPF('123.951.789-20'),
    salario: 1500
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal();
