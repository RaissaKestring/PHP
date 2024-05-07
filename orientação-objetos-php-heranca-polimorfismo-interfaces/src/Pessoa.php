<?php

namespace src\Banco\Modelo;

class Pessoa {

    // protected: permito o acesso na classe atual, e nas classes filhas.
    protected $nome;
    private $cpf;

    public function __function(string $nome, CPF $cpf) {

        $this->validarNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperarNome(): string {

        return $this->nome;
    }

    public function recuperarCpf(): string {

        return $this->cpf->recuperarNumero();
    }

    protected function validarNomeTitular(string $nomeTitular) {

        if(strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}