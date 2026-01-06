<?php
// Lista de Clientes
$clientela = [
    "Nívea" => [
        "valor" => 10000,
        "status" => "Pago"
    ],
    "Bj Alex" => [
        "valor" => 6000,
        "status" => "Pago"
    ],
    "Jhonata" => [
        "valor" => 1550,
        "status" => "Pendente"
    ],
    "Cadu" => [
        "valor" => 5000,
        "status" => "Pago"
    ],
    "Jairo" => [
        "valor" => 200,
        "status" => "Pendente"
    ],
    
];
// Contagem de Clientes
$totalDeClientes = count($clientela);

// Contadores para Clientes Pendentes e VIPs
$totalPendentes = 0;
$totalVIP = 0;
?>

<table border = "1">
    <tr>
<!-- Cabeçalho da Tabela -->
        <th>Cliente:</th>
        <th>Valor:</th>
        <th>Status:</th>
        <th>Perfil do Cliente:</th>
        <th>Situação Financeira:</th>
    </tr>

    <!-- Iniciando Foreach -->
    <?php foreach($clientela as $nome => $cliente):
    $valor = $cliente["valor"];
    $status = $cliente["status"];

    // if - classificação do cliente
    if($valor > 2000){
        $classificacao = "Cliente VIP";
        $totalVIP++;
    }
    else if($valor >= 1000 && $valor <= 2000){
        $classificacao = "Cliente Ativo";
    }
    else{
        $classificacao = "Cliente Novo";
    }

    // if - situação financeira do cliente
    if($status == "Pago"){
        $situacao = "Em dia";
    }
    else if($status == "Pendente" && $valor < 1500){ 
        $situacao = "Alerta: Alta Dívida";
    }
    else{
        $situacao = "Pagamento Pendente";
        $totalPendentes++;
    }
?>

<tr>
    <!-- Coluna da Tabela -->
    <td> <?= $nome ?> </td>
    <td> <?= $valor ?> </td>
    <td> <?= $status ?> </td>
    <td> <?= $classificacao ?> </td>
    <td> <?= $situacao ?> </td>
</tr>

<!-- Encerrando Foreach -->
<?php endforeach; ?>
</table>

<!-- Exibição da contagem de Clientes Pendentes e VIPs -->
<p> <?php echo "Total de Clientes:" . $totalDeClientes; ?> </p>
<p> <?php echo "Clientes com Pagamento Pendente:" . $totalPendentes; ?> </p>
<p> <?php echo "Clientes VIP:" . $totalVIP; ?> </p>

