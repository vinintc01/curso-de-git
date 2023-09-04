<?php

$car = [
    'marca' => 'Chevrolet',
    'modelo' => 'Chevette',
    'ano' => 1999,
    'cor' => 'Amarelo'
];

$modelo = $car["modelo"];
$ano = $car["ano"];

print_r($car);
echo "<br>";

echo "O modelo do carro é um $modelo, e o ano deste carro é $ano";
?>