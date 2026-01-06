<?php
$array = [];
for($i = 0; $i < 30; $i++){
    array_push($array, $i);
}
    print_r($array);

    function numerosMaiorQueSete($array2){
        $contador = [];

        for($i = 0; $i < count($array2); $i++){
            if($array2[$i] > 7){
                array_push($contador[$i], $array2);
            }
        }

        return $contador;
    }

    $numeromaiores = numerosMaiorQueSete($array);
    print_r($numerosmaiores);
?>