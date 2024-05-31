<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Exemplo php</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo");
        echo "hoje no brasil a data é : " . date("d/M/Y");
        echo " e a hora é: " . date("G:i:s |");
        date_default_timezone_set('america/los_angeles');
        echo " hoje na gringa a data é : " . date("d/M/Y");
        echo " e a hora é: " . date("G:i:s");
    ?>
</body>

</html>