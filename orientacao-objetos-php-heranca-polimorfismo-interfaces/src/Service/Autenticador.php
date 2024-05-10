<?php

namespace Alura\Banco\Service;

use Alura\Boleto\Modelo\Autenticavel;

class Autenticador {

    public function tentaLogin($autenticavel, string $senha): void {

        if ($autenticavel->podeAutenticar($senha)) {
            echo "ok. Usuário logado no sistema" . PHP_EOL;
        } else {
            echo "Ops. Senha incorreta" . PHP_EOL;
        }
    }
}