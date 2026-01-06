<?php
// exercicio 1
$frase = "este item está em";
$frase2 = "promoção";

echo ucfirst($frase) . strtoupper($frase2);


echo "<br>";

// exercicio 2
function padronizarNome($nomeCompleto){
    $minusculo = strtolower($nomeCompleto);
    $padrao = ucwords($minusculo);

    return $padrao;
    
}
    $nomeCompleto = padronizarNome("nívEa gUímEl da sIlva soUzA");

    echo $nomeCompleto;

echo "<br>";

// exercicio 3
function validarCodigoPromocional($codigoUsuario){
    $codigo = "DESCONTO10";

    if(strtoupper($codigoUsuario) === $codigo){
        return "Código válido";
    }
    else{
        return "Código inválido";
    }
}
echo validarCodigoPromocional("DeSConTo10");
?>