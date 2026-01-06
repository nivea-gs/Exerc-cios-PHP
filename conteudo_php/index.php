<?php
// //atividade 1
// $bio =['nome' => 'Nívea', 'idade' => 17, 'profissão' => "Engenheira", 'cidade' => "Bacabal"];

// print_r($bio);
// echo "<br>";

// echo $bio['nome'];
// echo "<br>";

// echo $bio['idade'];
// echo "<br>";

// echo $bio['profissão'];
// echo "<br>";

// echo $bio['cidade'];

// echo "<br>";

// //atividade 2
// $pessoa=[
//     "nome" => "Nívea",
//     "idade" => 20,
//     "cidade" => "São Luís",
//     "Profissão" => "Estudante"
// ];

//     if($pessoa["idade"] >= 18) {
//         echo $pessoa["nome"]. " é maior de idade";
//     }
//     else{
//         echo $pessoa["nome"]. " é menor de idade";
//     }

//     echo "<br>";

// //atividade 3
//     $nome = "Nívea";
//     echo $nome;
//     echo "<br>";

//     $idade = 17;
//     echo $idade;
//     echo "<br>";

//     $verdadeiro = true;
//     echo $verdadeiro;

//     echo "<br>";

// //atividade 4
//     $numero1 = 20;
//     $numero2 = 20;
//     $soma = $numero1 + $numero2;

//     echo $soma;

    // //forma 1
    // function subtracao($a, $b){
    //     echo $a - $b;
    //     echo "<br>";
    // }
    // subtracao(10,5);

    // function divisao($a, $b){
    //     echo $a / $b;
    //     echo "<br>";
    // }
    // divisao(50, 10);

    // function multiplicacao($a, $b){
    //     echo $a * $b;
    //     echo "<br>";
    // }
    // multiplicacao(2, 5);


    // //forma 2
    // $expressao1 = 20-2;

    // $expressao2 = 5*8;

    // $expressao3 = 4/2;

    // echo $expressao1;
    // echo "<br>";
    // echo $expressao2;
    // echo "<br>";
    // echo $expressao3;
    // echo "<br>";

    // $soma = $expressao1 - $expressao2 / $expressao3;
    // echo "o valor dessa expressão é: $soma";


    // $soma = "5" * 12;

    // echo gettype($soma);



    // //atividade de resto
    // $resto = 16%2;
    // echo $resto;

    // echo "<br>";

    // $resto2 = 7%3;
    // echo $resto2;

    // //atividade de exponenciação
    // $a = 12;
    // $b = 2;

    // echo $a ** $b;

    // $c = 5 ** $b;

    // echo $c;

    //atividade de concatenação
    // $saudacao = "Olá, mundo";
    // $nome = "Nívea";
    // $segundoNome = "Guímel";

    // echo $saudacao . " meu nome é " . $nome . " e o meu segundo nome é " . $segundoNome;

    //atividade - operadores de igualdade
    // $nome = "Nívea";
    // $nomeDeCadastro = "Nívea Guímel";

    // if($nome == $nomeDeCadastro){
    //     echo "O seu nome não é o mesmo do seu nome de cadastro";
    // }

    // echo "<br>";

    // $empresa = "Nívea";
    // $nomeDaCeo = "Nívea";

    // if($empresa == $nomeDaCeo){
    //     echo "O nome da empresa é o mesmo da CEO";
    // }


    // testando operadores
    // $a = 5;
    // $b = 3;

    // if($a . $b){
    //     echo $a === $b; //idêntico false
    // }

    // if($a . $b){
    //     echo $a == $b; //igualdade false
    // }

    // if($a . $b){
    //     echo $a !== $b; // diferença true
    // }

    // if($a . $b){
    //     echo $a != $b; //não idêntico true
    // }


    //testando operador lógico (AND)
    // if(15>5 && "João" === "João"){
    //     echo "Está correto";
    // }
    // else{
    //     echo "é falso";
    // }

    // echo "<br>";

    // if("teste" > 5 && 1){
    //     echo "Também está correto";
    // }
    // else{
    //    echo "é falso";
    // }

    // echo "<br>";

    // if(2 == 3 && 5 >= 3){
    //     echo "Está absolutamente correto";
    // }
    // else{
    //     echo "é falso";
    // }

    //testando operador lógico (OR)
    // if(12 < 5 || "João" == "João"){
    //     echo "é verdadeiro";
    // }
    // else{
    //     echo "é falso";
    // }

    // echo "<br>";

    // if(1 > 5 || 1){
    //     echo "é verdadeiro";
    // }
    // else{
    //     echo "é falso";
    // }

    // echo "<br>";

    // if(20 === "20" || 51 >= 31){
    //     echo "é verdadeiro";
    // }
    // else{
    //     echo "é falso";
    // }

    //testando operador de conversão (Cast)
    // $a = (int) "testando";
    // $b = (int) 12.9;
    // $c = (int) true;
    // $d = (int) [1,2,3];

    // echo $a; 
    // echo "<br>";
    // echo $b;
    // echo "<br>";
    // echo $c;
    // echo "<br>";
    // echo $d;

    //testando operador ternário
    // $a = 12;
    // $b = 42;

    // echo $a > $b ? "Sim, $a é maior que $b" : "Não, $a não é maior que $b";
    // echo "<br>";
    // echo $a < $b ? "Sim, $b é maior $a" : "Não, $b não é maior que $a";

    //usando estrutura if - exercício 1
    // $a = 5;
    // $b = 2;
    // if($a > $b){
    //     echo "Sim, 5 realmente é maior que 2";
    // }
    // else{
    //     echo "Não, 5 não é maior que 2";
    // }

    // echo "<br>";

    // $nome1 = "Matheus";
    // $nome2 = "Pedro";
    // if($nome1 != $nome2){
    //     echo "O nome $nome1 é diferente que o nome $nome2";
    // }
    // else{
    //     echo "$nome1 não é diferente que o nome $nome2";
    // }

    // echo "<br>";

    // $number1 = 12;
    // $number2 = 11;
    // if(12 <= 11){
    //     echo "$number1 realmente é menor que $number2";
    // }
    // else{
    //     echo "$number1 não é menor que $number2";
    // }
    
    // echo "<br>";

    // usando estrutura if - exercicio 2
    // $idade1 = 17;
    // $idade2 = 20;

    // if($idade1 >= 18){
    //     echo "Você é maior de idade, ou seja, sua entrada é permitida";
    // }
    // else{
    //     echo "Você não maior de idade, ou seja, não pode entrar";
    // }

    // echo "<br>";

    // if($idade2 >= 18){
    //     echo "Você é maior de idade, ou seja, sua entrada é permitida";
    // }
    // else{
    //     echo "Você não maior de idade, ou seja, não pode entrar";
    // }

    // echo "<br>";

    // atividade testando string/int/boolean usando else
    // $num1 = "Guímel";
    // $num2 = (int) 90; 
    // $num3 = true; 

    // if(is_int("Guímel")){
    //     echo "$num1 realmente é um inteiro";
    // }
    // else{
    //     echo "$num1 não é um inteiro e sim uma string";
    // }

    // echo "<br>";

    // if(is_int(90)){
    //     echo "$num2 é um número inteiro";
    // }
    // else{
    //     echo "$num2 não é um número inteiro";
    // }

    // echo "<br>";

    // if(is_int(true)){
    //     echo "$num3 realmente é um inteiro";
    // }
    // else{
    //     echo "Não, $num3 não é um inteiro e sim um boolean";
    // }

    // echo "<br>";

    // $peso = 110;
    // if($peso >= 80){
    //     echo "Está acima do peso permitido";
    // }
    // else{
    //     echo "Está no peso ideal";
    // }

    //atividade testando if aninhado
    // $number1 = 10;
    // $palavra = "Hello, world";

    // if(is_int($number1)){
    //     $resultado = $number1 * 2;

    //     if($resultado > 100){
    //         echo "O número multiplicado é maior que 100";
    //     }
    //     else{
    //         echo "O número multiplicado é $resultado, e esse número não é maior que 100";
    //     }
    // }
    // else{
    //     echo "Essa variável não é um número";
    // }

    // echo "<br>";

    // if(is_int($palavra)){
    //     $resultado2 = $palavra * 2;

    //     if($resultado2 > 100){
    //         echo "O número multiplicado é maior que 100";
    //     }
    //     else{
    //         echo "O número multiplicado é $resultado2, e esse número não é maior que 100";
    //     }
    // }
    // else{
    //     echo "Essa variável não é um número";
    // }

    //exercicio 1 usando else if
    // $velocidade = 60;
    // if($velocidade < 40){
    //     echo "O motorista está na velocidade correta";
    // }
    // else if($velocidade == 40){
    //     echo "Motorista, tome cuidado";
    // }
    // else if($velocidade > 40){
    //     echo "Você receberá uma multa em 3 dias"; 
    // }

    // echo "<br>";

    //exercício 2 usando else if
    // $peso = 70;
    // $altura = 1.70;

    // $imc = $peso / ($altura * $altura);

    // if($imc < 20){
    //     echo "Classificado em: Subpeso";
    // }
    // else if($imc >= 20 && $imc <= 25){
    //     echo "Classificado em: Normal";
    // }
    // else if($imc > 25){
    //     echo "Classificado em: Sobrepeso";
    // }


    //exercicio usando while 
    // $number = ["boleiro", 54, 56.2, false, "texto", 57, "Nívea", [1,2,3], true, "teclado"];
    //     echo "O total de elementos é:" . count($number);

    //     echo "<br>";

    //     $i = 0;

    //     while($i < count($number)){
    //         if(is_string($number[$i])){
    //             echo "Os elementos que são string são: $number[$i]";
    //             echo "<br>";
    //         }
    //         $i++;
    //     }



    //exercicio usando o break
    // $contador = 4;

    // while($contador <= 30){
    //     echo "Contador: $contador <br>";

    //     if($contador == 24){
    //         break;
    //     }
    
    //     $contador +=2;
    // }


    // exercicio usando continue
    // $array = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
    // $numero = 10;

    // while($numero <= 100){
    //     if($numero == 30 || $numero == 40){
    //         $numero += 10;
    //         continue;
    //     }
    //     echo "$numero <br>";

    //     $numero += 10;
    // }

    for ($i = 3; $i > 0; $i--){
        if($i != 2){
            echo $i;
        }
    }

?>