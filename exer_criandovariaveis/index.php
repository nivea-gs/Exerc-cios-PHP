<?php
    $carro = ["Jaguar", 3.0, "Azul", 2018, "Teto solar", "Automático"];

    print_r($carro);

    echo "<br>";
    echo "<br>";

    list($nomeDoCarro, $motorDoCarro, $corDoCarro, $ano, $tetoDoCarro, $modelo) = $carro;

    echo "O nome do carro é: $nomeDoCarro <br>";
    echo "O motor é de $motorDoCarro <br>";
    echo "E ele é da cor $corDoCarro <br>";
    echo "Ele é de $ano <br>";
    echo "Ele tem o $tetoDoCarro <br>";
    echo "E esse modelo é $modelo <br>";

?>