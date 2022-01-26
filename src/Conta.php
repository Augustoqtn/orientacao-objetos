<?php

class Conta
{
    private $titular;
    private $saldo = 0;
    private static $numeroDeContas = 0;



    public function __construct(titular $titular)
    {   
        $this->titular = $titular;
        $this->saldo = 0;
        conta::$numeroDeContas++;

    }

    public function saca(float $valorASacar)
    {
        if ($valorASacar > $this->saldo) {
            echo "saldo indisponivél!";
            return;
        }

        $this->saldo -= $valorASacar;
    }

    public function deposita(float $valorADopositar): void 
    {
        if ($valorADopositar < 0) {
            echo "o saldo para depósito precisa ser positivo!";
            return;
        }

        $this->saldo += $valorADopositar;
    }
    
    public function transfere(float $valorATransferir, conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "saldo indisponivel";
            return;
        }

        $this->saca($valorATransferir);
        $contaDestino->deposita($valorATransferir);
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public static function recuperaNumeroDeContas():int
    {
        return conta::$numeroDeContas;
    }
    
}
 