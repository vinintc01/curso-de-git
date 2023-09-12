<?php

function teste(){

    $a = 0;

    $a++;

    echo "$a <br>";
}

teste();
teste();
teste();

function testestatic(){

    static $a = 0;

    $a++;

    echo "$a  <br>";
}
echo "Com o Static, o valor é mantido entre chamdas de função<br>";

testestatic();
testestatic();
testestatic();
?>