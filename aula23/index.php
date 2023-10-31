<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando formulário com php</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form class="form-control" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">

        <label for="email">Email</label>
        <input type="email" name="email" id="email">

        <label for="ajuda">Ajuda</label>
        <input type="text" name="ajuda" id="ajuda">

        <button name="enviar" type="submit">Enviar</button>
    </form>

    <h1>Dados do formulário enviado abaixo</h1>

    <?php

    if (isset($_POST['enviar'])) { // isset (verifico se tem algo dentro da minha variavel post)


        /*na função empty eu verifico se tem algo dentro da minha variável */
        if (empty($_POST['name']) || strlen($_POST['name']) <= 3) /*nessa função do strlen, estou verificando se minha variável tem mais de 3 caracteres*/ {
            echo '<p class="error">Preencha o campo nome</p>';
        } elseif (empty($_POST['email']) || ( !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))) { /*nessa função filter var do email, estou verificando se meu e-mail é valido ou não */
            echo '<p class="error">Preencha o campo email corretamente</p>';
        } elseif (empty($_POST['ajuda'])) {
            echo '<p class="error">Preencha o campo ajuda</p>';
        } else {
            echo "<p> Nome:" . $_POST['name'] . "</p>";
            echo "<p> Email:" . $_POST['email'] . "</p>";
            echo "<p> Ajuda:" . $_POST['ajuda'] . "</p>";
        }
    };


    ?>
</body>

</html>