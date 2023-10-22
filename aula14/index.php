<?php


//fórmula do IMC

//altura * 2 / peso

$altura = 1.67;
$peso = 60;

$resultado = $peso / ($altura * $altura);
$faixa = "";

echo($resultado);

if($resultado < 18.5) { 
    $faixa = 'Magreza';
}else if($resultado >= 18.5 && $resultado < 24.5) {
    $faixa = "Normal";
}else if ($resultado >= 24.5 && $resultado < 30) {
    $faixa = 'Sobrepeso';
}

echo ($faixa);