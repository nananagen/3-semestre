<?php
/*Desenvolva um script que recebe um array de informações (pré-definido) 
como parâmetro e mostre na tela,em forma de tabela, as informações do array.*/
$array = array("Lucas", "lucas@gm", 31);


/*O array vai ser uma matriz onde cada linha possui os campos, 
Nome (String) , e-mail (String), Senha (String), Sexo (char), 
ReceberEmail(boolean).*/

$array2 = array(
    array("lucas","lucas@gm","lucas123","m",true),
    array("fa","fa@gm","fa123","f",false),
    array("ja","ja@gm","ja123","m",true)
);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <table border = "1">
            <tr>
                <th>Nome</th>
                <th>E-Mail</th>
                <th>Idade</th>
            </tr>           
            <tr>
                <td><?= $array[0] ?></td>
                <td><?= $array[1] ?></td>
                <td><?= $array[2] ?></td>
            </tr>            
        </table>

        <table border="1">
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>senha</th>
                <th>Sexo</th>
                <th>ReceberEmail?</th>
            </tr><br>

        <?php
            foreach ($array2 as $registro):
        ?>
            <tr>
                <td><?= $registro[0] ?></td>
                <td><?= $registro[1] ?></td>
                <td><?= $registro[2] ?></td>
                <td><?= ($registro[3] == 'm')? 'Masculino':'Feminino' ?></td>
                <td><?= ($registro[4] == '1')? 'Verdadeiro': 'Falso' ?></td>
            </tr>
        <?php 
            endforeach
        ?>
        </table>
</body>
</html>