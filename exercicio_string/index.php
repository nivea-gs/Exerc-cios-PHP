<?php
$meusProdutos = [
    "Caderno" => 700,
    "Lápis" => 0.50,
    "Borracha" => 2.00,
    "Bicicleta" => 900,
    "Mochila" => 300
];

function itensAcimaDeDez($produtos){
    $filtrados = [];

    foreach($produtos as $item => $valor){
        if($valor > 10){
            $filtrados[$item] = $valor;
        }
    }

    return $filtrados;
}

$resultadoFinal = itensAcimaDeDez($meusProdutos);

print_r($resultadoFinal);
?>