<?php
// captura valor de variavel
$umidade = readline('Insira o valor da umidade: ');
// Testa se e maior que 90. retorna booleano
$vai_chover = ($umidade>90);

// testa se $vai_chover e verdadeiro
if($vai_chover){
    echo 'esta chovendo';
} else{
    echo 'nao vai chover';
}