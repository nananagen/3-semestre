<?php
require_once("Funcionarios.php")

class Departamento {
    private $funcionario;
    const IDENTIFICADOR = 789; 
    static $quantidade = 0;

    public function __construct(){
        $this->funcionarios = array() ;
    }

    public function addFuncionario(Funcionario $funcionario){
        $this->funcionarios[] = $funcionario;
        self::$quantidade++;
        //array_push($this->funcinarios,$funcionario);
    }

    public function getFuncionarios(){
        return $this->funcionarios;
    }

    public function getFuncionario(int $index){
        return $this->funcionarios[$index];
    }
    //
} 


$departamento = new Departamento;

//

$departamento->getFuncionario()->alteraSalario(2000);