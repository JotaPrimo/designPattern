<?php


namespace Alura\DesignPattern;


use Alura\DesignPattern\Descontos\DescontoMaisDe500;
use Alura\DesignPattern\Descontos\DescontoMaisde5Itens;
use Alura\DesignPattern\Descontos\SemDesconto;

class CalculadoraDeDescontos
{
    public function calcularDescontos(Orcamento $orcamento): float
    {
        $cadeia_de_descontos = new DescontoMaisde5Itens(
            new DescontoMaisDe500( new SemDesconto()));

        return $cadeia_de_descontos->calculaDesconto($orcamento);
    }


}