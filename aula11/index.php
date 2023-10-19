<?php

//como declarar variavel?

//criando variáveis
$nome = 'kleber';
$sobrenome = 'lucas';
$lista = [1, 2, 3, 4, 5, 6, 7];
$verdade = false;

//exibindo variáveis 
echo($nome);
echo($sobrenome);

//exibindo variaveis com listas, que é o var_dump (mostra o tipo e o valor da variável)
var_dump($lista);
var_dump($nome);

//como criar constantes?
define('pi', 3.14);
var_dump(pi);