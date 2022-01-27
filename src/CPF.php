<?php

class CPF 
{
    private $numero;

    public function __construct(string $numero)
    {
        $this->validaCpfTitular($numero);
    }



    private function validaCpfTitular(string $cpf)
    {
        if(strlen($cpf)<5) {
            echo "cpf precisa ter no minímo 5 caracters!";
            exit();
        }
        $this->numero = $numero;
    }
}