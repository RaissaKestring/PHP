<?php
/* echo "Digite um numero: \n";
$numero = (float)fgets(STDIN);
// armazena a string em uma variavel
 echo "O numero é: $numero\n";*/

 $saldo = 1_000;
 $titularConta = 'Raissa';

 echo "******************** \n";
 echo "Titular: $titularConta\n";
 echo "Saldo atual: R$ $saldo\n";
 echo "******************** \n";

 do {

    echo "1. Consultar saldo atual\n";
    echo "2. Sacar valor\n";
    echo "3. Depositar valor\n";
    echo "4. Sair\n";

    // ler a entrada do usuario

    $opcao = (int)fgets(STDIN);

    switch ($opcao) {
        case 1:
            echo "******************** \n";
            echo "Titular: $titularConta\n";
            echo "Saldo atual: R$ $saldo\n";
            echo "******************** \n";
            break;
        
        case 2:
            echo "Qual valor deseja sacar?\n";
            $valorASacar = (float)fgets(STDIN);
            if ($valorASacar > $saldo) {
                echo "Saldo insuficiente\n";
            } else {
                $saldo -= $valorASacar;
            }
            break;
        case 3:
            echo "Quanto deseja depositar?\n";
            $valorADepositar = (float) fgets(STDIN);
            $saldo += $valorADepositar;
            break;
        case 4: 
            echo "Até logo!\n";
            break;
        default:
            echo "opção inválida";
            break;
    } 
} while ($opcao != 4);