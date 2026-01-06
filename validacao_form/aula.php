<?php

$validacoes = [];
$sucesso = "";

if($_SERVER["REQUEST_METHOD"] === "POST"){

    if($_POST["nome"] === ""){
        $validacoes[] = "Por favor, digite o nome do usuário";
    }

    if($_POST["email"] === ""){
        $validacoes[] = "Por favor, digite o seu email";
    }

    if($_POST["senha"] != $_POST["confirmacao"]){
        $validacoes[] = "Por favor, as senhas devem ser iguais";
    }

    if(count($validacoes) === 0){
        $sucesso = "Formulário enviado com sucesso!";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(count($validacoes)): ?>

        <ul style="color:red">

            <?php foreach($validacoes as $validacao): ?>
                <li> <?= $validacao; ?> </li>
            <?php endforeach; ?>

        </ul>

        <?php endif; ?>

        <?php if($sucesso): ?>
            <p style="color:green; fonte-weigth:bold;"> <?= $sucesso; ?> </p>
        <?php endif; ?>

        <form action="index.php" method="POST">

            <div>
                <input type="text" name="nome" placeholder="Digite o nome do usuário">
            </div>

            <div>
                <input type="text" name="email" placeholder="Digite seu email">
            </div>

            <div>
                <input type="password" name="senha" placeholder="Digite sua senha">
            </div>

            <div>
                <input type="password" name="confirmacao" placeholder="Confirme sua senha">
            </div>

            <div>
                <input type="submit" value="Enviar">
            </div>

        </form>

</body>
</html>