<?php

class Conta
{
    private $cpfTitular;
    private $nomeTitular;
    private $saldo = 0;



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

    public function defineCpfTitular(string $cpf):void
    {
        $this->cpfTitular = $cpf;
    }

    public function recuperaCpfTitular():string
    {
        return $this->cpfTitular; 
    }

    public function defineNomeTitular (string $nome):void
    {
        $this->nomeTitular = $nome;
    }

    public function recuperaNomeTitular():string
    {
        return $this->nomeTitular; 
    }
}
 