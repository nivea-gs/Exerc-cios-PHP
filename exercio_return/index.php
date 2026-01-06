<?php
    function numeroAoQuadrado($numero){
        return $numero * $numero;
    }

    $resultado = numeroAoQuadrado(5);
    echo "o resultado é: $resultado";

    echo '<br>';

    function numerosPares($numeros){
        $totalPares = 0;

        foreach($numeros as $numero){
            if ($numero % 2 == 0){
                $totalPares++;
            }
        }

        return $totalPares;
    }

    echo numerosPares([1, 12, 17, 10, 4, 24]);

    function nota($media){
        $aprovados = 0;
        $reprovados = 0;

        foreach($media as $medias){
            if($medias >= 7){
                $aprovados++;
            }
            else{
                $reprovados++;
            }
        }

        return "aprovados: $aprovados | reprovados: $reprovados";
    }

    echo nota([5, 10, 2]);


?>