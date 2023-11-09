<?php

//criando as variáveis para fazer a conexão

$hostname = "localhost";
$bd = "crud";
$usuario = "root";
$senha = "";


$mysqli = new mysqli($hostname, $usuario, $senha, $bd);

if( $mysqli -> connect_errno) {
    echo 'falha ao conectar ao banco de dados';
}