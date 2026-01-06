<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){

    if(isset($_POST["ano"])){
        $anoDeNascimento = $_POST["ano"];

        $ano = date("Y");
        $idade = (int) $ano - (int) $anoDeNascimento;
    }

    if($anoDeNascimento >= 1900 && $anoDeNascimento <= $ano){
        echo "Você tem: " . $idade . " anos";
    }
    else{
        echo "O valor informado é inválido";
    }

}


?>