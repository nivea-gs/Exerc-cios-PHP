<?php
$animal = "girafa";
$tamanho = "5 metros";
$cor = "amarelo";

$arr = compact("animal", "tamanho", "cor");

print_r($arr);

echo "<br>";
echo "<br>";

foreach($arr as $array){
    echo "$array <br>";
}

?>