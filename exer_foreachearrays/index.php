<?php
$dadosPessoais = [
    "Nívea" => 17,
    "Alex" => 20,
    "Cadu" => 17,
    "Jairo" => 25,
    "Jhonata" => 17,
    "Laura" => 18
];
?>

<table border = 1>
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>

    <?php foreach($dadosPessoais as $nome => $idade): ?>
    <tr>
        <td> <?= $nome ?> </td>
        <td> <?= $idade ?> </td>
    </tr>
    <?php endforeach; ?>
</table>

<style>
    table{
        background-color: #00769e;
        color: #ffffff;
        border: 5px solid #003b4f;
    }
</style>