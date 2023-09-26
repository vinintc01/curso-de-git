<?php

// Com o AND = &&, os dois lados devem ser iguais

if (5 > 10 && 10 > 5) {
    echo "Entrou no if 1 <br>";
}

if (50 > 10 && 10 > 5) {
    echo "Entrou no if 2 <br>";
}

$a = 10;
$b = 5;
$c = 12;
$d = 12;

if ($a > $b && $c == $d) {
    echo "Entrou no if 3 <br>";
}
if ($b <=  $a && $c >= $d) {
    echo "Entrou no if 4 <br>";
}

?>