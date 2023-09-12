<?php

$teste = "WASD";

echo "$teste GLOBAL 1 <br>";

if (5>2){

    $teste = "dsa";

    echo "$teste if  <br>";


}

echo "$teste GLOBAL 2 <br>";

function funcao(){

    
    global $teste;
    echo "$teste GLOBAL função <br>";
}

funcao();
?>