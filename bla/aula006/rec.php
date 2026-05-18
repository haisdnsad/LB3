<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sabio</title>
</head>
<body>
    <h1>Ta bixo sabido</h1>
    <?php

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $desc = $_POST['texto'];
    echo $nome . $email . $desc;
    ?>
    <br>
    <a href="javascript:history.back()">Clica aq</a>
</body>
</html>