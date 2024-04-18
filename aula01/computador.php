<?php
class Computador
{
    var $cpu;
    function ligar()
    {
        echo "Ligando computador {$this->cpu}...";
    }
}
$obj = new Computador;
$obj->cpu =  "500Mhz\n";
$obj-> ligar();

$novoobj = new Computador;
$novoobj->cpu = readline("Insira velocidade CPU: ");
$obj-> ligar();
