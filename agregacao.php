<?php

include_once '/aula02/classes/produto.class';
include_once './cesta.class';


$produto1 = new Produto;
$produto2 = new Produto;
$produto3 = new Produto;
$produto4 = new Produto;

$produto1 -> Codigo = 1;
$produto1 -> Descricao = 'Ameixa';
$produto1 -> Preco = 1.40;

$produto2 -> Codigo = 2;
$produto2 -> Descricao =  'Morango';
$produto2 -> Preco = 2.24;

$produto3 -> Codigo = 3;
$produto3 -> Descricao = 'Abacaxi';
$produto3 -> Preco = 2.86;

$cesta = new Cesta;
$cesta->AdicionaItem($produto1);
$cesta->AdicionaItem($produto2);
$cesta->AdicionaItem($produto3);
$cesta->AdicionaItem($produto4);

echo $cesta->CalculaTotal();
echo '</br>';
echo $cesta->ExibeLista();