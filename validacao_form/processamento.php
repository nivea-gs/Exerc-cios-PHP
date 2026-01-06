<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){

    if(isset($_FILES["uploud"])){

        $arquivo = $_FILES["uploud"]["name"];
        $tamanho = $_FILES["uploud"]["size"];

    }

    if($arquivo && $tamanho){

        echo "Nome do Arquivo: $arquivo" . "<br>";
        echo "Tamanho do arquivo: $tamanho KB";

    }

    else{
        echo "Arquivo não encontrado";
    }
}

?>