<?php

class Pessoa {

    public $nome;
    public $cpf;

    public function __function(string $nome, CPF $cpf) {

        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperarNome(): string {

        return $this->nome;
    }

    public function recuperarCpf(): string {

        return $this->cpf->recuperarNumero();
    }

    public function validarNomeTitular(string $nomeTitular) {

        if(strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}