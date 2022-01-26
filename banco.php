<?php

require_once 'src/conta.php';

$primeraConta = new conta('123.123.123-00','Augusto');
$primeraConta->deposita(500);
$primeraConta-> saca(300);

echo $primeraConta->recuperaNomeTitular() .PHP_EOL;
echo $primeraConta->recuperaCpfTitular() .PHP_EOL;
echo $primeraConta->recuperaSaldo() .PHP_EOL;

