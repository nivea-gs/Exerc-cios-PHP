<?php
//exercicio 1 usando for
$array = [];

    for($i = 1; $i <= 20; $i++){
     if($i % 2 == 0){
      echo "Os números pares são: $i <br>";
     }
    array_push($array, $i);
}

 print_r($array);

//exercicio 2 usando for
$array2 = [];

    for($a = 1; $a <= 10; $a++){
        echo "os números são: $a <br>";
        array_push($array2, $a);
    }

    print_r($array2);

//exercicio 3 usando for
$array3 = [];

    for($b = 10; $b <= 20; $b++){
        array_push($array3, $b);
    }

    for($c = 0; $c < count($array3); $c++){
        if($array3[$c] % 2 == 1){
            echo "Os numeros ímpares são: $c <br>";
        }
    }

    
//exercicio 4 usando for
$num = 7;
    for($d = 1; $d <= 10; $d++){
        $numero = $num * $d;
        
        echo "7 x $d = $numero";
        echo "<br>";
    }

//exercicio 5 usando for
    for($e = 0; $e <= 50; $e++){
        if($e % 5 == 0){
            echo "Os números múltiplos são: $e <br>";
        }  
    }

//exercicio 6 usando if
$nomes = ["Jhonata", "Carlos", "Nívea", "Alex", "Jairo"];

    for($n = 0; $n < count($nomes); $n++){
        echo "$nomes[$n]  <br>";
    }
?>