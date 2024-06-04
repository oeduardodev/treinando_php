<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>

    <?php
    setcookie("dia-da-semana", "SEGUNDA", time() + 3600);

    session_start();
    $_SESSION["teste"] = "Sessão iniciada com sucesso!";

    echo "<h1>Superglobal GET</h1>";
    var_dump($_GET);

    echo "<h1>Superglobal POST</h1>";
    var_dump($_POST);

    echo "<h1>Superglobal REQUEST</h1>";
    var_dump($_REQUEST);

    echo "<h1>Superglobal COOKIES</h1>";
    var_dump($_COOKIE);

    echo "<h1>Superglobal SESSÃO</h1>";
    var_dump($_SESSION);

    echo "<h1>Superglobal ENV</h1>";
    var_dump($_ENV);

    echo "<h1>Superglobal GLOBALS</h1>";
    var_dump($GLOBALS);

    echo "<h1>Superglobal SEVER</h1>";
    var_dump($_SERVER)
    ?>

    </pre>
</body>

</html>