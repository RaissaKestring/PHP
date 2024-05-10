<?php

namespace Alura\Banco\Modelo;

trait AcessoPropriedades {

// uso trai como uma forma de atribuir as classes através de use
// reutilização de um código em várias classes, posso atribuir um trait em uma classe
// utiliza funcionalidades, diferente de interface.

    public function __get(string $nomeAtributo) {

        // Rua -> recuperaRua
        $metodo = 'recupera' . ucfirst($nomeAtributo);
        return $this->$metodo();
    }
}