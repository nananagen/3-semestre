<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>O nome enviado foi: </h1>
    <?php
        $username = $_REQUEST['username'];
        echo $username;
    ?>
</body>
</html>