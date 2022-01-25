<?php

require_once 'src/conta.php';

$primeraConta = new conta();
$primeraConta->deposita(500);
$primeraConta-> saca(300);
$primeraConta->defineCpfTitular('123.123.123-00');
$primeraConta->defineNomeTitular('Augusto');


echo $primeraConta->recuperaSaldo();
echo $primeraConta->recuperaCpfTitular();
echo $primeraConta->recuperaNomeTitular();