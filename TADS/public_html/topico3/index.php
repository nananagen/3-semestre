<?php

require_once("UsuarioSessao.php");

$usu1 = new UsuarioSessao("Juquinha", "Juca");
$usu2 = new UsuarioSessao("Marquinho", "Marcos");

$usuSess = new UsuarioSessaoPermissao("MarcolaDoTrembala", "Marcos");

$usuP = new UsuarioSessaoPermissao("JUCA", "JUQUINHA", 10);

$usu1->salvar();

$usuP ->ler();

echo $usu1->nome; //-> é a mesma coisa que o . em outras linguagens $usu1->salvar("Juquinha"); == usu1.salvar("Juquinha")























