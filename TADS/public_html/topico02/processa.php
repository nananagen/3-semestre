<?php
    //echo "O nome digitado foi: {$_GET["nome"]} {$_GET["sobrenome"]}";

    //echo "O nome digitado foi: {$_POST["nome"]} {$_POST ["estCivil"]}<br>";

    // funciona com get ou post no metodo do html
    //echo "O nome digitado foi: {$_REQUEST["nome"]} {$_REQUEST["sobrenome"]}";


    //var_dump($_POST)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>O nome é <?= $_POST["nome"]?></p>
    <p>O estado civil é<?= $_POST["estCivil"]?></p>
    <p>O estado é <?= $_POST["selEstado"]?></p>
    <p>Os extras são: <br>
<?php
foreach ($_POST["extras"] as $extra):
    ?>
    <?= $extra ?><br>
    <?php
    endforeach;
    ?>
    </p>
    <p>O id é: <?= $_POST["userId"] ?></p>
    
    </body>

</html>