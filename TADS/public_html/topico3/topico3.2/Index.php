<?php

/*
require_once "Funcionario.php";
require_once "Departamento.php";
require_once "Pessoa.php"
require_once "./Financas/Conta.php";
require_once "./Seguranca/Conta.php";
*/
spl_autoload_reguster(function($classe){
    echo "Fez o rquire do {$classe}.php";
    require_once str_replace('\\','/',$classe'.php');
});


//  use Seguranca\Conta;  =  'use' não inibe o require, define qual namespace irá ser usado.

$func1 = new Funcionario(2000, "Juquinha", 123);
$func2 = new Funcionario(2000, "Mariazinha", 456);

$dep = new Departamento();

$dep->addFuncionario($func1);
$dep->addFuncionario($func2);

//echo $dep->getFuncionario(1)->getSalario();
//echo Departamento::IDENTIFICADOR;
//$func1->setIdentidade(789);

//$seguranca = new Seguranca\Conta();
//$financas = new Financas\Conta();

$contaF = new ContaF();
$contaS = new ContaS();