
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulário de envio de arquivos</h1>
    <form action="processamento.php" method="POST" enctype="multipart/form-data">

        <div>
            <label for="text">Selecionar arquivo</label><br><br>
            <input type="file" name="uploud">
        </div>

        <br><br>

        <div>
            <button type="submit">Enviar</button>
        </div>

    </form>
</body>
</html>

