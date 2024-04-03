<?php

class ContaCorrente extends Conta {
    public $limite;

    function __construct($agencia, $codigo, $datadecriacao, $titular, $senha, $saldo, $limite){
        parent::__construct($agencia, $codigo, $datadecriacao, $titular, $senha, $saldo);
        $this->limite = $limite;

    }
    function Retirar($quantia){
        if (($this->Saldo + $this->limite) >= $quantia ){
            parent::Retirar($quantia);
        } else {
            echo "Retirada nao permitida</br>";
            return false;
        }
        return true;
    }
}
