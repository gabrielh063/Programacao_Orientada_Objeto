<?php

class Conta {
    public $Agencia;
    public $Codigo;
    public $DataDeCriacao;
    public $Titular;
    public $Senha;
    public $Saldo;
    public $Cancelada;

    function __construct($agencia, $codigo, $datadecriacao, $titular, $senha, $saldo){
        $this->Agencia = $agencia;
        $this->Codigo = $codigo;
        $this->DataDeCriacao = $datadecriacao;
        $this->Titular = $titular;
        $this->Senha = $senha;
        $this->Saldo =$saldo;     
        
        $this->Depositar($saldo);
        $this->Cancelada = false;
    }
    
    function __destruct(){
        echo "</br>
        Objeto Conta {$this->Codigo} de {$this->Titular->Nome}
        Finalizada...
        </br>";
    }


    /*
    Método Retirar
    Diminui o Saldo em $quantia
    */
    function Retirar($quantia){
        if ($quantia>0){
            $this->Saldo -= $quantia;
        }
    }

    /*
    Método Depositar
    Aumenta Saldo em $Quantia
    */
    function Depositar($quantia){
        if ($quantia>0){
            $this->Saldo += $quantia;
        }
    }

    /*
    Método ObterSaldo
    Retorna o saldo atual
    */
    function ObterSaldo(){
        return $this->Saldo;
    }

}
