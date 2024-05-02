<?php

echo "Bem vindo ao screen match!
";

$nomeFilme = "Top Gun - Maverick";
$anoLancamento = 2022;
// pega o primeiro numero, sem ele, a variavel armazena todos os dados que o usuario digitar
// ?? significa nulo

$quantidadeDeNotas = $argc - 1;
$somaDeNotas = 0;

// (inicialização; condição da repetição; incremento)
/*for ($contador = 1; $contador < $argc; $contador += 1) {
    $somaDeNotas =+ $argv[$contador];
}; */

for ($contador = 1; $contador < $argc; $contador++) {
    $somaDeNotas += $argv[$contador];
}

$notaFilme = $somaDeNotas / $quantidadeDeNotas;

$anoLancamento = 2022;

echo "Nome do filme: " . $nomeFilme . "\n";
echo "Nota do filme: $notaFilme\n";

if ($anoLancamento >= 2022) {
    echo "Esse filme é um lançamento\n";
} else if ($anoLancamento >2020 && $anoLancamento <= 2022) {
    echo "Esse filme ainda é novo";
} else {
    echo "Esse filme não é um lançamento\n";
}

$notasParaOFilme = [
    10,
    9,
    8,
    7.5,
    5,
    6.8
];

var_dump($notasParaOFilme);