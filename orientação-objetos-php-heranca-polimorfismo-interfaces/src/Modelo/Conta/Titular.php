<?php

namespace src\Banco\Modelo\Conta;

use src\Banco\Modelo\Pessoa;
use src\Banco\Modelo\Cpf;
use src\Banco\Modelo\Endereco;
// Titular é uma pessoa
class Titular extends Pessoa {

    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $Endereco) {

        // acessa a classe mãe, classe que está sendo herdada, que nesse caso, é Pessoa
        // acessa os atributos passados como parâmetro (nome e cpf), dados como protected em Pessoa.
        parent:: __construct($nome, $cpf);
        $this->endereco = $endereco;
        
    }

    public function recuperarEndereco(): Endereco {

        return $this->endereco;
    }
}