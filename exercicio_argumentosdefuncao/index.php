<?php
    $compras = [
        "Batata", 
        "Queijo", 
        "Macarrão", 
        "Milho de pipoca"];

    function superMercado($compras){
        echo implode("," , $compras);
    }

    superMercado($compras);
?>