<?php
$arr = [
    "Nívea" => [
        "nota 1" => 8,
        "nota 2" => 8
    ],
    "Alex" => [
        "nota 1" => 5,
        "nota 2" => 6
    ],
    "Jairo" => [
        "nota 1" => 6,
        "nota 2" => 4
    ],
    "Cadu" => [
        "nota 1" => 8,
        "nota 2" => 8
    ],
    "Jhonata" => [
        "nota 1" => 4,
        "nota 2" => 2
    ]
];


?>
<table border = "1">
    <tr>
<!-- Cabeçalho da Tabela -->
        <th>Aluno(a):</th>
        <th>Primeira Nota:</th>
        <th>Segunda Nota:</th>
        <th>Média Final:</th>
        <th>Situação do Aluno:</th>
    </tr>

    <!-- Iniciando Foreach -->
    <?php foreach($arr as $aluno => $nota):
    $nota1 = $nota["nota 1"];
    $nota2 = $nota["nota 2"];
    $media = $nota1 + $nota2 / 4;
?>

    <tr>
    <!-- Coluna da Tabela -->
        <td> <?= $aluno ?> </td>
        <td> <?= $nota1 ?> </td>
        <td> <?= $nota2 ?> </td>
        <td> <?= $media ?> </td>
        <td> <?php
         if($media >= 7){
        echo "Aluno Aprovado";
    }
    else if($media >= 5 && $media <= 6.5){
        echo "Recuperação";
    }
    else if($media < 5){
        echo "Aluno Reprovado";
    } ?> </td>
    </tr>

<!-- Encerrando Foreach -->
<?php endforeach; ?>
</table>