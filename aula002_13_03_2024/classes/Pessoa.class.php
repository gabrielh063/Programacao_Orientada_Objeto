<?php

class Pessoa {
    public $Codigo;
    public $Nome;
    public $Altura;
    public $Idade;
    public $Nascimento;
    public $Escolaridade;
    public $Salario;

    // Método Crescer
    // Aumenta a altura em centímetros

    function __construct($Codigo, $Nome, $Altura, $Idade, $Nascimento, $Escolaridade, $Salario){
        $this->Codigo = $Codigo;
        $this->Nome = $Nome;
        $this->Altura = $Altura;
        $this->Idade = $Idade;
        $this->Nascimento = $Nascimento;
        $this->Escolaridade = $Escolaridade;
        $this->Salario = $Salario;
    }

    function __destruct() {
        echo "Objeto {$this->Nome} Finalizando... </br>";
    }

    function Crescer($centimetros){
        if ($centimetros>0) {
            $this->Altura += $centimetros;
        }
    }

    // Método Formar
    // Altera a escolaridade para $titulacao

    function Formar($titulacao) {
        $this->Escolaridade = $titulacao;
    }

    // Método Envelhecer
    // Aumenta a idade em $Anos

    function Envelhecer($anos){
        if ($anos>0){
            $this->Idade += $anos;
        }
    }
}