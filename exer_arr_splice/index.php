<?php
$comidas = ["batata", "maçã", "pera", "feijão", "arroz"];

$removidos = array_splice($comidas, 2, -1);

print_r($removidos);
?>