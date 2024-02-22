<?php
    $nome = "Laura";
//    echo gettype($nome);

    $varA = "A";
    $varB = &$varA;
    $varB = 'B';

    echo $varA;
    echo '<br>';
    echo $varB;

    echo "<p> o valor da variavel: $nome </p><br>";
    echo '<p> variavel em aspas simples: $varA </p>';

    $varN = "10";
    $numero = 12;
    echo $varN+$numero;

    $texto = "<br>Olá";
    $texto2 = "Mundo";
    echo $texto." ".$texto2;

    /*for($i = 1; $i <= 20; $i++){
        $quadrado = $i*$i;
        echo "O quadrodo de $i é $quadrado <br>";
    }*/
    $i = 1;
    while ($i <= 20) {
        $quadrado = $i*$i;
        echo "O quadrodo de $i é $quadrado <br>";
        $i++;
    }

    do{
        $quadrado = $i*$i;
        echo "O quadrodo de $i é $quadrado <br>";
        $i++;
    } while ($i <= 20) 



?>