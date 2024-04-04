<?php
namespace Classes;

class Cesta{

    private $itens = [];

//o método publico AdicionaItem que recebe um Produto como parâmetro,
    public function adicionaItem(Produto $produto){
        $this->itens[] = $produto;
    }
//o método ExibeLista que imprime uma lista contendo a etiqueta de 
//cada produto da cesta
    public function exibeLista(){
        echo "Lista de Produtos na Cesta: \n<br>";
        foreach($this->itens as $item):
            echo $item->imprimeEtiqueta()."\n<br>";
        endforeach;
    }
//método CalculaTotal que imprime o valor total de todos os 
//produtos da lista.
    public function calculaTotal(){
        $total = 0;

        foreach ($this->itens as $item):
            $total += (int)$item->getPrecoTotal()* $item->getQuantidade();
        endforeach;
        return $total;
    }
    

}

?>