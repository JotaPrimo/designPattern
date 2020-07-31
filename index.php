<?php

use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Impostos\Iss;
use Alura\DesignPattern\Impostos\Icms;
use Alura\DesignPattern\CalculadoraDeDescontos;
require "vendor/autoload.php";

/*
$calc = new CalculadoraDeImpostos();
$orcamento = new Orcamento();
$orcamento->valor = 100;
*/

$calcDesc = new CalculadoraDeDescontos();
$orcamento = new Orcamento();
$orcamento->valor = 600;
$orcamento->quantidadeItens = 5;
echo $calcDesc->calcularDescontos($orcamento);
