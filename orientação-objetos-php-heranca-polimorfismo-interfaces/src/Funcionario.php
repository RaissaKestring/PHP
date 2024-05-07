<?php

class Funcionario extends Pessoa {

    private string $cargo;

    public function __construct(string $nome, CPF $cpf, string $cargo) {

        $this->validarNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->cargo = $cargo;
    }

    public function recuperarCargo(): string
    {
        return $this->cargo;
    }
}