<?php
    ## Artigos com exemplos de funções lambdas e closures
    ## http://desenvolvimentoparaweb.com/php/funcoes-anonimas-closures-php
    $luckyDip = array(
        function() {
            echo "Você ganhou um saco de caramelos!" . PHP_EOL;
        },
     
        function() {
            echo "Você ganhou um carro!" . PHP_EOL;
        },
     
        function() {
            echo "Você ganhou balões!" . PHP_EOL;
        }
    );

// Chama uma função aleatoriamente
$choice = rand(0, 2);
$luckyDip[$choice]();

echo '================================';
echo PHP_EOL;

function getGreetingFunction() {
    $timeOfDay = "dia";

    return (function($name) use (&$timeOfDay) {
        $timeOfDay = ucfirst($timeOfDay);
        return ("Bom $timeOfDay, $name!");
    });
};

$greetingFunction = getGreetingFunction();
echo $greetingFunction("Morvana"); // "Bom/boa Dia, Frederico!"
echo PHP_EOL;
?>