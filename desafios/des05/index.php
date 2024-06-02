<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisar numero</title>
</head>

<body>
    <header>
        <h1>Analisar numero</h1>
    </header>

    <?php
    $numero = $_POST["numero"] ?? 0;
    $int = (int) $numero;
    $res =  $numero - $int;

    echo "Número Inteiro: " . $int . "<br>";
    echo "Resto: " . $res . "<br>";
    ?>

    <form method="post">
        <input type="number" name="numero" step="0,001">
        <input type="submit" value="Enviar">
    </form>

</html>