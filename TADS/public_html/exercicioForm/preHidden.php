<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Um campo hidden foi criado</h1>

        <form action="posHidden.php" method="POST">
            <input type="hidden" name="username" value="<?= $_POST["nome"] ?>">
            <input type="submit" value="Enviar">
        </form>
</body>
</html>