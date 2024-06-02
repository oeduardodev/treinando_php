<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <h1>Converta para dolar (fixo)</h1>
    </header>
    <?php
    if (isset($_POST["dinheiro"])) {
        $dinheiro = $_POST["dinheiro"];
        $cotacao = 5.40;
        $convertido = ($dinheiro / $cotacao);
        $resultado = number_format($convertido, 2, ",", "");

        echo "Seu dinheiro em dólar vai de $dinheiro para $resultado";
    }
    ?>
    <form method="post">
        <input type="number" name="dinheiro" step="0.001">
        <input type="submit" value="Enviar">
    </form>
</body>

</html>