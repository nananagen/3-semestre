<?php

namespace Classes;
//Crie a classe abstrata Produto que tem os atributos privados: 
//Codigo, Descricao, Quantidade  e PrecoTotal. 
abstract class Produto {
    
    private $codigo;
    private $descricao;
    private $quantidade;
    private $precoTotal;

    public function __construct($descricao,$codigo, $quantidade, $precoTotal){
        $this->descricao = $descricao;
        $this->codigo = $codigo;
        $this->quantidade = $quantidade;
        $this->precoTotal = $precoTotal;
    }
    
    abstract public function imprimeEtiqueta();

    public function getCodigo(){
        return $this->codigo;
    }

    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function getQuantidade(){
        return $this->quantidade;
    }

    public function setQuantidade($quantidade){
        $this->quantidade = $quantidade;
    }

    public function getPrecoTotal(){
        return $this->precoTotal;
    }

    public function setPrecoTotal($precoTotal){
        $this->precoTotal = $precoTotal;
    }
}

?>