<?php
$arr = [
    [1,2,3,4],
    [5,6,7,8],
    [9,10,11,12]
];

for($i = 0; $i < count($arr); $i++){
    echo "Passando o array $i <br>";

    for($b = 0; $b < count($arr[$i]); $b++){
    echo $arr[$i][$b] . "<br>";
}

}

echo $arr[0][2];

?>