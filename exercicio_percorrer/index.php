<?php
    $travaLingua = "O rato roeu a roupa do rei de roma";
    $totalDeA = 0;

    for($i = 0; $i < strlen($travaLingua); $i++){
        if($travaLingua[$i] == 'a'){
            $totalDeA++;
        }
    }
        echo "O total de letras 'a' são: $totalDeA";
?>