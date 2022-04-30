<?php

require_once 'src/Conta.php';
require_once 'src/ClienteTitular.php';
require_once 'src/CpfTitular.php';

$GIOVANI = new ClienteTitular("giovani", new CpfTitular ("49590674895"));
$primeiraConta = new Conta($GIOVANI);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

$giovaniSilva = new ClienteTitular("giovani silva gama", new CpfTitular("49532142432"));
$segundaConta = new Conta($giovaniSilva);

$sara = new ClienteTitular("sara alice de jesus", new CpfTitular("495232344432"));
$terceiraConta = new Conta($sara);

echo "Saldo: ", $primeiraConta->recuperaSaldo() . PHP_EOL;
echo "Cpf do titular: ", $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo "Nome titular: ", $primeiraConta->recuperaNomeTitular() . PHP_EOL;

echo "Numero de contas: ", Conta::recuperaNumeroDeContas() . PHP_EOL;


