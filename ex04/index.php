<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interação com Forms</title>
</head>

<body>
    <header>
        <h1>Envio de Formulario</h1>
    </header>
    <section>
        <form action="cad.php" method="post">
            <label for="nome">nome</label>
            <input type="text" name="nome" id="idnome">
            <label for="sobrenome">sobrenome</label>
            <input type="text" name="sobrenome" id="idsobrenome">
            <input type="submit" value="Enviar">
        </form>
    </section>
</body>


</html>