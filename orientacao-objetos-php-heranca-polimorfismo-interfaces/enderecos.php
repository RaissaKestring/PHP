<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco (cidade: 'qualquer', bairro: 'bairro  qualquer', rua: 'minha rua',numero: '71B');

$outroEndereco = new Endereco (cidade: 'qualquer', bairro: 'bairro  qualquer', rua: 'minha rua',numero: '71B');

echo $umEndereco . PHP_EOL;
echo $outroEndereco . PHP_EOL;