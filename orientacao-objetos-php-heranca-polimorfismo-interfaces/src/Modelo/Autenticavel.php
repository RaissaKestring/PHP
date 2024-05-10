<?php

namespace Alura\Banco\Modelo;

interface Autenticavel {

// uso interface para chamar atravez de implements em uma classe, porém não atribui funcionalidade.

    public function podeAutenticar(string $senha): bool;
}