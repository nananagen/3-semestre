<?php

    $nome = $_POST["nome"];
    $anos = $_POST["anos"];
    $estadoCi = $_POST["estCivil"];
    $seuEstado = $_POST["seuEstado"];
    $extras = $_REQUEST['extras'];

    echo "Seu nome é: $nome<br>\n";
    echo "E sua idade é: $anos<br>\n";
    echo $nome." é $estadoCi<br>\n";
    echo "Seu estado é: $seuEstado<br>\n";
    echo "Os extras selecionados foram:<br>\n";
    

    foreach ($extras as $extra) {
        echo "$extra<br>\n";
    }

?>