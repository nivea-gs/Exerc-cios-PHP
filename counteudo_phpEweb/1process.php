<?php
// exercicio 1
if(isset($_POST["nome"])){
    $nome = $_POST["nome"];
}
else{
    $nome = "Padrao";
}

echo "Olá " . $nome . "! Seja bem-vindo(a).";

echo "<br>";
echo "<br>";

?>
