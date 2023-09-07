<?php

$x = 10;

$y =& $x;

echo "$x <br>";

echo "$y <br>";

$y = 20;

echo "<br>";

echo "Atribuição após referência <br>";

echo "$x <br>";

echo "$y <br>";

$x = 45;

echo "<br>";

echo "Atribuição após referência 2 <br>";

echo "$x <br>";

echo "$y <br>";

?>