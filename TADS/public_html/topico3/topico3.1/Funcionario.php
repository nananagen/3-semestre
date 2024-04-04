<?php 
require_once("Pessoa.php");

    class Funcionario extends Pessoa{

        private int $matricula;

        public function __construct(float $salario, string $nome, int $matricula){
            parent::__construct($salario,$nome);
            $this->matricula = $matricula;
        }
        
        public function __destruct(){
            echo "Destruindo o objeto {$this->nome}"
        }

        public function getSalario(): float{
            return $this->salario;
        }
        public function setSalario(float $valor){
            if($valor >= 1000){
                $this->salario = $valor;
            }

        function setNome(string $nome) {
            $this->$nome = $nome;
            }
        }

        function getNome() {
            return $this->$nome;
        }
        
        function imprime() {
            echo "<p> {$this->nome}</p>"
            echo "<p> {$this->salario}</p>"
            echo "<p> {$this->matricula}</p>"
        }

        function __get($nome){
            if ($nome == "identidade") {
                return $this->matricula;
            }
        }

        function __set($nome, $valor){
            if ($nome == "identidade") {
                return $this->matricula = $valor;
            }
        }

        function __call($nome, $parametros){
            echo "foi chamado $nome com os parametros: ";
            print_r($parametros);
            die();
        }
    }