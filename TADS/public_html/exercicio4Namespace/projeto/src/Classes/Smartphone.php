<?php
namespace Classes;

class Smartphone extends Produto{

    public function imprimeEtiqueta(){
        return "Etiqueta para Smartphone - Descrição: {$this->getDescricao()},
        Preço: {$this->getPrecoTotal()}, Quantidade: {$this->getQuantidade()},
        Codigo: {$this->getCodigo()} ";
    }
}

?>