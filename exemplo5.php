<?php
$xml = simplexml_load_file('paises2.xml');
$xml->populacao = '220 Milhoes';
$xml->religiao = 'cristianismo';
$xml->geografia->clima = 'Temperado';
$xml->addChild('presidente','chapolin colorado');
echo $xml->asXML();
file_put_contents('paises2.xml', $xml->asXML());
