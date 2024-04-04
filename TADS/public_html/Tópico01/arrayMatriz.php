<?php

$dados = array(
    array(0,"João", "joao@i.br", "123456", 'm',1),
    array(1,"Maria", "jmaria@i.br", "123456", 'f',1),
    array(2,"João", "joao@i.br", "123456", 'm',1),
    array(3,"João", "joao@i.br", "123456", 'm',0),
    array(4,"João", "joao@i.br", "123456", 'm',0));
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <table border ="1">
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Senha</th>
        <th>Gênero</th>
        <th>Receber Email?</th>
    </tr>

    <?php
        foreach ($dados as $registro):

    ?>
        <tr>
            <td><?= $registro[0] ?></td>
            <td><?= $registro[1] ?></td>
            <td><?= $registro[2] ?></td>
            <td><?= $registro[3] ?></td>
            <td><?= ($registro[4] == 'm')? 'Masculino':'Feminino' ?></td>
            <td><?= ($registro[5])?'Sim':'Não' ?></td>
        </tr>
    <?php
        endforeach;
    ?>
   </table>
</body>
</html>
