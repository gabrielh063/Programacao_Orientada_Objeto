<?php

$carros = ["Gol", 'nivus', 'marea', 'pampa', 'peugeot'];
print_r ($carros, "<br>");

var_dump ($carros);

foreach ($carros as $car) {
    echo $car, "<br>";
}

asort ($carros);

var_dump ($carros);