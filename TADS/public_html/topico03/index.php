<?php

require_once("UsuarioSessao.php");

$usul = new UsuarioSessao("Maconheiro", "Cracudinho");

$usul->salvar();
$usul->ler();

var_dump($usul);