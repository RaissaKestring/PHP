<?php

// classe que a partir dela crio objetos e mont meu sistema
// deixa de ser orientada a funções, e passa a ser por objetos
// hierarquia: classe -> atributos, objeto -> valores
// com uma classe crio varios objetos
// classe: forma de bolo
// objeto: bolo já jeito

class Conta  {

    // classes são formas de bolo, planta de casa, então eu nãodefino os valores desas variáveis na classe, mas sim nos objetos

    // definir dados da conta
    // atributos de classe: 
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo;

    public function __construct(string $cpfTitular, string $nomeTitular) {

        $this->cpfTitular = $cpfTitular;
        $this->nomeTitular = $nomeTitular;
        $this->saldo = 0;
    }

    // THIS: referencia membros de uma classe dentro dos métodos dessa classe.
    // altero o valor do saldo que chamou a conta, e não todas 
    // funnção dentro de classe: método
    public function sacar(float $valorASacar) {

        if($valorASacar > $this->saldo) {
            echo "Saldo indisponivel";
            return; 
        }

        $this->saldo -= $valorASacar;
    }

    public function depositar(float $valorADepositar): void {
        
        if($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return; 
        }
        
            $this->saldo += $valorADepositar;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponivel";
        return;
            
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);

        }
    }

    // temos atributos privados, ninguem consegue acessá-los se não for atravez de métodos
    // então preciso de métodos pra poder acessá-los

    public function recuperarSaldo(): float {

        return $this->saldo;
    }

    public function recuperarCpfTitular(): string {

        return $this->cpfTitular;
    }

    public function recuperarNomeTitular(): string {

        return $this->nomeTitular;
    }

    // não é necessário especificar void para métodos que não retornam valores. Se você omitir o tipo de retorno, o PHP assumirá implicitamente que o método não retorna nada.

}