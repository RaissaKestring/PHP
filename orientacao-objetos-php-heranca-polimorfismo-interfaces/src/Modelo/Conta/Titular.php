<?php

namespace src\Banco\Modelo\Conta;

use src\Banco\Modelo\Pessoa;
use src\Banco\Modelo\Cpf;
use src\Banco\Modelo\Endereco;

// Titular é uma pessoa
class Titular extends Pessoa
{
    private $endereco;

    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }
}

