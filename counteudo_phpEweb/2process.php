<?php

// exercicio 2
if(isset($_POST["numero1"])){
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];

    $soma = $numero1 + $numero2;

    echo "A soma de $numero1 + $numero2 é igual a: $soma";
}

?>