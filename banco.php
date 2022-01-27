<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';



$primeraConta = new Conta(new Titular('123.123.123-00','Augusto'));
$primeraConta->deposita(500);
$primeraConta-> saca(300);

echo $primeraConta->recuperaNomeTitular() .PHP_EOL;
echo $primeraConta->recuperaCpfTitular() .PHP_EOL;
echo $primeraConta->recuperaSaldo() .PHP_EOL;
var_dump($primeraConta);



echo Conta::recuperaNumeroDeContas();
