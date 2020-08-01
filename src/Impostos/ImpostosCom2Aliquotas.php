<?php


namespace Alura\DesignPattern\Impostos;


use Alura\DesignPattern\Orcamento;

abstract class ImpostosCom2Aliquotas implements Imposto
{
    public function calculaImposto(Orcamento $orcamento): float
    {
        if ($this->deveAplicarTaxaMaxima($orcamento)):
            return $this->calculaTaxaMaxima($orcamento);
        endif;


        return $this->calculaTaxaMinima($orcamento);
    }

    abstract protected function deveAplicarTaxaMaxima(Orcamento $orcamento):bool;
    abstract protected function calculaTaxaMaxima(Orcamento $orcamento):float ;
    abstract protected function calculaTaxaMinima(Orcamento $orcamento):float;

}