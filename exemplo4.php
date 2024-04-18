<?php
$xml = simplexml_load_file('paises2.xml');

echo 'Nome: '.$xml->nome.'<br>';
echo 'Idioma: '.$xml->idioma.'<br>';
echo "<br>";
echo "***informacoes geograficas***<br>";
echo 'Clima: '.$xml->geografia->clima.'<br>';
echo 'Idioma: '.$xml->geografia->costa.'<br>';
echo 'Moeda: '.$xml->geografia->pico.'<br>';

