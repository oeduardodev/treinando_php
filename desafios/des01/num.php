<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta</title>
</head>

<body>
    <?php
    $num = $_POST["numero"];
    $numAnt = $num - 1;
    $numDps = $num + 1;
    echo "seu numero é: " . $num;
    echo " o antecessor dele é: " . $numAnt;
    echo " o posterior dele é: " . $numDps;
    ?>
</body>

</html>