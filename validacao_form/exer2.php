<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){

    if(isset($_POST["hobbies"])){

        $hobbies = $_POST["hobbies"];

        echo "Seus hobbies são: " . implode(", ", $hobbies);

    }
    else{

        echo "Você não marcou nenhuma opção!";

    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    <form action="exer2.php" method="POST">

        <div>
            <input type="checkbox" name="hobbies[]" value="Ler">
            <label for="Ler">Ler</label>

            <br>

            <input type="checkbox" name="hobbies[]" value="escutar musica">
            <label for="escutar musica">Escutar música</label>

            <br>

            <input type="checkbox" name="hobbies[]" value="viajar">
             <label for="viajar">Viajar</label>
        </div>

        <br>

        <div>
            <input type="checkbox" name="hobbies[]" value="volei">
            <label for="volei">Vôlei</label>

            <br>

            <input type="checkbox" name="hobbies[]" value="correr">
            <label for="correr">Correr</label>

            <br>

            <input type="checkbox" name="hobbies[]" value="videogame">
            <label for="videogame">Videogame</label>
        </div>

        <input type="submit" value="Enviar">

    </form>
</body>
</html>