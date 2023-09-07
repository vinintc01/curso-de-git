<?php

class Pessoa{

    function falar(){

        echo "Olá Pessoal";
    }
}

$vinicius = new Pessoa();

$vinicius -> nome = "Vinicius";

echo $vinicius ->nome;

echo "<br>";

$vinicius->falar();

?>