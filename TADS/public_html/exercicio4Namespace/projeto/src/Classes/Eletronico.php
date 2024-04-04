<?php
namespace Classes;

class Eletronico extends Produto{

    public function imprimeEtiqueta(){
        return "Etiqueta para Eletronico - Descrição: {$this->getDescricao()},
        Preço: {$this->getPrecoTotal()}, Quantidade: {$this->getQuantidade()},
        Codigo: {$this->getCodigo()} ";
    }
}

?>