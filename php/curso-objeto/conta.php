<?php

class Conta
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo = 0; //sempre que eu criar um objeto do tipo Conta o saldo vai receber valor 0.

    public function saca(float $valorASacar): void // uma funçao dentro de uma classe é chamada de método
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
        } else {
            $this->saldo -= $valorASacar;
        }
    }
    public function deposita (float $valorADepositar): void // uma funçao dentro de uma classe é chamada de método
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return; // tira a necessidade de usar o else pq ele ja para de executar se executar o if
        } 
        $this->saldo += $valorADepositar;
    }
    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível!";
            return; // é sempre bom evitar usar else, por isso usamos o return
        } 
        $this->saca($valorATransferir);
        $contaDestino->deposita($valorATransferir);
    }
    public function defineCpfTitular(string $cpf): void
    {
        $this->cpfTitular = $cpf;
    }
    public function defineNomeTitular(string $nome): void
    {
        $this->nomeTitular = $nome;
    }
    public function mostraSaldo(): float
    {
        return $this->saldo;
    }
    public function mostraCPF(): string
    {
        return $this->cpfTitular;
    }
    public function mostraTitular(): string
    {
        return $this->nomeTitular;
    }
} 