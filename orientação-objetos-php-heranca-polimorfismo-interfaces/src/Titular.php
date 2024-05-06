<?php

class Titular {

    private CPF $cpf;
    private string $nome;
    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $Endereco) {

        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->validarNomeTitular($nome);
        
    }

    public function recuperarCpf():string {

        return $this->cpf->recuperarNumero();
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

    public function recuperarEndereco(): Endereco {

        return $this->endereco;
    }
}