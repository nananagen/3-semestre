<?php
namespace Classes;

class Hardware extends Produto{

    public function imprimeEtiqueta(){
        return "Etiqueta para Hardware - Descrição: {$this->getDescricao()},
        Preço: {$this->getPrecoTotal()}, Quantidade: {$this->getQuantidade()},
        Codigo: {$this->getCodigo()} ";
    }
}

?>