<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <h1>Gere um numero</h1>
    </header>
    <?php
    $numero = null;
    $numero = $_POST['numero'] ?? 0;
    $numero = mt_rand(10, 1000);
    echo "<p>Número gerado: $numero</p>";
    ?>
    <form method="post">
        <input type="submit" name="numero" value="Enviar">
    </form>
</body>

</html>