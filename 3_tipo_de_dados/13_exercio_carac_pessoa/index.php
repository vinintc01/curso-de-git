<?php
$person = [
    'nome' => 'Vinicius',
    'idade' => 19,
    'altura' => 1.7,
    'hobby' => 'JOGAR',

];

print_r($person);

$nome = $person['nome'];
$idade = $person['idade'];
echo "<br>";

if ($idade >= 18) {
    echo "Você já é maior de  18 anos, pode tirar a carteira de habilitação, PARABÉNS $nome";
}
else {
    echo "Você é menor de idade, tente quando tiver 18 anos";
} 

?>