<?php

if(isset($_GET["mensagem"])){
    $opcoes = $_GET["mensagem"];

    if($opcoes == "1"){
        echo "Bem-vindo ao site!";
    }
    else if($opcoes == "2"){
        echo "Obrigado pela visita!";
    }
    else if($opcoes == "3"){
        echo "Volte sempre!";
    }
    else{
        echo "Você não selecionou nenhuma mensagem! Tente novamente";
    }

}

?>