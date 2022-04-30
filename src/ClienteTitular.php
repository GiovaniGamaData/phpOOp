<?php

class ClienteTitular
{
    private string $nome;
    private CpfTitular $cpfTitular;

    public function __construct($nome, $cpfTitular){
        $this->validarNome($nome);
        $this->cpfTitular  = $cpfTitular;
        $this->nome = strtoupper($nome);
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpfTitular(): string
    {
        return $this->cpfTitular->recuperaCpf();
    }

    public function validarNome($nome): string
    {
        if(strlen($nome) > 0){
            return $nome;
        }else{
            echo "Erro, nome tem que ser maior que 0 caracteres";
            exit();
        }
    }


}