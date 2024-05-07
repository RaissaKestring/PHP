<?php

class Titular extends Pessoa {

    private CPF $cpf;
    private string $nome;
    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $Endereco) {

        $this->cpf = $cpf;
        $this->nome = $nome;
        
    }

    public function recuperarEndereco(): Endereco {

        return $this->endereco;
    }
}