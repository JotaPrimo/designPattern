<?php

use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Impostos\Iss;
use Alura\DesignPattern\Impostos\Icms;
require "vendor/autoload.php";

$calc = new CalculadoraDeImpostos();
$orcamento = new Orcamento();
$orcamento->valor = 100;

echo $calc->calcula($orcamento, new Icms());
//echo $calc->calcula($orcamento, new Iss());