<?php
require_once('autoload.php');

use Classes\Cesta;
use Classes\Hardware;
use Classes\Eletronico;
use Classes\Smartphone;

$cesta = new Cesta();
$produto = new Hardware("Memoria", 11234, 1515, 55);
$produto1 = new Eletronico("Tablet", 123, 1444, 577);
$produto2 = new Smartphone("A20", 123456, 45664, 879);
$produto3 = new Hardware("CPU", 46468, 464, 3734);
$produto4 = new Eletronico("Computador", 78686, 568, 3738);
$produto5 = new Smartphone("A22", 456546, 687, 3844);
$produto6 = new Hardware("Placa mãe", 676, 676, 7866);
$produto7 = new Eletronico("Notebook", 46546, 6786, 6737);
$produto8 = new Smartphone("3310", 6456456, 9789, 7897);
$produto9 = new Hardware("Placa de Video", 7787, 78667, 7865);
$produto10 = new Eletronico("Mouse", 7868, 67347, 5040);

$cesta->adicionaItem($produto);
$cesta->adicionaItem($produto1);
$cesta->adicionaItem($produto2);
$cesta->adicionaItem($produto3);
$cesta->adicionaItem($produto4);
$cesta->adicionaItem($produto5);
$cesta->adicionaItem($produto6);
$cesta->adicionaItem($produto7);
$cesta->adicionaItem($produto8);
$cesta->adicionaItem($produto9);
$cesta->adicionaItem($produto10);


$cesta->exibeLista();

echo "Total da cesta: {$cesta->calculaTotal()}";
?>