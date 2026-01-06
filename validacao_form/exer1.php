<?php

if(isset($_POST["nome"])){

    $nome = $_POST["nome"];
    $email = $_POST["email"];

    if($email == "" && $email == ""){
        echo "Preencha todos os campos";
    }

    else if(strpos($email, "@") === false || strpos($email, ".") === false){
        echo "E-mail inválido";
    }

    else{
        echo "Nome: " . $nome . "<br>" . "E-mail: " . $email;
    }

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>
    <form action="exer1.php" method="POST">
        <div>
            <input type="text" name="nome" placeholder="Digite o nome do usuário">
        </div>

        <div>
            <input type="text" name="email" placeholder="Digite seu email">
        </div>

         <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>