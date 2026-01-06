<?php



    if(isset($_GET["numero1"]) && isset($_GET["numero2"])){

        $numero1 = (int) $_GET["numero1"];
        $numero2 = (int) $_GET["numero2"];

        $media = ($numero1 + $numero2) / 2;

    }
    
    if($numero1 && $numero2){
        echo "Fizemos o cálculo e sua média é: " . $media;
    }
    else{
        echo "Por favor, preencha os dois valores";
    }



?>