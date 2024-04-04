<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="processa.php?id=<?=$_POST["userId"]?>" method="post" >
        <input type="text" name="nome" id="nome"><br>
        <input type="radio" name="estCivil" value="Solteiro">Solteiro
        <input type="radio" name="estCivil" value="Casado">Casado <br>
        <select name="selEstado">
            <option value="RJ">Rio de Janeiro</option>
            <option value="MG">Minas Gerais</option>
            <option value="SP">São Paulo</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="BA">Bahia</option>
        </select><br>
        <input type="checkbox" name="extras[]" value="Garagem">Garagem<br>
        <input type="checkbox" name="extras[]" value="Piscina">Piscina<br>
        <input type="checkbox" name="extras[]" value="Jardim">Jardim<br>
        <input type="hidden" name="token"  value="123456">
        <input type="hidden" name="userId"  value="<?= $_POST["userId"]/*condicao*/??""?>">
        <input value="ID">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>