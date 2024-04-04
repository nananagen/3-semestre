<?php
$preco = array();/*

$precos[0] = 1.75;
$precos[2] = 4.65;
$precos[] = 7.89;
$precos[] = 1.32;
$precos["telefone"] = 15;
$precos["biscoito"] = 7.89;


var_dump($precos);

echo 'O preço do biscoito é '.$precos["biscoito"];

echo "O preço do biscoito é {$precos["biscoito"]}";*/

//criando array de uma vez

$precos = array(2 => 1.56,0 => 5.74,1 => 23,8.96);
//$precos = array ("telefone" => 900, "biscoito" => 7.89);

var_dump($precos);
krsort($precos);

$tas = array("MD", "BH", "KK", "HM", "JP");

/* for ($i = 0; $i < count($tas) ; $i++){
    echo "{$i}: {$tas[$i]} <br>";
} */


foreach ($tas as $key => $value) {
    echo "$key : $value <br>" ;
}
?>