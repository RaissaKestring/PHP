<?php

// classe que a partir dela crio objetos e mont meu sistema
// deixa de ser orientada a funções, e passa a ser por objetos
// hierarquia: classe -> atributos, objeto -> valores
// com uma classe crio varios objetos
// classe: forma de bolo
// objeto: bolo já jeito

class Conta  {

    // classes são formas de bolo, planta de casa, então eu nãodefino os valores desas variáveis na classe, mas sim nos objetos

    // definir dados da contaque tenhamos também a validação do CPF, que é mais complexa. Manter todo esse código no construtor provavelmente traria problemas de legibilidade.


    // atributos de classe: 
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo;
    private static $numeroDeContas = 0;

    // método construtor: é chamado automaticamente sempre que um novo objeto daquela classe é criado. O método construtor da classe Conta recebe o CPF e o nome do titular como parâmetros e inicializa esses valores juntamente com o saldo da conta. 

    public function __construct(string $cpfTitular, string $nomeTitular) {

        $this->nomeTitular = $nomeTitular;
        $this->validarNomeTitular($nomeTitular);
        $this->cpfTitular = $cpfTitular;
        $this->saldo = 0;

        // static: chamado atravez do nome da classe
        Conta::$numeroDeContas++;
    }

    //não é mais referenciado por nenhum código do programa e está sendo removido da memória.
    //Isso sugere que essa propriedade está sendo usada para acompanhar o número total de objetos da classe Conta criados. Então, sempre que um objeto Conta é destruído, o método destrutor é chamado automaticamente e o número total de contas é atualizado.
    
    public function __destruct() {

        self::$numeroDeContas--;
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

    private function validarNomeTitular(string $nomeTitular) {

        if(strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

    public static function recuperarNumeroDeContas(): int {

        return Conta::$numeroDeContas;
        // pode ser return static ou self
    }

    // não é necessário especificar void para métodos que não retornam valores. Se você omitir o tipo de retorno, o PHP assumirá implicitamente que o método não retorna nada.

}