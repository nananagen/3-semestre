<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Embutido</title>
    <style>
        .blue{
            color:blue;
        }        

    </style>
</head>
<body>
    <div class="principal">
        <h1>Quadrados</h1>
        <p>
            <?php 
            $i = 1;
            while ($i < 20) {
                echo "Quadrado ".$i." é ".$i* $i ."<br>";
                $i++;
            }

            $nome = "Lucas";
            $sobrenome = "Fidelis";

            echo ("<span class = blue>".$nome." ".$sobrenome."</span>");

            /*<h2 class = "blue">
                <?= echo "$nome $sobrenome";?>
            </h2>*/
            ?>
            
            

        </p>
    </div>
</body>
</html>