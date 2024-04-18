<?php

$xml = simplexml_load_file('paises.xml');


// exibe as informacoes do objeto criado
echo 'Nome: '.$xml->nome.'<br>';
echo 'Idioma: '.$xml->idioma.'<br>';
echo 'Moeda: '.$xml->moeda.'<br>';
echo 'Populacao: '.$xml->populacao.'<br>';