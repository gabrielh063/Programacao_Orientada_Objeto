<?php
class Produto {
    public $Codigo;
    public $Descricao;
    public $Preco;
    public $Quantidade;
    public $Fornecedor;

    function ImprimeEtiqueta() {
        print "Código: ".$this->Codigo . '<br>';
        print "Descrição: " . $this->Descricao . '<br>';
    }
}
