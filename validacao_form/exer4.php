
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
</head>
<body>
    <form action="" method="POST">
        <p>Nome: <input type="text" name="nome"></p>
        <p>Idade: <input type="number" name="idade" min="10" max="100"></p>
        <p>Opinião: 
            <textarea name="opniao" rows="4" cols="30"></textarea>
        </p>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>



<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $erros = [];

    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $opiniao = $_POST["opiniao"];

    //Validações
    if($nome == ""){
        $erros[] = "O campo Nome é obrigatório.";
    }

    if($idade == ""){
        $erros[] = "O campo Idade é obrigatório.";
    }
    elseif($idade < 10 || $idade > 100){
        $erros[] = "A idade deve estar entre 10 e 100 anos.";
    }

    if($opiniao == ""){
        $erros[] = "O campo Opinião não pode ficar vazio";
    }

    //Resultado
    if(count($erros) > 0){
        echo "<h3>Erros encontrados:</h3>";

        foreach($erros as $erro){
            echo $erro;
        }
    }
    else{
        echo "<h3>Dados recebidos:</h3>";
        echo "Nome: $nome <br>";
        echo "Idade: $idade <br>";
        echo "Opinião: $opiniao <br>";
    }
}

?>