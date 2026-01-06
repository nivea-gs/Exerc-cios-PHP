<?php
// Atividade 1
echo "Exercício 1 <br>";

$diaDaSemana = date("d/m/y");    

if($diaDaSemana == date("Monday") || $diaDaSemana == date("Saturday")){
    echo "Hoje é final de semana";
}
else{
    echo "Hoje é dia útil <br>";
}


echo "<br>";


// Atividade 2
echo "Exercício 2 <br>";

$dataBrasil = date("d/m/y");
$dataEUA = date("m/d/y");
$dataEU = date("y/m/d");

echo "Brasil: " . $dataBrasil . "<br>";
echo "EUA: " . $dataEUA . "<br>";
echo "Europa: " . $dataEU . "<br>";


echo "<br>";


// Atividade 3
echo "Exercício 3 <br>";

$hoje = strtotime("today");

while(true){

    if(date("j", $hoje) == 13 && date("w", $hoje) == 5){
        echo "A próxima sexta-feira 13 será em: " . date("d/m/Y", $hoje) . "<br>";
        break;
    }

    $hoje = strtotime("+1 day", $hoje);

}


echo "<br>";


// Atividade 4
echo "Exercício 4 <br>";

$data = new DateTime;
print_r($data);
echo "<br>";

$anoAtuall = $data->format("Y");

$data->setDate($anoAtuall, 12, 31);
$data->setTime(23, 45, 00);

$data->modify("-15 days");

echo "Data: " . $data->format("d/m/Y") . "<br>";

print_r($data);


echo "<br>";
echo "<br>";


// Atividade 5
echo "Exercício 5 <br>";

$dia = 13;
$mes = 4;

$hojee = new DateTime();
$aniversario = new DateTime();
$aniversario->setDate($hojee->format("Y"), $mes, $dia);

if($aniversario < $hojee){
    $aniversario->modify("+1 year");
}

echo "Seu próximo aniversário será em: " . $aniversario->format("d/m/Y");


echo "<br>";
echo "<br>";


// Atividade 6
echo "Exercício 6 <br>";

$dataManut = new DateTime();

$dataManut->setDate(2025,9,10);

$dataManut->setTime(07,30,00);

echo "Manutenção 1: " . $dataManut->format("d/m/Y H:i (l)") . "<br>";

$intervalo = 45;

$quantidade = 6;

for($i = 2; $i <= $quantidade; $i++){

    $dataManut->modify("+45 days");

    $diaSemana = (int)$dataManut->format('w');
    if($diaSemana === 6){
        $dataManut->modify('+2 days');
    }
    else if($diaSemana === 0){
        $dataManut->modify('+1 day');
    }
    
    echo "Manutenção $i: " . $dataManut->format('d/m/Y H:i (l)') . "<br>";

}


echo "<br>";
echo "<br>";


// Atividade 7
echo "Exercício 7 <br>";

$dataAtual = new DateTime();

$dataAtual->setDate(2025,2,10);

$diasUteis = 15;

$contadorDiasUteis = 0;

while($contadorDiasUteis < $diasUteis){

    $dataAtual->modify("+1 day");

    $diaDaSemana2 = $dataAtual->format('w');
    if($diaDaSemana2 != 0 && $diaDaSemana2 != 6){
        $contadorDiasUteis++;
    }

}

echo "Data prevista de entrega: " . $dataAtual->format("d/m/Y");


echo "<br>";
echo "<br>";


// Atividade 8
echo "Exercício 8 <br>";

$dataDeHoje = new DateTime();

$dataDeHoje->setDate(2025,2,15);

$dataDeHoje->setTime(10,00,00);

echo "Revisão de Software 1: " . $dataDeHoje->format("d/m/Y  H:i (l)") . "<br>";

$intervalo3 = 60;

$quantidade2 = 10;

for($n = 2; $n <= $quantidade2; $n++){

    $dataDeHoje->modify("+2 months");

    $diaSemana3 = (int)$dataDeHoje->format('w');
    if($diaSemana3 === 6){
        $dataDeHoje->modify('+2 days');
    }
    else if($diaSemana3 === 0){
        $dataDeHoje->modify('+1 day');
    }

    echo "Revisão de Software $n: " . $dataDeHoje->format('d/m/Y  H:i (l)') . "<br>";

}


echo "<br>";
echo "<br>";


// Diferença entre datas
$date1 = new DateTime();
$date2 = new DateTime();

$date2->setDate(2001,10,15);

print_r($date1);
echo "<br>";

print_r($date2);
echo "<br>";
echo "<br>";

$diferenca = $date1->diff($date2);

print_r($diferenca);
echo "<br>";

echo $diferenca->format("%a days");


echo "<br>";
echo "<br>";



// Comparação de datas
$dateA = new DateTime();
$dateB = new DateTime();

$dateC = new DateTime();

$dateB->setDate(2026,10,11);
$dateC->setDate(2026,10,11);

$dateB->setTime(01,10,10);
$dateC->setTime(01,10,10);

if($dateA > $dateB){
    echo "A data A é maior que a data B <br>";
}

if($dateA < $dateB){
    echo "A data A é menor que a data B <br>";
}

if($dateB == $dateC){
    echo "A data B e C são identicas";
}

echo "<br>";
echo "<br>";


// Alterando o fuso horário
date_default_timezone_set("America/Sao_Paulo");

$dataA = new DateTime();

print_r($dataA);


echo "<br>";
echo "<br>";
echo "<br>";



?>