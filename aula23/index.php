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

    if(isset($_POST['enviar'])) { // isset (verifico se tem algo dentro da minha variavel post)

        echo $_POST['name'];
        echo $_POST['email'];
        echo $_POST['ajuda'];
    };


    ?>
</body>
</html>