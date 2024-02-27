import No from './No';
import BuscaBProfundidade from "./BuscaBProfundidade";
import BuscaBLargura from "./BuscaBLargura.js";
class ArvoreBinaria{
    raiz = null;

    constructor(valor){
        this.raiz = new No(valor);
    }

    buscarPPreOrdem(){
        console.log("Busca em pré-ordem");
        BuscaBProfundidade.preOrdem(this.raiz);
    }
    buscarPPreOrdem(){
        console.log("Busca em pós-ordem");
        BuscaBProfundidade.posOrdem(this.raiz);
    }
    buscarPPreOrdem(){
        console.log("Busca em in-ordem");
        BuscaBProfundidade.inOrdem(this.raiz);
    }

    buscarL(){
        console.log("Busca em largura:");
        BuscaBLargura.buscar(this.raiz);
    }
}

export default ArvoreBinaria;