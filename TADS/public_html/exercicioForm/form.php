<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário com caixa de texto</title>
</head>
<body>
    <form action="pre.php" method="post">
        <input type="text" name="nome" /><br>
        <input type="text" name="anos" /> <br>
        <input type="radio" name="estCivil" value ="Casado">Casado
        <input type="radio" name="estCivil" value ="Solteiro">Solteiro<br>
        <select name="seuEstado" size="1">
            <option>São Paulo</option>
            <option>Rio de Janeiro</option>
            <option>Rio Grande do Sul</option>
            <option>Bahia</option>
        </select><br>
        <input type="checkbox" name="extras[]" value="garagem" checked>Garagem
        <input type="checkbox" name="extras[]" value="piscina">Piscina
        <input type="checkbox" name="extras[]" value="jardim">Jardim<br>
        <input type="submit" value="Enviar">
    </form>

</body>
</html>