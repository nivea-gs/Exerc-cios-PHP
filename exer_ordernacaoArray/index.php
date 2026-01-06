<?php
// atividade 1
$arr = [
    "Alex" => 10,
    "Jairo" => 35,
    "Cadu" => 24, 
    "Nívea" => 99,
    "Laura" => 86,
    "Jhonata" => 56
];


arsort($arr);
?>
<table border = 1>
    <tr>
        <th>Participante:</th>
        <th>Pontuação:</th>
    </tr>

    <?php foreach($arr as $participantes => $pontuacao): ?>

    <tr>
        <td> <?= $participantes ?> </td>
        <td> <?= $pontuacao ?> </td>
    </tr>

    <?php endforeach; ?>
</table>



<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>



<?php
//atividade 2
$notasDosAlunos = [
    "Nívea" => 10,
    "Alex" => 9,
    "Jairo" => 7,
    "Cadu" => 4,
    "Jhonata" => 4,
    "Laura" => 8
];

$soma = array_sum($notasDosAlunos);
$quantidade = count($notasDosAlunos);
$media = $soma / $quantidade;
?>

<table border = 1>
    <tr>
        <th>Aluno(a):</th>
        <th>Nota Final:</th>
        <th>Situação:</th>
    </tr>

    <?php foreach($notasDosAlunos as $nome => $nota): 
        if($nota >= $media){
            $situacao = "Aluno(a) acima da média";
        }
        else{
            $situacao = "Aluno(a) abaixo da média";
        }
    ?>

    <tr>
        <td> <?= $nome ?> </td>
        <td> <?= $nota ?> </td>
        <td> <?= $situacao ?> </td>
       
    </tr>

    <?php endforeach; ?>
</table>

<p>Média dos alunos: <?= $media ?> </p>


<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>


<?php
// atividade 3
$tempoDosCorredores = [
    "Nívea" => 5,
    "Alex" => 20,
    "Jairo" => 25,
    "Cadu" => 8,
    "Jhonata" => 7,
    "Laura" => 10
];
?>
<table border = 1>
    <tr>
        <th>Nome:</th>
        <th>Tempo:</th>
        <th>Desempenho:</th>
    </tr>

    <?php foreach($tempoDosCorredores as $nome => $tempo): 
        if($tempo >= 12){
            $situacao = "Tempo alto, você pode melhorar";
        }
        else{
            $situacao = "Bom tempo";
        }
    ?>

    <tr>
        <td> <?= $nome ?> </td>
        <td> <?= $tempo ?> </td>
        <td> <?= $situacao ?> </td>
       
    </tr>

    <?php endforeach; ?>
</table>



<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>



<?php
// atividade 4
$temperaturaDaCidade = [
    "Bacabal" => '45°',
    "São Luís" => '32°',
    "Fortaleza" => '41°',
    "Bom Lugar" => '35°',
    "Santa Inês" => '30°',
    "Itapecuru Mirim" => '25°'
];
?>
<table border = 1>
    <tr>
        <th>Cidade:</th>
        <th>Temperatura:</th>
        <th>Situação do Clima:</th>
    </tr>

    <?php foreach($temperaturaDaCidade as $cidade => $temperatura): 
        if($temperatura >= 40){
            $clima = "Clima Quente";
        }
        else{
            $clima = "Clima Agradável";
        }
    ?>

    <tr>
        <td> <?= $cidade ?> </td>
        <td> <?= $temperatura ?> </td>
        <td> <?= $clima ?> </td>
       
    </tr>

    <?php endforeach; ?>
</table>

<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>

<?php
//atividade 5
$arr = [
    "Cotonete" => [
        "estoque" => 25,
        "preço" => 8
    ],
    "Pizza Congelada" => [
        "estoque" => 50,
        "preço" => 30
    ],
    "Garrafa Térmica" => [
        "estoque" => 30,
        "preço" => 40
    ],
    "Bolo de Chocolate" => [
        "estoque" => 10,
        "preço" => 20
    ]
];
?>
<table border = 1>
    <tr>
        <th>Produto:</th>
        <th>Quantidade:</th>
        <th>Preço:</th>
        <th>Situação:</th>
    </tr>

    <?php foreach($arr as $produto => $valores):
    $quantidade = $valores["estoque"];
    $preço = $valores["preço"];
    
        if($quantidade < 15){
            $estoque = "Reposição Urgente";
        }
        else if($preço > 30){
            $estoque = "Produto caro";
        }
        else{
            $estoque = "Estoque OK";
        }
    ?>

    <tr>
        <td> <?= $produto ?> </td>
        <td> <?= $quantidade ?> </td>
        <td> <?= $preço ?> </td>
        <td> <?= $estoque ?> </td>
       
    </tr>

    <?php endforeach; ?>
</table>


<?php
echo "<br>";
echo "<br>";
echo "<br>";
?>


<?php
//atividade 6
$array = [
    "Notebook" => [
        "preço" => 2500,
        "desconto" => 30
    ],
    "Celular" => [
        "preço" => 1500,
        "desconto" => 20
    ],
    "Garrafa Térmica" => [
        "preço" => 120,
        "desconto" => 10
    ],
    "Teclado" => [
        "preço" => 400,
        "desconto" => 50
    ],
    "Monitor" => [
        "preço" => 1200,
        "desconto" => 25
    ],
];
?>
<table border = "1">
    <tr>
        <th>Produto:</th>
        <th>Preço original:</th>
        <th>Desconto (%):</th>
        <th>Preço com desconto:</th>
        <th>Situação:</th>
    </tr>

    <?php foreach($array as $produtos => $dados):
    $preco = $dados["preço"];
    $desconto = $dados["desconto"];
    $precoComDesconto = $preco * $desconto / 100;

    if($precoComDesconto < 100){
        $situacao2 = "Muito Barato";
    }
    else if($precoComDesconto <= 500){
        $situacao2 = "Preço Razoável";
    }
    else{
        $situacao2 = "Produto Caro";
    }
    ?>

    <tr>
        <td> <?= $produtos ?> </td>
        <td> <?= $preco ?> </td>
        <td> <?= $desconto ?> </td>
        <td> <?= $precoComDesconto ?> </td>
        <td> <?= $situacao2 ?> </td>
    </tr>

    <?php endforeach; ?>
</table>

