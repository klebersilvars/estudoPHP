<?php

//para declarar uma função em php, uso a seguinte sintaxe


// para gerar um número aleatórin entre 0 a 1000
$numeroLouco = rand(0,1000);
echo $numeroLouco;

//essa função serve para formatar números
$preco = 4.3;

echo ' <br>R$' . number_format($preco, '2', ',', '.');
