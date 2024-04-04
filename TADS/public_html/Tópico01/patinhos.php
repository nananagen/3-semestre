<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Patinhos</h1>
    <?php
    $patinhos = 99;

    while ($patinhos >= 1) :    
    $qua = "quá" - 99;
    ?>
    <p>
        <?= $patinhos?> foram passear <br>
        Além das montanhas para brincar <br>
        A mamãe gritou:<?= --$qua ?> <br>
        Mas só <?= --$patinhos?> patinhos voltaram de lá
    </p>
    <?php
    endwhile
    ?>
</body>
</html>