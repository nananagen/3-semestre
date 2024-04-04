<?php
require_once "Database.php";

$db = new DataBase();

$con = $db->getConnection();


$query = 'SELECT id, nome, matricula FROM tads.alunos;'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1>
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>matricula</td>
    </tr>    
    <?php
    if($result = $con->query($sql)):
        while ($row = $result->fetch_row()):
    ?>
        <tr>
            <th><?= $row[0]?></th>
            <th><?= $row[1]?></th>
            <th><?= $row[2]?></th>
        </tr>
    <?php
        endwhile;
    endif;
    ?>
        </table>         
</body>
</html>

<?php
    var_dump($row);
           
    //var_dump($result);
    
    $db->closeConnection();
    ?>

    documento index

    <?php
    require_once "Database.php";

    $db = new Database();

    $con = $db->getConnection();

    require "formulario.php";

    $con = $db->closeConnection();
    ?>