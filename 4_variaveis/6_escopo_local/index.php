<?php

$x = 99;

echo "$x GLOBAL <br>";

function teste(){
    $x = 5;

    echo "$x LOCAL <br>";
}

teste();

echo "$x GLOBAL <br>";

teste();

function testando(){
    $x = 12;

    echo "$x LOCAL 2 <br>";

}

testando();

echo "$x GLOBAL <br>";
?>