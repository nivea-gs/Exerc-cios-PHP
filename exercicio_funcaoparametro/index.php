<?php
    //exercicio 1
    function dadosPessoais($nome, $idade){
        echo "Olá mundo, meu nome é $nome e tenho $idade anos";
    }

    dadosPessoais("Nívea", 17);

    echo "<br>";

    //exercicio 2
    function parOuImpar($numero){
        if($numero % 2 == 0){
            echo "O número $numero é par";
        }
        else{
            echo "O número $numero é ímpar";
        }
    }

    parOuImpar(14);
?>