<?php

class Cpf {

    private string $numero; 

    public function __construct(string $numero) {

        $numero = filter_var($numero, FILTER_VALIDADE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
            ]);

            if ($numero === false) {
                echo "Cpf inváldo";
                exit();
            }
            
            $this->numero = $numero;
    }
}