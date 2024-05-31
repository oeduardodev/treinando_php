<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado</title>
</head>

<body>
    <header>
        <h1>resultado</h1>
    </header>
    <main>
        <?php
        $name = $_POST["nome"] ?? "desconhecido";
        $supername = $_POST["sobrenome"] ?? "desconhecido";

        echo "olá $name seja bem vindo ao meu site seu sobrenome é $supername ?";
        ?>
        <p><a href="javascript:history.go(-1)"> voltar para o formulario</a></p>
    </main>
</body>

</html>