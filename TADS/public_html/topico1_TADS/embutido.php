<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Embutido</title>
    <style>
        .cor{
            color:pink;
        }
    </style>
</head>
<body>
    <div class="principal">
        <h1>Quadrados</h1>
        <p>
<?php
                $i = 1;
                while ($i <= 20) :
                    $quadrado = $i*$i;
                    echo "O quadrodo de $i é $quadrado<br>\n";
                    $i++;
                endwhile;
                $nome = "Laura";
                $sobrenome = "Nagen";                
?>
        </p>
        <h3 class="cor">
            <?= "$nome $sobrenome" ?>
        </h3>
    </div>
</body>
</html>