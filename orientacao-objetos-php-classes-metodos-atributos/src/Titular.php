<?php

class Titular {

    private string $cpf;
    private string $nome;

    public function __construct(string $cpf, string $nome) {

        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->validarNomeTitular($nome);
        
    }

    public function recuperarCpf():string {

        return $this->cpf;
    }

    public function recuperarNome():string {

        return $this->nome;
    }

    private function validarNomeTitular(string $nomeTitular) {

        if(strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}