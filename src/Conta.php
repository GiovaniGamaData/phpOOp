<?php

class Conta
{
    private ClienteTitular $titular;
    private float $saldo;
    private static $numeroDeContas = 0;

    public function __construct($titular){
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct(){
        if(self::$numeroDeContas > 1){
            echo "Existe contas ativas";
            exit;
        }
    }

    public function saca(float $valorAsacar): void
    {
        if ($valorAsacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorAsacar;
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpfTitular();
    }

    public static function recuperaNumeroDeContas(): int{
        return self::$numeroDeContas;
    }

}
