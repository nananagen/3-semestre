<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="processa.php" method="post">
        <input type="text" name="nome"><br>
        <input type="radio" name="estCivil" value="Solteiro">Solteiro
        <input type="radio" name="estCivil" value="Casado">Casado <br><br>
        <select name="selEstado">
            <option value="RJ">Rio de janeiro</option>
            <option value="MG">Minas Gerais</option>
            <option value="SP">São paulo</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="BA">Bahia</option>
        </select>
        <br>
        <br>
        <select name="mes">
            <option value="janeiro">01</option>
            <option value="fevereiro">02</option>
            <option value="março">03</option>
            <option value="abril">04</option>
            <option value="maio">05</option>
            <option value="junho">06</option>
            <option value="julho">07</option>
            <option value="agosto">08</option>
            <option value="setembro">09</option>
            <option value="outubro">10</option>
            <option value="novembro">11</option>
            <option value="dezembro">12</option>
        </select>
        <br>
        <br>
        <input type="checkbox" name="extras[]" value="Garagem">Garagem <br>
        <input type="checkbox" name="extras[]" value="Piscina">Piscina <br>
        <input type="checkbox" name="extras[]" value="Jardim">Jardim <br>
        <input type="hidden" name="token" value="132456">
        <input type="hidden" name="id" value="<?= $_POST["userId"]?>">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>


<!--enviar daqui para o processa atraves dp hidden  
<input type="hidden" name="id" value="-->