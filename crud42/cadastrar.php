<?php
include('conexao.php');

    
if(count($_POST) > 0 ) {
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $data_nascimento = $_POST
    ['data_nascimento'];


    if (empty($nome) || strlen($nome) < 3) {
        echo "<script> alert('Verifique se o seu nome foi preenchido corretamente!') </script>";
    } elseif (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script> alert('Verifique se o seu e-mail foi preenchido corretamente') </script>";
    } elseif (empty($tel) || strlen($tel) < 5) {
        echo "<script> alert('Verifique se o seu telefone foi preenchido corretamente') </script>"; 
    } else {
        echo "<script> alert('Tudo funcionando ') </script>";
    }
}



// preciso fazer agora a verificação de segurança para ver se tem algo dentro das variaveis que foram atribuidas usando o empty, assim consigo evitar que passe algo em branco para o meu banco de dados.

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuários PHP</title>
    <link rel="stylesheet" href="cadastrar.css">
</head>

<body>
    <main class="main">
        <div class="container-form">
            <form method="post" action="">
                <label for="name">Name</label>
                <input type="text" name="name" id="name">

                <label for="email">Email</label>
                <input type="email" name="email" id="email">

                <label for="data_nascimento">Data de Nascimento</label>
                <input type="date" name="data_nascimento" id="data_nascimento">

                <label for="tel">Telefone</label>
                <input type="text" name="tel" id="tel">

                <button name="cadastrar" type="submit">Cadastrar</button>
            </form>
        </div>
    </main>

</body>

</html>