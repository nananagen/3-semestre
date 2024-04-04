<?php

require_once "Funcionario.php";
require_once "Departamento.php";
require_once "Pessoa.php"

$func1 = new Funcionario(2000, "Juquinha", 123);
$func2 = new Funcionario(2000, "Mariazinha", 456);

$dep = new Departamento();

$dep->addFuncionario($func1);
$dep->addFuncionario($func2);

//echo $dep->getFuncionario(1)->getSalario();
//echo Departamento::IDENTIFICADOR;

$func1->setIdentidade(789);