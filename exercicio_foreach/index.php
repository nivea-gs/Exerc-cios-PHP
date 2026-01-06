<?php
//exercicio 1 usando foreach
$nomes = ["Cadu", "Nívea", "Alex", "Jairo", "Jhonata"];

foreach($nomes as $nome){
    echo "O nome é: $nome <br>";
}

//exercicio 2 usando foreach
$numeros = [10, 20, 5, 50, 15];

$soma = 0;

foreach($numeros as $numero){
    $soma += $numero;
}
   echo "total: $soma <br>";

?>