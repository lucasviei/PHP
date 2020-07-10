
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário HTML - Curso PHP - eXcript</title>
</head>
<body>

<!--<form action="aula87get.php" method="GET">-->
<form action="aula87post.php?xget=50" method="POST">
    <fieldset>
        <legend>Formulário HTML</legend>
        <p>
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome">
        </p>
        <p>
            <label for="email">E-mail: </label>
            <input type="email" name="email" id="email">
        </p>
    </fieldset>
    <p>
        <input type="submit" value="Enviar" id="enviar">
    </p>
</form>

</body>
</html>