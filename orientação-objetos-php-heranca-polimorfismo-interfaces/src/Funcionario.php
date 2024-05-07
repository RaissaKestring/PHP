<?php

namespace Modelo;

// Funcionario é uma pessoa
class Funcionario extends Pessoa {

    private string $cargo;

    public function __construct(string $nome, CPF $cpf, string $cargo) {

        // acessa a classe mãe, classe que está sendo herdada, que nesse caso, é Pessoa
        // acessa os atributos passados como parâmetro (nome e cpf), dados como protected em Pessoa.
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
    }

    public function recuperarCargo(): string
    {
        return $this->cargo;
    }

    public function alterarNome(string $nome): void {

        $this->validarNomeTitular($nome);
        $this->nome = $nome;
    }
}