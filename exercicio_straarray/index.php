<?php
//atividade 1
$frase = "carro - navio - helicóptero - barco - jangada";

$fraseArray = explode("-", $frase);

foreach($fraseArray as $frase){
    echo "$frase<br>";
}

echo "<br>";

//atividade 2
$arrayFrase = ["O", "PHP", "é", "muito", "legal"];

echo implode(" ", $arrayFrase);

echo "<br>";
echo "<br>";

//atividade 1 - 30/06
$listaDePalavras = ["morango", "sol", "sonoplastia", "lua", "Nívea"];
function contarPalavrasGrandes($palavras){
    $contador = 0;

    foreach($palavras as $palavra){
        if(strlen($palavra) > 5){
            $contador++;
        }
    }

    return $contador;
}

$lista = contarPalavrasGrandes($listaDePalavras);
echo "O número de palavras que possuem mais de 5 letras é: $lista";

echo "<br>";
echo "<br>";

//atividade 2 - 30/06
$numerosint = [10, 7, 3, 8, 1];
function todosPositivos($numeros){
    foreach($numeros as $numero){
        if($numero <= 0){
            return "Nem todos os números são positivos";
        }
    }

    return "Todos os números são positivos";
}

echo todosPositivos($numerosint);

echo "<br>";
echo "<br>";

//atividade 3 - 30/06
function inverterArray($array){
    return array_reverse($array); 
}

$arrayO = ["Arroz", "Feijão", "Frango"];
$arrayInvertido = inverterArray($arrayO);

print_r($arrayInvertido);

echo "<br>";
echo "<br>";

//atividade 4 - 01/07 - Outra forma de fazer
$numbers = range(10, 45);

function somaNumero($numbers){
    foreach($numbers as $number){
    $soma = $number + 6;
    echo "Número = $number + 6 = $soma";

    if($soma > 30){
        echo " - número é muito alto";
    }
    echo "<br>";
}
}
echo somaNumero($numbers);

echo "<br>";
echo "<br>";



?>