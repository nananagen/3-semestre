<?php

$precos = array();

//$precos["telefone"] = 900;
//$precos["biscoito"] = 7.89;
//echo "O biscoito é {$precos["biscoito"]}";

//array por inteiro
$precoss = array(2 => 1.56, 10, 0 => 4.65,1 => 7.89, 1.32);

$precos = array("telefone" => 900, "biscoito" => 7.89);

//ordenando crescente string (chave do array)| method ksort ()
ksort($precos);
var_dump($precos);

$tas = array("MD", "BH", 4 => "KK", "HM", "JP");
$tas[] = "GF";

/*só funciona com índices ordenados
for ($i=0; $i < count($tas) ; $i++) { 
    echo "{$i}: {$tas[$i]} <br>";
} */

//funciona com ídices desordenados (dar preferencia)
foreach ($tas as $chave => $value) {
    echo "$chave : {$value} <br>";
}
//chave não é necessário, caso nao queira imprimir. O valor é necessário


?>