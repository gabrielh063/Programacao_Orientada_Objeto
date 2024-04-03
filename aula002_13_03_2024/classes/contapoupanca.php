<?php

class ContaPoupanca extends Conta {
    public $aniversario;

    function __construct($agencia, $codigo, $datadecriacao, $titular, $senha, $saldo, $aniversario){
        parent::__construct($agencia, $codigo, $datadecriacao, $titular, $senha, $saldo);
        $this->aniversario = $aniversario;

    }
    function Retirar($quantia){
        if (($this->Saldo + $this->aniversario) >= $quantia ){
            parent::Retirar($quantia);
        } else {
            echo "Retirada nao permitida</br>";
            return false;
        }
        return true;
    }
}
