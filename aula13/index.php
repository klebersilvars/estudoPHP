<?php

//estrutura de condição e repetição

//if(se), else(se não)

/*
estrutura do código

if(condição == true) {
    vai cair aqui se for true
}else(condição falsa) {
    vai cair aqui se for falsa
}
*/

/*
$nota_do_aluno = 6;

if($nota_do_aluno == 6) { //aqui estou verificando se a nota do aluno foi igual a 6
    echo ('Aluno aprovado, sua nota foi igual ou maior a 6');
}else {
    echo('aluno reprovado');
}*/

$senha_usuario = '123456789';
if($senha_usuario == '123456789') {
    echo ('senha correta, usuário logado');
}else {
    echo('senha incorreta, tente novamente!');
}