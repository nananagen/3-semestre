<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $patinhos = 99;
        while ($patinhos >= 1) :
?>       
    <p>
        <?= $patinhos?> foram passear <br>
        Além das montanhas<br>
        A mamãe gritou: Qua, qua, qua<br> 
        Mas só <?= --$patinhos ?> patinhos voltaram de lá
    </p>     
<?php
    endwhile;
?>
</body>
</html>