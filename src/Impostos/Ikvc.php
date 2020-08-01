<?php


namespace Alura\DesignPattern\Impostos;


use Alura\DesignPattern\Orcamento;

class Ikvc extends ImpostosCom2Aliquotas
{

    protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool
    {
        return $orcamento->valor > 300 && $orcamento->quantidadeItens > 3;
    }

    protected function calculaTaxaMinima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.02;
    }

    protected function calculaTaxaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.03;
    }


}