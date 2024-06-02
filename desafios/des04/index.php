<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor para Dolar</title>
</head>

<body>
    <header>
        <h1>Converta para dolar (api)</h1>
    </header>
    <?php
    // URL da API
    $url = 'https://economia.awesomeapi.com.br/last/USD-BRL,EUR-BRL,BTC-BRL';

    // Faz a requisição GET
    $response = file_get_contents($url);

    // Decodifica o JSON recebido
    $data = json_decode($response, true);

    // Acessa o valor 'high' do array 'USDBRL'
    $cotacao = $data['USDBRL']['high'];

    // Verifica se o valor foi enviado via POST e se é numérico
    if (isset($_POST['dinheiro'])) {
        $dinheiro = $_POST['dinheiro'];
        $convertido = $dinheiro / $cotacao;
        $resultado = number_format($convertido, 2, ',', '');

        echo "Seu dinheiro em reais $dinheiro convertido em dólares é: $resultado";
    }
    ?>
    <form method="post">
        <input type="number" name="dinheiro" step="0.001">
        <input type="submit" value="Enviar">
    </form>

</html>