<?php

$hostname = "localhost";
$database = "padaria";
$usuario = "root";
$senha = "";

$msqli = new mysqli($hostname, $usuario, $senha, $database);

if($msqli->connect_errno) {
    echo "falha na conexão";
}