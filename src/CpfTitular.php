<?php

class CpfTitular
{
    private string $cpf;

    public function __construct($cpf){
        $this->validarCpf($cpf);
        $this->cpf = $cpf;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf;
    }

    public function validarCpf($cpf): string{
        if(strlen($cpf) <= 14) {
            return $cpf;
        }else{
            echo "Erro, cpf nao pode ser maior que 14 caracteres";
            exit();
        }
    }
}